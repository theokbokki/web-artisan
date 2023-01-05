<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;

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

        return view('works.show', compact('work'));
    }
}
