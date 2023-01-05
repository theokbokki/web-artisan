<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;
use App\Models\Question;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::paginate(12);
        $students = User::has('works')->get();

        return view('works.index', compact('works', 'students'));
    }

    public function show(Work $work)
    {
        $work = $work;
        $works = Work::all();

        $user = $work->user;

        $randomWorks = $user->works->except($work->id);

        $tags = $work->tags->pluck('tag')->all();

        $works = Work::whereHas('tags', function ($query) use ($tags) {
            $query->whereIn('tag', $tags);
        })->with('tags')->get();


        $randomWorks = $randomWorks->concat($works);

        if ($randomWorks->count() > 6) {
            $randomWorks = $randomWorks->random(6);
        }

        $sameAuthorQuestions = Question::where('user_id', $user->id)->get();

        return view('works.show', compact('work', 'randomWorks', 'sameAuthorQuestions'));
    }
}
