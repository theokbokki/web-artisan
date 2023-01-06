<?php

namespace App\Http\Controllers;

use App\Models\User;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::whereHas(
            'roles',
            function ($q) {
                $q->where('role', 'teacher');
            }
        )->get();

        return view('teachers.index', compact('teachers'));
    }
}
