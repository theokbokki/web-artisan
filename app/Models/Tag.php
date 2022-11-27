<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    public function internships()
    {
        return $this->belongsToMany(Internship::class);
    }
}
