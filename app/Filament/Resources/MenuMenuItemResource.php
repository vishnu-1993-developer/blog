<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuMenuItemResource\Pages;
use App\Filament\Resources\MenuMenuItemResource\RelationManagers;
use App\Models\{Menu, MenuMenuItem, MenuItem};
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Set;

class MenuMenuItemResource extends Resource
{
    protected static ?string $model = MenuMenuItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Menu Management';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        $sortOrders = [];
        for($i=1;$i<25;$i++)
        {
            $sortOrders[] = $i;
        }
        return $form
            ->schema([
                Select::make('menu_id')
                ->label("Select Menu")
                ->options(Menu::all()->pluck('title','id'))
                ->searchable(),
                Select::make('menu_item_id')
                ->label("Select Menu Items")
                ->options(MenuItem::all()->pluck('title','id'))
                ->searchable()
                ->multiple(),
                Toggle::make('include_subitem')
                    ->required(),
                Select::make('sort_order')
                ->options($sortOrders)
                ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('menu_id')
                ->label("Menu Name"),
                TextColumn::make('menu_item_id')
                ->label("Menu Item"),
                TextColumn::make('include_subitem')
                ->label("include Child Items"),
                TextColumn::make('sort_order')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuMenuItems::route('/'),
            'create' => Pages\CreateMenuMenuItem::route('/create'),
            'view' => Pages\ViewMenuMenuItem::route('/{record}'),
            'edit' => Pages\EditMenuMenuItem::route('/{record}/edit'),
        ];
    }    
}
