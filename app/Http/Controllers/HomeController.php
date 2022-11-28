<?php

namespace App\Http\Controllers;

use App\Models\Teaching;
use App\Models\User;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $teachings = Teaching::all();


        $works = Work::whereHas(
            'user',
            function ($q) {
                $q->whereHas(
                    'roles',
                    function ($q) {
                        $q->whereIn('role', ['alumni', 'student']);
                    }
                );
            }
        )->get()->random(9);

        foreach ($works as $work) {
            $work->published_at = Carbon::parse($work->published_at)->translatedFormat('M Y');
            $work->excerpt = Str::limit($work->excerpt, 150);
        }

        $alumnis = User::whereHas(
            'roles',
            function ($q) {
                $q->where('role', 'alumni');
            }
        )->get();


        return view('home', compact('teachings', 'works', 'alumnis'));
    }
}
