<?php

namespace App\Filament\Resources\MenuMenuItemResource\Pages;

use App\Filament\Resources\MenuMenuItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuMenuItem extends EditRecord
{
    protected static string $resource = MenuMenuItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
