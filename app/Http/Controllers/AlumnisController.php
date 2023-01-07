<?php

namespace App\Http\Controllers;

use App\Models\User;

class AlumnisController extends Controller
{
    public function index()
    {
        $alumnis = User::whereHas(
            'roles',
            function ($q) {
                $q->where('role', 'alumni');
            }
        )->get();
        return view('alumnis.index', compact('alumnis'));
    }
}
