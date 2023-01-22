<?php

namespace App\Hiker\Resources\Lessons\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Year extends Attribute
{
    public $key = 'year';

    public function title()
    {
        return 'Year';
    }

    public function component($resource)
    {
        return DisplayTextfield::make($resource->year->year ?? null);
    }

    public function orderQuery($query, $direction)
    {
        return $query->orderBy('title', $direction);
    }
}
