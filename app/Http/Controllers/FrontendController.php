<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function blog()
    {
        $posts = Post::published()->latest()->paginate(10);
        return view('frontend.blog', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->published()->firstOrFail();
        return view('frontend.post', compact('post'));
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->published()->firstOrFail();
        return view('frontend.page', compact('page'));
    }
}