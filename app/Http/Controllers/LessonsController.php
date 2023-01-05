<?php

namespace App\Http\Controllers;

use App\Models\Lesson;

class LessonsController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        return view('lessons.index', compact('lessons'));
    }
}
