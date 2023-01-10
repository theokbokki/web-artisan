<?php

namespace App\Http\Controllers;

use App\Models\User;

class AlumnisController extends Controller
{
    public function index()
    {
        $searchTerm = request('search');

        $usersIds = User::search($searchTerm)->get()->pluck('id')->toArray();

        $alumnis = User::whereIn('id', $usersIds)->whereHas('roles', function ($query) {
            $query->where('role', 'alumni');
        })->paginate();

        return view('alumnis.index', compact('alumnis'));
    }
}
