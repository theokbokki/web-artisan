<?php

namespace App\Hiker\Resources\Lessons\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Title extends Attribute
{
    public $key = 'title';

    public function title()
    {
        return 'Title';
    }

    public function component($resource)
    {
        return DisplayTextfield::make($resource->title ?? null);
    }

    public function orderQuery($query, $direction) {
        return $query->orderBy('title', $direction);
    }
}
