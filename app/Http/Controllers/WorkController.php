<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::search(request('search'));

        if (request()->has('students') && request('students') !== 'all-students') {
            $student = User::where('slug', request('students'))->first();
            if ($student) {
                $works = $works->where('user_id', $student->id);
            }
        }

        $works = $works->orderBy('created_at', request('date') === 'latest_first' ? 'desc' : 'asc')->paginate(12);

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
