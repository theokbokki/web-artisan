<?php

namespace App\Hiker\Resources\Users\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Email extends Attribute
{
    public $key = 'email';

    public function title()
    {
        return 'Email';
    }

    public function component($resource)
    {
        return DisplayTextfield::make($resource->email ?? null);
    }

    public function orderQuery($query, $direction) {
        return $query->orderBy('email', $direction);
    }
}
