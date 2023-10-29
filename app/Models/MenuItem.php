<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Casts\Attribute;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "link",
        "is_external_link",
        "sort_order",
        "parent_id",
        "active"
    ];

    public function menus(): BelongsToMany
    {
        return $this->belongsToMany(Menu::class,"menu__menu_item","menu_id","menu_item_id")
        ->withTimestamps()
        ->withPivot(['sort_order','include_subitem'])
        ->orderByPivot('sort_order')
        ->as('menu_name');
    }

    protected function isExternalLink(): Attribute
    {
        return Attribute::make(
            get: fn(string $value)  =>  ($value == 1 ? "Yes" : "No"),
        );
    }
}
