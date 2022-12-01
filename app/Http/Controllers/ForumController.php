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

        return view('forum.index', compact('questions', 'users'));
    }

    public function show(Question $question)
    {
        $question->published_at_formatted = Carbon::parse($question->published_at)->translatedFormat('d M Y');

        foreach ($question->answers as $answer) {
            if ($answer->comments) {
                foreach ($answer->comments as $comment) {
                    $question->total_comment_count ++;
                }
                if (request()->input('answer_with_all_comment') == $answer->id) {
                    $answer->limited_comments = $answer->comments()->get();
                } else {
                    $answer->limited_comments = $answer->comments()->limit(3)->get();
                }
            }
        }

        return view('forum.show', compact('question'));
    }
}
