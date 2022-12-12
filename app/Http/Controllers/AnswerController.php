<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Question $question, Request $request)
    {
        $request->validate([
            'answer' => ['required'],
        ]);

        $answer = Answer::create([
            'body' => $request->answer,
            'user_id'=>Auth::id(),
            'question_id'=>$question->id,
            'published_at'=>now(),
        ]);

        return redirect('/forum/'.$question->slug.'?_token='.csrf_token().'#answer'.$answer->id);
    }
}
