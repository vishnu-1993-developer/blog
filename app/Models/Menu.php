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

    public function menu_items(): HasMany
    {
        return $this->hasMany(MenuItem::class);
    }
}
