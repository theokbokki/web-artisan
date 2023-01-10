<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\Post;
use App\Models\User;
use App\Models\Question;
use App\Models\Lesson;
use App\Models\Work;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = request('search');

        $posts = Post::search(request('search'))->take(6)->get();

        $users = User::search($searchTerm)->get();

        $teachers = $users->filter(function ($user) {
            return $user->roles->count() && $user->roles->contains('role', 'teacher');
        })->values()->take(6);

        $alumnis = $users->filter(function ($user) {
            return $user->roles->count() && $user->roles->contains('role', 'alumni');
        })->values()->take(6);

        $questions = Question::search($searchTerm)->take(6)->get();

        $lessons = Lesson::search($searchTerm)->take(6)->get();

        $works = Work::search($searchTerm)->take(6)->get();

        $internships = Internship::search($searchTerm)->take(6)->get();

        return view('search.index', compact('teachers', 'posts', 'alumnis', 'questions', 'lessons', 'works', 'internships', 'searchTerm'));
    }
}
