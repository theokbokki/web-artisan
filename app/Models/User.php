<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Spatie\Translatable\HasTranslations;
use Trail\Models\Concerns\HasPrefix;
use Trail\Models\Concerns\HasUuid;
use Trail\Models\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use Searchable;
    use HasPrefix;
    use HasUuid;
    use HasTranslations;

    protected $hidden = [
        'password',
        'remeber_token',
    ];

    protected $fillable = [
        'name',
        'email',
        'username',
        'avatar',
        'password',
        'slug',
    ];

    protected $translatable = [
        'excerpt',
        'body',
        'job',
    ];

    /**
     * @return HasMany
     */
    public function works(): HasMany
    {
        return $this->hasMany(Work::class);
    }

    /**
     * @return BelongsToMany
     */
    public function lessons(): BelongsToMany
    {
        return $this->belongsToMany(Lesson::class);
    }

    /**
     * @return BelongsToMany
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return HasMany
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    /**
     * @return HasMany
     */
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    public function avatarUrl($path)
    {
        return Storage::url($path);
    }

    public function has_voted(Question | null $question, Answer | null $answer)
    {
        foreach ($this->votes as $vote) {
            if (isset($question)) {
                if ($vote->question_id == $question->id && $vote->status) {
                    return 'up';
                } elseif ($vote->question_id == $question->id && ! $vote->status) {
                    return 'down';
                }
            }

            if (isset($answer)) {
                if ($vote->answer_id == $answer->id && $vote->status) {
                    return 'up';
                } elseif ($vote->answer_id == $answer->id && ! $vote->status) {
                    return 'down';
                }
            }
        }
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        $array['roles'] = $this->roles->toArray();

        return $array;
    }

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($user) {
            $user->slug = Str::slug($user->name);
        });
    }
}
