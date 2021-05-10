<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Traits\btuiMenu;
use Illuminate\View\Component;

class dropdown extends Component
{
    use btuiMenu;

    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = "Click")
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.dropdown');
    }
}
