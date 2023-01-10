<?php

namespace App\Http\Controllers;

use App\Models\Lesson;

class LessonsController extends Controller
{
    public function index()
    {
        $lessons = Lesson::search(request('search'))->get();
        return view('lessons.index', compact('lessons'));
    }

    public function show(Lesson $lesson)
    {
        $lesson = $lesson;
        return view('lessons.show', compact('lesson'));
    }
}
