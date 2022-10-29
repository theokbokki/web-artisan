<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Search extends Component
{
    public $label;

    public $button;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $button)
    {
        $this->label = $label;
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search');
    }
}
