<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\{Category,User};

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "thumbnail",
        "body",
        "active",
        "published_at",
        "user_id"
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class)->withTimestamps();;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
