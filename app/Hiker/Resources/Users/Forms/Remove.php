<?php

namespace App\Hiker\Resources\Users\Forms;

use Hiker\Components\DisplayFields\DisplayTextfield\DisplayTextfield;
use Hiker\Components\Editor\Step;
use Hiker\Nodes\Form;
use Trail\Tracks\Baggage;

class Remove extends Form
{
    /**
     * Get the form's subject line
     *
     * @return string
     */
    public function subject()
    {
        return 'Supprimer "'.$this->trip->resource()->model()->name.'"';
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
            Step::make($this->subject(), 'step_one')
                ->fields([
                    DisplayTextfield::make('Êtes-vous sûr de vouloir supprimer **'.$this->trip->resource()->model()->name.'** ? Cette action est irréversible !'),
                ])
                ->save('Supprimer', null, 'trash'),
        ];
    }
}
