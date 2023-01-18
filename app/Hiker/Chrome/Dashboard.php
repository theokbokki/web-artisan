<?php

namespace App\Hiker\Chrome;

use Hiker\Hiker;
use Hiker\Components\InfoBox\InfoBox;
use Hiker\Components\Dashboard\DashboardConstructor;

class Dashboard extends DashboardConstructor
{
    /**
     * Return the dashboard components
     *
     * @return array
     */
    protected function components() : array
    {
        $account = Hiker::account();

        return [
            InfoBox::make('user')
                ->title('Hi ' . trim($account->name, '.') . '!')
                ->text('How are you doing today?')
                ->image($account->picture()),
        ];
    }
}
