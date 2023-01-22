<?php

namespace App\Hiker\Resources\Lessons\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Quarter extends Attribute
{
    public $key = 'quarter';

    public function title()
    {
        return 'Quarter';
    }

    public function component($resource)
    {
        foreach ($resource->quarters as $quarter) {
            $quarters[] = $quarter->quarter;
        }

        $quarters = implode(', ', $quarters);

        return DisplayTextfield::make($quarters);
    }

    public function orderQuery($query, $direction)
    {
        return $query->orderBy('quarter', $direction);
    }
}
