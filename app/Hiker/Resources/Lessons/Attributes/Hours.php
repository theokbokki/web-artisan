<?php

namespace App\Hiker\Resources\Lessons\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Hours extends Attribute
{
    public $key = 'hours';

    public function title()
    {
        return 'Hours';
    }

    public function component($resource)
    {
        return DisplayTextfield::make($resource->hours ?? null);
    }

    public function orderQuery($query, $direction) {
        return $query->orderBy('hours', $direction);
    }
}
