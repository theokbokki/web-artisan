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
}
