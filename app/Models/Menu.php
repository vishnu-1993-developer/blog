<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuItem;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function menu_items(): BelongsToMany
    {
        return $this->belongsToMany(MenuItem::class,"menu__menu_item","menu_id","menu_item_id")
        ->withTimestamps()
        ->withPivot(['sort_order','include_subitem'])
        ->orderByPivot('sort_order')
        ->as('menu_links');
    }

    public function parent_menu_items(): BelongsToMany
    {
        return $this->belongsToMany(MenuItem::class,"menu__menu_item","menu_id","menu_item_id")
        ->withTimestamps()
        ->withPivot(['sort_order','include_subitem'])
        ->orderByPivot('sort_order')
        ->wherePivotIn('include_subitem',[0])
        ->as('menu_links');
    }

    public function title()
    {
        return "Tester";
    }
}
