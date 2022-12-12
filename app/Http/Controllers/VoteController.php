<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store(Question $question, Answer $answer, Request $request)
    {
        $request->validate([
            'vote' => ['required', 'boolean'],
        ]);

        $vote = Vote::create([
            'status' => $request->vote,
            'user_id'=>Auth::id(),
            'question_id'=>isset($answer->id) ? null : $question->id,
            'answer_id'=>$answer->id,
        ]);
        if (isset($answer->id)) {
            return redirect('/forum/'.$question->slug.'?_token='.csrf_token().'#answer'.$answer->id);
        }

        return redirect('/forum/'.$question->slug);
    }

    public function delete(Question $question, Answer $answer)
    {
        if (isset($answer->id)) {
            $vote = Vote::where('user_id', Auth::id())->where('answer_id', $answer->id)->first();
            Vote::destroy($vote->id);
            return redirect('/forum/'.$question->slug.'?_token='.csrf_token().'#answer'.$answer->id);
        } else {
            $vote = Vote::where('user_id', Auth::id())->where('question_id', $question->id)->first();
            Vote::destroy($vote->id);
            return redirect('/forum/'.$question->slug);
        }
    }

    public function update(Question $question, Answer $answer)
    {
        if (isset($answer->id)) {
            $vote = Vote::where('user_id', Auth::id())->where('answer_id', $answer->id)->first();
            $vote->status ? $vote->update(['status'=>0]) : $vote->update(['status'=>1]);
            return redirect('/forum/'.$question->slug.'?_token='.csrf_token().'#answer'.$answer->id);
        } else {
            $vote = Vote::where('user_id', Auth::id())->where('question_id', $question->id)->first();
            $vote->status ? $vote->update(['status'=>0]) : $vote->update(['status'=>1]);
            return redirect('/forum/'.$question->slug);
        }
    }
}
