<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;

    public $classes;

    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $classes, $value)
    {
        $this->type = $type;
        $this->classes = $classes;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
