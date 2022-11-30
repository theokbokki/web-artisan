<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Carbon\Carbon;

class ForumController extends Controller
{
    public function index()
    {
        $questions = Question::with('comments', 'user', 'tags')->paginate(10);
        foreach ($questions as $question) {
            $question->published_at_formatted = Carbon::parse($question->published_at)->translatedFormat('d M Y');
        }

        $users = User::with('votes')->get();

        foreach ($users as $user) {
            foreach ($user->questions as $question) {
                foreach ($question->votes as $vote) {
                    if ($vote->status) {
                        $user->score ++;
                    } else {
                        $user->score --;
                    }
                }
            }
        }

        $users = $users->sortByDesc('score')->take(6);

        return view('forum', compact('questions', 'users'));
    }
}
