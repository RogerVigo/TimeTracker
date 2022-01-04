<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TopBar extends Component
{
    public $topBar;
    public $projects;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($topBar, $projects)
    {
        // Array
        $this->topBar = $topBar;
        $this->projects = $projects;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.top-bar');
    }
}
