<?php

namespace App\Hiker\Chrome;

use Hiker\Components\Account\Link;
use Hiker\Components\Account\Section;
use Hiker\Components\Account\Dropdown;
use Hiker\Components\Account\AccountConstructor;

class Account extends AccountConstructor
{

    /**
     * Return the tag to append to the username
     *
     * @return null|string
     */
    protected function label() : ?string
    {
        return null;
    }

    /**
     * Return toptional extra information to append to the username
     *
     * @return null|string
     */
    protected function extra() : ?string
    {
        return null;
    }

    /**
     * Return the Account Menu Sections
     *
     * @return array
     */
    protected function sections() : array
    {
        return [
            // Section::make('My account', []),
        ];
    }

}
