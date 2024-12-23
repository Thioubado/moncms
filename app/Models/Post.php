<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'active',
        'image',
        'user_id',
        'category_id',
        'seo_title',
        'meta_description',
        'meta_keywords',
        'pinned',
    ];
}
