<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\relations\Pivot;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\{MenuItem,Menu};

class MenuMenuItem extends Pivot
{
    use HasFactory;

    protected $table = "menu__menu_item";

    protected $filable = [
        "sort_order",
        "include_subitem"
    ];

    public function menu_items()
    {
        return $this->belongsTo(MenuItem::class,"menu__menu_item","menu_id","menu_item_id");
        // ->withTimestamps()
        // ->withPivot(['sort_order','include_subitem'])
        // ->orderByPivot('sort_order')
        // ->as('menu_links');
    }

    public function menus()
    {
        return $this->belongsTo(Menu::class,"menu__menu_item","menu_id","menu_item_id");
        // ->withTimestamps()
        // ->withPivot(['sort_order','include_subitem'])
        // ->orderByPivot('sort_order')
        // ->as('menu_name');
    }

    protected function includeSubitem(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ($value == 1 ? "Yes" : "No"),
        );
    }

    protected function menuItemId(): Attribute
    {
        return Attribute::make(
            get: fn(string $value)  =>  MenuItem::findorFail($value)->title,
        );
    }

    protected function menuId(): Attribute
    {
        return Attribute::make(
            get: fn(string $value)  =>  Menu::findOrFail($value)->title,
        );
    }
}
