<?php

namespace App\Http\Controllers;

use App\Models\User;

class TeacherController extends Controller
{
    public function index()
    {
        $searchTerm = request('search');

        $usersIds = User::search($searchTerm)->get()->pluck('id')->toArray();

        $teachers = User::whereIn('id', $usersIds)->whereHas('roles', function ($query) {
            $query->where('role', 'teacher');
        })->paginate();

        return view('teachers.index', compact('teachers'));
    }
}
