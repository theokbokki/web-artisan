<?php

namespace App\Hiker\Resources\Users\Views;

use App\Hiker\Resources\Users\User as AppUser;
use Hiker\Components\Btn\Btn;
use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Hiker\Components\DisplayFields\DisplayUserfield\DisplayUserfield;
use Hiker\Components\FlowHeader\FlowHeader;
use Hiker\Components\Layouts\SimpleLayout;
use Hiker\Components\Taxonomies\Taxonomies;
use Hiker\Nodes\ResourceTemplate;
use Trail\Tracks\Trips\Trip;

class SingleView extends ResourceTemplate
{
    /**
     * Return the tab label
     *
     * @return string
     */
    public function label()
    {
        return $this->resource->name;
    }

    /**
     * Return the template's components
     *
     * @param  \Trail\Tracks\Trips\Trip  $trip
     * @return array
     */
    public function components(Trip $trip)
    {
        return [
            SimpleLayout::make([
                //Header
                $this->header(),

                //User picture and username
                DisplayUserfield::make()
                ->name($this->resource->username)
                ->img($this->resource->model()->avatarUrl($this->resource->avatar) ?? null),

                //User roles
                Taxonomies::make()
                    ->items($this->resource->roles->map(function ($role) {
                        return ['label' => $role->role];
                    })),

                //User Email
                DisplayTextfield::make()
                ->label('Email')
                ->value($this->resource->email),

                //User Work
                DisplayTextfield::make()
                ->label('Travail')
                ->value($this->resource->job),

                //User Excerpt
                DisplayTextfield::make()
                ->label('Résumé')
                ->value($this->resource->excerpt),

                //User About
                DisplayTextfield::make()
                ->label('À propos')
                ->value($this->resource->body),
            ]),
        ];
    }

    protected function header()
    {
        return FlowHeader::make()
            ->backLink(Btn::make()->label('Utilisateur')->index(AppUser::class))
            ->title($this->label())
            ->actions($this->getActions());
    }

    protected function getActions()
    {
        return [
            Btn::make()
                ->label('Modifier')
                ->icon('edit')
                ->modifiers(['small', 'secondary'])
            ->flow($this->resource, 'edit'),

            Btn::make()
                ->label('Supprimer')
                ->icon('trash')
                ->modifiers(['small', 'secondary'])
                ->flow($this->resource, 'remove'),
        ];
    }
}
