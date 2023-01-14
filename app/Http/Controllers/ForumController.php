<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;

class ForumController extends Controller
{
    public function index()
    {
        $questions = Question::search(request('search'));
        if (request()->has('solved_status') && request('solved_status') !== 'solved_and_unsolved') {
            if (request('solved_status') === 'solved_only') {
                $questions = $questions->where('solved_status', 1);
            } else {
                $questions = $questions->where('solved_status', 0);
            }
        }

        $questions = $questions->orderBy('score', request('popularity') === 'most_popular_first' ? 'asc' : 'desc');
        $questions_score = $questions->raw();
        $questions = $questions->get();
        $index = 0;
        $questions->map(function ($item, $key) use (&$index, $questions_score) {
            $item->score = $questions_score['hits'][$index]['score'];
            $index++;
            return $item;
        });

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

        $perPage = 10;
        $currentPage = intval(request()->input('page', 1));
        if ($currentPage < 1) {
            $currentPage = 1;
        }
        $items = $questions->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $questions = new LengthAwarePaginator($items, $questions->count(), $perPage, $currentPage, ['path' => '/forum']);

        $users = $users->sortByDesc('score')->take(6);

        return view('forum.index', compact('questions', 'users'));
    }


    public function show(Question $question)
    {
        $question->published_at_formatted = Carbon::parse($question->published_at)->translatedFormat('d M Y');


        if ($question->votes) {
            foreach ($question->votes as $vote) {
                if ($vote->status) {
                    $question->score ++;
                } else {
                    $question->score --;
                }
            }
            // dd($question->score);
        }

        foreach ($question->answers as $answer) {
            if ($answer->votes) {
                foreach ($answer->votes as $vote) {
                    if ($vote->status) {
                        $answer->score ++;
                    } else {
                        $answer->score --;
                    }
                }
            }
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
