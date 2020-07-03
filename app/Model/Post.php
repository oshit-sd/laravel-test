<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
        static::updating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }


    public static function getPosts($section)
    {
        return Post::where('show_section', $section)
            ->where('publish', 1)->latest()->get();
    }
}
