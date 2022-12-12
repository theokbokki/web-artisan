<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Question $question, Answer $answer, Request $request)
    {
        $request->validate([
            'comment' => ['required'],
        ]);

        $comment = Comment::create([
            'body' => $request->comment,
            'user_id'=>Auth::id(),
            'answer_id'=>$answer->id,
            'published_at'=>now(),
        ]);

        return redirect('/forum/'.$question->slug.'?_token='.csrf_token().'&answer_with_all_comment='.$answer->id.'#comment'.$comment->id);
    }
}
