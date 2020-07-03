<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $section_one = Post::getPosts(1);
        $section_two = Post::getPosts(2);
        return view(
            'frontend.home',
            compact('section_one', 'section_two')
        );
    }

    public function details(Post $post)
    {
        return view('frontend.details', compact('post'));
    }
}
