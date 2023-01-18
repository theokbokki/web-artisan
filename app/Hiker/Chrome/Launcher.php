<?php

namespace App\Hiker\Chrome;

use Hiker\Components\Launcher\Link;
use Hiker\Components\Launcher\Section;
use Hiker\Components\Launcher\LauncherConstructor;

class Launcher extends LauncherConstructor
{
    /**
     * Return the launcher action sections with links
     *
     * @return array
     */
    protected function sections() : array
    {
        return [
            // Section::make('Label')->links([
            //     Link::make('Some action')
            //         ->icon('plus')
            //         ->draft(new MyResource)
            //         ->data([])
            //         ->shortkey('1'),
            // ]),
        ];
    }
}
