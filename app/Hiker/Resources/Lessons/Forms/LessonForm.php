<?php

namespace App\Hiker\Resources\Lessons\Forms;

use App\Models\Quarter;
use App\Models\User;
use App\Models\Year;
use Hiker\Components\Editor\Step;
use Hiker\Components\Fields\Checklist\Checklist;
use Hiker\Components\Fields\Number\Number;
use Hiker\Components\Fields\SelectionList\SelectionList;
use Hiker\Components\Fields\Text\Text;
use Hiker\Components\Fields\Wysiwyg\Wysiwyg;
use Hiker\Nodes\Form;
use Trail\Tracks\Baggage;

class LessonForm extends Form
{
    /**
     * Get the form's subject line
     *
     * @return string
     */
    public function subject()
    {
        return 'Créer un nouveau cours';
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
            Step::make('Créer un nouveau cours', 'step_one')
            ->fields([
                //Title
                Text::make('Intitulé', 'title'),

                //Teachers
                Checklist::make('Professeurs', 'users')
                ->options($this->getTeachers()),

                //Year
                SelectionList::make('Bloc', 'year_id')
                ->options($this->getYears()),

                //Quarter
                Checklist::make('Quadrimestres', 'quarters')
                ->options($this->getQuarters()),

                //Hours
                Number::make('Heures', 'hours'),

                //Credits
                Number::make('Crédits', 'credits'),

                //About
                Wysiwyg::make('À propos du cours', 'body'),
            ]),
        ];
    }

    public function getTeachers()
    {
        return User::whereHas('roles', function ($query) {
            $query->where('role', 'teacher');
        })
            ->get()
            ->mapWithKeys(function ($user) {
                return[$user->id => $user->name];
            })->all();
    }

    public function getYears()
    {
        return Year::all()->mapWithKeys(function ($year) {
            return[$year->id => $year->year];
        })->all();
    }

    public function getQuarters()
    {
        return Quarter::all()->mapWithKeys(function ($quarter) {
            return[$quarter->id => $quarter->quarter];
        })->all();
    }
}
