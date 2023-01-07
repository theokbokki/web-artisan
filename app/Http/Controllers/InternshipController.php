<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use App\Models\Company;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = Internship::paginate(10);
        $companies = Company::all();
        $cities = Internship::all();

        return view('internships.index', compact('internships', 'companies', 'cities'));
    }

    public function show(Internship $internship)
    {
        $internship = $internship;

        $randomInternships = Internship::all()->except($internship->id);

        $tags = $internship->tags->pluck('tag')->all();
        $internships = Internship::whereHas('tags', function ($query) use ($tags) {
            $query->whereIn('tag', $tags);
        })->with('tags')->get();

        $randomInternships = $randomInternships->concat($internships);

        if ($randomInternships->count() > 6) {
            $randomInternships = $randomInternships->random(6);
        }

        return view('internships.show', compact('internship', 'randomInternships'));
    }
}
