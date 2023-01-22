<?php

namespace App\Hiker\Resources\Lessons\Views;

use App\Hiker\Resources\Lessons\Lesson;
use Hiker\Components\Btn\Btn;
use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Hiker\Components\FlowHeader\FlowHeader;
use Hiker\Components\Layouts\SimpleLayout;
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
        return $this->resource->title;
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

                //Teachers
                $this->getTeachers(),

                //Year
                DisplayTextfield::make()
                ->label('Bloc')
                ->value($this->resource->year->year),

                //Quarter
                $this->getQuarters(),

                //Hours
                DisplayTextfield::make()
                ->label('Hours')
                ->value($this->resource->hours),

                //Credits
                DisplayTextfield::make()
                ->label('Crédits')
                ->value($this->resource->credits),
            ]),
        ];
    }

    protected function header()
    {
        return FlowHeader::make()
            ->backLink(Btn::make()->label('Cours')->index(Lesson::class))
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

    protected function getTeachers()
    {
        foreach ($this->resource->users as $user) {
            $teachers[] = $user->name;
        }
        $teachers = implode(', ', $teachers);

        return DisplayTextfield::make()
                ->label('teachers')
                ->value($teachers);
    }

    protected function getQuarters()
    {
        foreach ($this->resource->quarters as $quarter) {
            $quarters[] = $quarter->quarter;
        }

        $quarters = implode(', ', $quarters);

        return DisplayTextfield::make()
                ->label('Quadrimestre')
                ->value($quarters);
    }
}
