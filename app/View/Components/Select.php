<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $for;

    public $label;

    public array $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for, $label, array $options)
    {
        $this->for = $for;
        $this->label = $label;
        $this->options = $options;
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
