<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        $authors = User::has('posts')->get();

        return view('blog.index', compact('posts', 'authors'));
    }

    public function show(Post $post)
    {
        $post = $post;
        // Get the users who created the specific post
        $users = $post->users;

        // Initialize an empty array to store the random posts
        $randomPosts = collect();

        // Loop through each user and get 5 random posts
        foreach ($users as $user) {
            $posts = $user->posts()->get();
            $randomPosts = $randomPosts->merge($posts);
        }

        // Shuffle the array of random posts
        if ($randomPosts->count() > 5) {
            $randomPosts = $randomPosts->random(5);
        }

        return view('blog.show', compact('post', 'randomPosts'));
    }
}
