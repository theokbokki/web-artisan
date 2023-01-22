<?php

namespace App\Hiker\Resources\Lessons\Attributes;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Trail\Structures\Archive\Attribute;

class Teacher extends Attribute
{
    public $key = 'teacher';

    public function title()
    {
        return 'Teacher';
    }

    public function component($resource)
    {
        foreach ($resource->users as $user) {
            $teachers[] = $user->name;
        }
        $teachers = implode(', ', $teachers);

        return DisplayTextfield::make($teachers ?? null);
    }

    public function orderQuery($query, $direction)
    {
        return $query->orderBy('title', $direction);
    }
}
