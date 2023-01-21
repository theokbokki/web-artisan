<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Question extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'body',
        'solved_status',
        'published_at',
        'user_id',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        $array['tags'] = $this->tags->pluck('tag')->toArray();

        $author = User::where('id', $this->user_id)->first();
        $array['author_name'] = $author->name;
        $array['author_username'] = $author->username;

        $score = 0;
        foreach ($this->votes as $vote) {
            if ($vote->status) {
                $score++;
            } else {
                $score--;
            }
        }
        $array['score'] = $score;

        return $array;
    }

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($question) {
            $question->slug = Str::slug($question->title);
        });
    }
}
