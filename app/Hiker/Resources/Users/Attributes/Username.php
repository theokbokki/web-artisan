<?php

namespace App\Hiker\Resources\Users\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Username extends Attribute
{
    public $key = 'username';

    public function title()
    {
        return 'Nom d\'utilisateur';
    }

    public function component($resource)
    {
        return DisplayTextfield::make($resource->username ?? null);
    }

    public function orderQuery($query, $direction)
    {
        return $query->orderBy('username', $direction);
    }
}
