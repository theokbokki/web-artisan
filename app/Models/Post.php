<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'body',
        'excerpt',
        'thumbnail',
    ];


    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * @return HasMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // public function scopeFilter($query, array $filters)
    // {
    //     return $query->when(
    //         $filters['search']??false,
    //         fn ($query, $search) =>
    //         $query
    //         ->where('title', 'like', '%' . $search . '%')
    //         ->orWhere('excerpt', 'like', '%' . $search . '%')
    //         ->orWhere('body', 'like', '%' . $search . '%')
    //         ->orWhereHas('tags', function ($query) use ($search) {
    //             $query->where('tag', 'like', '%'.$search.'%');
    //         })
    //         ->orWhereHas('users', function ($query) use ($search) {
    //             $query->where('name', 'like', '%'.$search.'%');
    //         })
    //     );
    // }


    public function toSearchableArray()
    {
        $array = $this->toArray();
        $array['tags'] = $this->tags->pluck('tag')->toArray();

        $users = $this->users->map(function ($user) {
            return [
            'name' => $user->name,
            'username' => $user->username,
        ];
        });
        $array['users'] = $users->toArray();

        return $array;
    }
}
