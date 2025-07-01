<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'excerpt', 'status', 'seo_title', 'meta_description', 'keywords'];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}
