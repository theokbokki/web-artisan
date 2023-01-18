<?php

namespace App\Hiker\Resources\Users\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Name extends Attribute
{
    public $key = 'name';

    public function title()
    {
        return 'Nom et prénom';
    }

    public function component($resource)
    {
        return DisplayTextfield::make($resource->name ?? null);
    }

    public function orderQuery($query, $direction)
    {
        return $query->orderBy('name', $direction);
    }
}
