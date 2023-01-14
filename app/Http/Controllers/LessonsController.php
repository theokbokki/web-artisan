<?php

namespace App\Http\Controllers;

use App\Models\Lesson;

class LessonsController extends Controller
{
    public function index()
    {
        $sortField = request('sort-field');
        $sortDirection = request('sort-direction');
        $results = Lesson::search(request('search'))->raw()['hits'];

        if ($sortField && in_array($sortField, ['title', 'teacher', 'year', 'hours', 'quarter', 'credits'])) {
            usort($results, function ($a, $b) use ($sortField, $sortDirection) {
                if ($sortDirection === 'asc') {
                    return $a[$sortField] <=> $b[$sortField];
                }
                return $b[$sortField] <=> $a[$sortField];
            });
        }

        $lessons = array_map(function ($item) {
            return json_decode(json_encode($item));
        }, $results);
        return view('lessons.index', compact('lessons', 'sortField', 'sortDirection'));
    }

    public function show(Lesson $lesson)
    {
        $lesson = $lesson;
        return view('lessons.show', compact('lesson'));
    }
}
