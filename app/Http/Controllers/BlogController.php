<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $authors = User::has('posts')->get();

        return view('blog.index', compact('posts', 'authors'));
    }
}
