<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Work extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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

        return $array;
    }
}
