<?php

namespace App\Filament\Resources\MenuMenuItemResource\Pages;

use App\Filament\Resources\MenuMenuItemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateMenuMenuItem extends CreateRecord
{
    protected static string $resource = MenuMenuItemResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        $modelRecord = [];

        if(is_array($data['menu_item_id']) && count($data['menu_item_id']) > 1)
        {
            foreach($data['menu_item_id'] as $menu_item_id)
            {
                $newData = [
                    "menu_id"           =>  $data['menu_id'],
                    "menu_item_id"      =>  $menu_item_id,
                    "include_subitem"   =>  $data['include_subitem'],
                    "sort_order"        =>  null,
                ];
                $modelRecord = static::getModel()::create($newData);
            }
        }
        else
        {
            $data['menu_item_id'] = $data['menu_item_id'][0];
            $modelRecord = static::getModel()::create($data);
        }
        return $modelRecord;      
    }
}
