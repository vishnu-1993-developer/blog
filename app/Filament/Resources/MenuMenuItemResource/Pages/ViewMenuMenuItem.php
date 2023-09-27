<?php

namespace App\Filament\Resources\MenuMenuItemResource\Pages;

use App\Filament\Resources\MenuMenuItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMenuMenuItem extends ViewRecord
{
    protected static string $resource = MenuMenuItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
