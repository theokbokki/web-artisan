<?php

namespace App\Hiker\Chrome;

use Hiker\Components\Notifications\NotificationsConstructor;

class Notifications extends NotificationsConstructor
{

    /**
     * Return the list of notifications to display
     *
     * @return array
     */
    protected function notifications(): array
    {
        return parent::notifications();
    }

}
