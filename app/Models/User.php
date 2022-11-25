<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'username',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remeber_token',
    ];

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
