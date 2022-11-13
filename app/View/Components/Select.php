<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $options;

    public $for;

    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($options, $for, $label)
    {
        $this->options = $options;
        $this->for = $for;
        $this->label = $label;

        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select');
    }
}
