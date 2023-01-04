<?php

namespace App\Http\Controllers;

use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();

        return view('works.index', compact('works'));
    }
}
