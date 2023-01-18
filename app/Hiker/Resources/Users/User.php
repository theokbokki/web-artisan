<?php

namespace App\Hiker\Resources\Users;

use App\Hiker\Resources\Users\Attributes\Avatar;
use App\Hiker\Resources\Users\Attributes\Email;
use App\Hiker\Resources\Users\Attributes\Name;
use App\Hiker\Resources\Users\Attributes\Username;
use Hiker\Components\Icon\Icon;
use Hiker\Tracks\Resource;

class User extends Resource
{
    /**
     * Get the resource singular display label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Utilisateur';
    }

    /**
     * Get the resource plural display label
     *
     * @return string
     */
    public static function pluralLabel()
    {
        return 'Utilisateurs';
    }

    /**
     * Get the resource's default icon
     *
     * @return null|string
     */
    public static function icon()
    {
        return Icon::active('user-filled')->inactive('user');
    }

    /**
     * Get the full list of available columns for display
     *
     * @return array
     */
    public static function getAvailableColumns(): array
    {
        return [
            Avatar::class,
            Name::class,
            Username::class,
            Email::class,
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
            'avatar',
            'name',
            'username',
            'email',
        ];
    }

    /**
     * Get the default order by config
     *
     * @return string
     */
    public static function getDefaultOrderColumn(): string
    {
        return 'name';
    }
}
