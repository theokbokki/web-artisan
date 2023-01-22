<?php

namespace App\Hiker\Resources\Lessons\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Credits extends Attribute
{
    public $key = 'credits';

    public function title()
    {
        return 'Credits';
    }

    public function component($resource)
    {
        return DisplayTextfield::make($resource->credits ?? null);
    }

    public function orderQuery($query, $direction) {
        return $query->orderBy('credits', $direction);
    }
}
