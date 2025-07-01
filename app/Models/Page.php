<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'status', 'seo_title', 'meta_description'];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}