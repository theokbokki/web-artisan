<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Search extends Component
{
    public $label;

    public $button;

    public $input;

    public $labelHidden;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $button, $input, $labelHidden)
    {
        $this->label = $label;
        $this->button = $button;
        $this->input = $input;
        $this->labelHidden = $labelHidden;
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
