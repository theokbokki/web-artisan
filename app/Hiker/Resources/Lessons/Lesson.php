<?php

namespace App\Hiker\Resources\Lessons;

use App\Hiker\Resources\Lessons\Attributes\Credits;
use App\Hiker\Resources\Lessons\Attributes\Hours;
use App\Hiker\Resources\Lessons\Attributes\Quarter;
use App\Hiker\Resources\Lessons\Attributes\Teacher;
use App\Hiker\Resources\Lessons\Attributes\Title;
use App\Hiker\Resources\Lessons\Attributes\Year;
use Hiker\Components\Icon\Icon;
use Hiker\Tracks\Resource;

class Lesson extends Resource
{
    /**
     * Get the resource singular display label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Cours';
    }

    /**
     * Get the resource plural display label
     *
     * @return string
     */
    public static function pluralLabel()
    {
        return 'Cours';
    }

    /**
     * Get the resource's default icon
     *
     * @return null|string
     */
    public static function icon()
    {
        return Icon::active('graph-filled')->inactive('graph');
    }

    /**
     * Get the full list of available columns for display
     *
     * @return array
     */
    public static function getAvailableColumns(): array
    {
        return [
            Title::class,
            Teacher::class,
            Year::class,
            Quarter::class,
            Hours::class,
            Credits::class,
        ];
    }

    /**
     * Get the columns to be displayed by default
     *
     * @return array
     */
    public static function getDefaultColumns(): array
    {
        return [
            'title',
            'teacher',
            'year',
            'quarter',
            'hours',
            'credits',
        ];
    }

    /**
     * Get the default order by config
     *
     * @return string
     */
    public static function getDefaultOrderColumn(): string
    {
        return 'title';
    }
}
