<?php
namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),

                ImageColumn::make('image')
                    ->label('Product Image')
                    ->getStateUsing(function ($record) {
                        $primaryImage = $record->images()
                            ->where('is_primary', true)
                            ->first();

                        if (! $primaryImage) {
                            return null;
                        }

                        return str_starts_with($primaryImage->image, 'storage/')
                            ? asset($primaryImage->image)
                            : asset('storage/' . $primaryImage->image);
                    }),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('price')->sortable()->searchable(),
                TextColumn::make('regular_price')->sortable()->searchable(),
                TextColumn::make('brand.name')->sortable()->searchable(),
                TextColumn::make('category.parent.parent.name')->label('Top Category')->sortable()->searchable(),
                TextColumn::make('category.parent.name')->label('Sub Category')->sortable()->searchable(),
                TextColumn::make('category.name')->limit(10)->sortable()->searchable(),
                TextColumn::make('status')->sortable()->searchable(),
                TextColumn::make('call_for_price')->sortable()->searchable(),
                TextColumn::make('variations_count')->counts('variations')->label('Variations Count')->sortable(),
                TextColumn::make('features')->limit(20)->sortable()->searchable(),
                TextColumn::make('specification')->limit(20)->sortable()->searchable(),
                TextColumn::make('description')->limit(20)->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
