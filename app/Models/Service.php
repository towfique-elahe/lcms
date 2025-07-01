<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'excerpt', 'status', 'seo_title', 'meta_description', 'keywords'];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}