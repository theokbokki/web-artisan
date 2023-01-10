<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;

class Internship extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'excerpt',
        'address',
        'position',
        'profile',
        'teachings',
        'work',
        'work_possibility',
        'avatar',
    ];

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @return BelongsTo
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        $array['tags'] = $this->tags->toArray();

        $company = Company::where('id', $this->company_id)->first();
        $array['company_name'] = $company->name;

        return $array;
    }
}
