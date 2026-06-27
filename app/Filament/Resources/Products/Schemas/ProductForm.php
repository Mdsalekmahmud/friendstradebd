<?php
namespace App\Filament\Resources\Products\Schemas;

use App\Services\VariationService;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Tabs::make('Product Tabs')
                ->tabs([

                    Tab::make('Basic Info')
                        ->schema([
                            Grid::make(2)->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->label('Product Name'),

                                Select::make('status')
                                    ->options([
                                        'Available' => 'Available',
                                        'Stock Out' => 'Stock Out',
                                        'Upcoming'  => 'Upcoming',
                                    ])
                                    ->default('Available')
                                    ->required(),

                                Select::make('category_id')
                                    ->relationship('category', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                Select::make('brand_id')
                                    ->relationship('brand', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                TextInput::make('price')
                                    ->numeric()
                                    ->required(),

                                TextInput::make('regular_price')
                                    ->numeric(),

                                Toggle::make('call_for_price'),

                                Toggle::make('use_variations')
                                    ->label('Use Variations')
                                    ->live(),
                            ]),
                        ]),

                    Tab::make('Details')
                        ->schema([
                            Textarea::make('features')->rows(5),
                            Textarea::make('description')->rows(8),
                            Textarea::make('specification')->rows(8),
                        ]),

                    Tab::make('Images')
                        ->schema([
                            Repeater::make('images')
                                ->relationship('images')
                                ->schema([
                                    FileUpload::make('image')
                                        ->image()
                                        ->disk('public') 
                                        ->directory('images/productimage')
                                        ->visibility('public')
                                        ->imagePreviewHeight(150)
                                        ->openable()
                                        ->downloadable()
                                        ->required()
                                        ->imageResizeMode('cover')
                                        ->imageCropAspectRatio('1:1')
                                        ->maxSize(2048)
                                        ->dehydrateStateUsing(fn ($state) => str_replace('\\', '/', $state)),

                                    // Add hidden ID to help with updates
                                    TextInput::make('id')
                                        ->hidden()
                                        ->dehydrated(false),

                                    Toggle::make('is_primary')
                                        ->label('Primary Image')
                                        ->default(false),
                                ])
                                ->columns(2)
                                ->defaultItems(0)
                                ->reorderable()
                            // ->orderColumn('sort_order') // If you have a sort_order column
                                ->itemLabel(fn(array $state): ?string =>
                                    isset($state['is_primary']) && $state['is_primary'] === true
                                        ? '⭐ Primary Image'
                                        : null
                                ),
                        ]),

                    Tab::make('Attributes')
                        ->visible(fn($get) => $get('use_variations'))
                        ->schema([
                            Repeater::make('attributes')
                                ->schema([
                                    TextInput::make('name')
                                        ->required()
                                        ->placeholder('Color / Size / Storage'),

                                    TagsInput::make('values')
                                        ->required()
                                        ->placeholder('Red, Blue, XL, 128GB'),
                                ])
                                ->columns(2)
                                ->defaultItems(1)
                                ->addActionLabel('Add Attribute'),

                            Action::make('generate')
                                ->label(fn($get) => 'Generate Variations (' . self::getVariationCount($get('attributes') ?? []) . ')')
                                ->button()
                                ->color('warning')
                                ->action(function ($get, $set) {

                                    $attributes = $get('attributes') ?? [];

                                    $arrays = collect($attributes)
                                        ->pluck('values')
                                        ->filter(fn($values) => is_array($values) && count($values) > 0)
                                        ->values()
                                        ->toArray();

                                    $combinations = VariationService::cartesianProduct($arrays);

                                    $variations = collect($combinations)
                                        ->map(function ($combination) {
                                            return [
                                                'name'  => implode(' / ', $combination),
                                                'price' => null,
                                                'stock' => null,
                                                'image' => null,
                                            ];
                                        })
                                        ->values()
                                        ->toArray();

                                    $set('variations', $variations);
                                }),
                        ]),

                    Tab::make('Variations')
                        ->visible(fn($get) => $get('use_variations'))
                        ->schema([
                            Repeater::make('variations')
                                ->schema([
                                    TextInput::make('name')
                                        ->required(),

                                    TextInput::make('price')
                                        ->numeric(),

                                    TextInput::make('stock')
                                        ->numeric(),

                                    FileUpload::make('image')
                                        ->image()
                                        ->directory('variations'),
                                ])
                                ->columns(2)
                                ->addActionLabel('Add Variation'),
                        ]),
                ])
                ->columnSpanFull(),
        ]);
    }

    protected static function getVariationCount(array $attributes): int
    {
        $total = 1;

        $validAttributes = collect($attributes)
            ->pluck('values')
            ->filter(fn($values) => is_array($values) && count($values) > 0);

        if ($validAttributes->isEmpty()) {
            return 0;
        }

        foreach ($validAttributes as $values) {
            $total *= count($values);
        }

        return $total;
    }
}
