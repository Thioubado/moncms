<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //
    public $timestamps = false;

    protected $fillable = ['title', 'slug'];

    // Les relations
    public function Posts(): HasMany
    {
        return $this->hasmany(Post::class);
    }

}
