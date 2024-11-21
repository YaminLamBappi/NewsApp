<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $fillable = [
        "tite",
        "description",
        "image",
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function likes(): BelongsTo
    {
        return $this->belongsTo(Like::class, 'news_id');
    }
}
