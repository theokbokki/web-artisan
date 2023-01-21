<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    public function create()
    {
        return view('forum.question_creation_form');
    }

    public function add_tags(Request $request)
    {
        $title = $request->title;
        $details = $request->details;
        $tags = [];

        if (isset($request->old_tags)) {
            $tags = explode(',', $request->old_tags);
        }
        $tags_count_exceeded = 'Vous avez dépassé le nombre limite de tags.';

        if (count($tags) < 5) {
            if ($request->tags !== null) {
                $tags[] = $request->tags;
            }
            $tags_count_exceeded = '';
        }

        session()->flash('title', $title);
        session()->flash('details', $details);
        session()->flash('tags', $tags);

        return redirect()->back()->with(compact('tags_count_exceeded'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'details' => ['required', 'string'],
            'tags.*'=>['string', 'distinct'],
        ]);

        $question = Question::create([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'body'=>$request->details,
            'solved_status'=>false,
            'user_id'=>auth()->id(),
            'published_at'=>now(),
        ]);

        $existingTags = Tag::pluck('tag')->toArray();
        $newTags = array_diff(explode(',', $request->old_tags), $existingTags);

        foreach ($newTags as $tag) {
            $tag = Tag::create(['tag' => $tag]);
        }

        $tagIds = Tag::whereIn('tag', explode(',', $request->old_tags))->pluck('id')->toArray();
        $question->tags()->sync($tagIds);

        return redirect('/forum/'.$question->slug);
    }
}
