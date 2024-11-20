<?php

namespace App\Models;

use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Hash;

class Category extends Model
{
    protected $fillable = [
        "name",
    ];
    //
    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}
