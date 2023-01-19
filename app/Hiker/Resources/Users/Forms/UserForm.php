<?php

namespace App\Hiker\Resources\Users\Forms;

use App\Models\Role;
use Hiker\Components\Editor\Step;
use Hiker\Components\Fields\Checklist\Checklist;
use Hiker\Components\Fields\Image\Image;
use Hiker\Components\Fields\Text\Text;
use Hiker\Components\Fields\Wysiwyg\Wysiwyg;
use Hiker\Nodes\Form;
use Trail\Tracks\Baggage;

class UserForm extends Form
{
    /**
     * Get the form's subject line
     *
     * @return string
     */
    public function subject()
    {
        return 'Nouvel utilisateur';
    }

    /**
     * Get the form's steps
     *
     * @param  \Trail\Tracks\Baggage  $bag
     * @return array
     */
    public function steps(Baggage $bag)
    {
        return [
            Step::make('Informations générales', 'general')
                ->fields([
                    Text::make('Nom et prénom', 'name')
                    ->rules('required'),

                    Text::make('Nom d\'utilisateur', 'username')
                    ->rules('required'),

                    Text::make('Email', 'email'),

                    Text::make('Mot de passe', 'password'),

                    Image::make('Avatar', 'avatar')
                ->path('avatars')
                        ->imageRules([
                            'minWidth' => 250,
                            'minHeight' => 250,
                            'formats' => ['jpeg', 'png'],
                        ]),

                    Text::make('Travail', 'job')
                    ->translated(),

                    Text::make('Résumé', 'excerpt')
                    ->translated(),

                    Wysiwyg::make('À propos', 'body')
                    ->translated(),

                    Checklist::make('Roles', 'roles')
                        ->options($this->getOptions()),
                ]),
        ];
    }

    protected function getOptions()
    {
        return Role::all()->mapWithKeys(function ($role) {
            return [$role->id => $role->role];
        })->all();
    }
}
