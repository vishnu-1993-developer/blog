<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\relations\Pivot;

class MenuMenuItem extends Pivot
{
    use HasFactory;

    protected $table = "menu__menu_item";

    protected $filable = [
        "sort_order",
        "include_subitem"
    ];
}
