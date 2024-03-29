<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Teaching;
use App\Models\User;
use App\Models\Work;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $teachings = Teaching::all();

        $works = Work::whereHas(
            'user',
            function ($q) {
                $q->whereHas(
                    'roles',
                    function ($q) {
                        $q->whereIn('role', ['alumni', 'student']);
                    }
                );
            }
        )->inRandomOrder()->limit(9)->get();


        foreach ($works as $work) {
            $work->excerpt = Str::limit($work->excerpt, 150);
        }

        $alumnis = User::whereHas(
            'roles',
            function ($q) {
                $q->where('role', 'alumni');
            }
        )->inRandomOrder()->limit(6)->get();

        $posts = Post::orderBy('published_at', 'DESC')->limit(4)->get();

        foreach ($posts as $post) {
            $post->excerpt = Str::limit($post->excerpt, 150);
        }

        return view('home', compact('teachings', 'works', 'alumnis', 'posts'));
    }
}
