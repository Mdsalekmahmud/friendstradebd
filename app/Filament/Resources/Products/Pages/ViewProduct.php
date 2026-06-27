<?php
namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Actions\EditAction;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Pages\ViewRecord;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ViewProduct extends ViewRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

    public function infolist(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Product Details')
                ->schema([
                    ImageEntry::make('images')
                        ->label('Product Images')
                        ->state(function ($record) {
                            return $record->images->map(function ($image) {

                                if (str_starts_with($image->image, 'storage/')) {
                                    return asset($image->image);
                                }

                                return asset('storage/' . $image->image);
                            })->toArray();
                        }),
                    TextEntry::make('name'),
                    TextEntry::make('price'),
                    TextEntry::make('regular_price'),
                    TextEntry::make('description')
                        ->html(),
                    TextEntry::make('specification')
                        ->html(),
                    TextEntry::make('features')
                        ->html(),
                ]),
        ]);
    }
}
