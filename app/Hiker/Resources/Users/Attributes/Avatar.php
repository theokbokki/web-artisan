<?php

namespace App\Hiker\Resources\Users\Attributes;

use Hiker\Components\DisplayFields\DisplayImagefield\DisplayImagefield;
use Trail\Structures\Archive\Attribute;

class Avatar extends Attribute
{
    public $key = 'avatar';

    public function title()
    {
        return 'Avatar';
    }

    public function component($resource)
    {
        return DisplayImagefield::make($resource->model()->avatarUrl($resource->avatar) ?? null);
    }

    public function orderQuery($query, $direction)
    {
        return $query->orderBy('avatar', $direction);
    }
}
