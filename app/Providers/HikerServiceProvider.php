<?php

namespace App\Providers;

use Hiker\Hiker;
use Hiker\HikerApplicationServiceProvider;

class HikerServiceProvider extends HikerApplicationServiceProvider
{
    /**
     * Register loadable route paths
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->loadCliForRoutes([
            'POST' => [],
        ]);
    }

    /**
     * Register Chrome Components Constructors
     *
     * @return void
     */
    public function chrome()
    {
        Hiker::chrome('account', \App\Hiker\Chrome\Account::class);
        Hiker::chrome('launcher', \App\Hiker\Chrome\Launcher::class);
        Hiker::chrome('navigation', \App\Hiker\Chrome\Navigation::class);
        Hiker::chrome('search', \App\Hiker\Chrome\Search::class);
        Hiker::chrome('editor', \App\Hiker\Chrome\Editor::class);
        Hiker::chrome('dashboard', \App\Hiker\Chrome\Dashboard::class);
    }

    /**
     * Register extra user profiles ("roles" or "groups")
     *
     * @return void
     */
    public function profiles()
    {
        return;
    }

    /**
     * Apply extra configurations only when the UI is rendering
     *
     * @return void
     */
    public function rendering()
    {
        return;
    }

    /**
     * Apply UI customizations (logo, theme, favicons,…)
     *
     * @return void
     */
    public function customize()
    {
        // Hiker::themes()
        //    ->register('custom', asset('css/custom.css'))
        //    ->activate('custom');

        return;
    }
}
