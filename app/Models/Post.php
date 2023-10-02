<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\{Category,User,Tag};
use Str;
use url;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "thumbnail",
        "body",
        "featured",
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

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function shortBody()
    {
        return Str::words(strip_tags($this->body),45);
    }

    public function url()
    {
        return url('blog/' . $this->slug);
    }
}
