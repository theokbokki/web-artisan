<?php

namespace App\Hiker\Chrome;

use App\Hiker\Resources\Users\User;
use Hiker\Components\Icon\Icon;
use Hiker\Components\Navigation\Link;
use Hiker\Components\Navigation\NavigationConstructor;

class Navigation extends NavigationConstructor
{
    /**
     * Return the navigation links
     *
     * @return array
     */
    protected function links(): array
    {
        return [
            // Link::make('Label', 'href')
            //     ->order(0)
            //     ->sticky(false)
            //     ->icon(Icon::active('filled-icon')->inactive('icon')),
            // Link::resource($resource, 'read')
            //     ->label('Label')
            //     ->order(1)
            //     ->sticky(true)
            //     ->icon(Icon::active('filled-icon')->inactive('icon')),
            Link::resource(User::class)
                ->order(0)
                ->keyCode('users'),
        ];
    }
}
