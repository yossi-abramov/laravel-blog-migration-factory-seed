<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Get all of post tags.
     */
    public function tags()
    {
        return $this->hasMany(PostTag::class);
    }
}
