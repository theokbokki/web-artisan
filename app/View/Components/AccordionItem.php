<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AccordionItem extends Component
{
    public $title;

    public $content;

    public $imgSrc;

    public $imgAlt;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $content, $imgSrc, $imgAlt)
    {
        $this->title = $title;
        $this->content = $content;
        $this->imgSrc = $imgSrc;
        $this->imgAlt = $imgAlt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.accordion-item');
    }
}
