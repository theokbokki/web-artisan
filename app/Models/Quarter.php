<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarter extends Model
{
    use HasFactory;

    protected $fillable = [
        'quarter',
    ];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
