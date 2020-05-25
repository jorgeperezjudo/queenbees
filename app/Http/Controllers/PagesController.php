<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function inicio()
    {
        $post = Post::all();

        return view('inicio', compact('post'));
    }

    public function getPage($slug = null)
    {

        $post = Post::where('slug', $slug);
        $post = $post->firstOrFail();
        // return view($page->template)->with('page', $page);
        return view('singlepost', compact('post'));
    }
}
