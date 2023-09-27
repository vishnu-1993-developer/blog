<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "link",
        "is_external_link",
        "sort_order",
        "parent_id"
    ];

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class,"menu__menu_item","menu_id","menu_item_id")
        ->withTimestamps()
        ->withPivot(['sort_order','include_subitem'])
        ->orderByPivot('sort_order')
        ->as('menu_name');
    }
}
