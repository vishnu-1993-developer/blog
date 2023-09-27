<?php

namespace App\Filament\Resources\MenuMenuItemResource\Pages;

use App\Filament\Resources\MenuMenuItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuMenuItems extends ListRecords
{
    protected static string $resource = MenuMenuItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
