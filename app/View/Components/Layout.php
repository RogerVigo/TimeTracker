<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    public $topBar;
    public $sideBar;
    public $projects;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($topBar, $sideBar, $projects)
    {
        $this->topBar = $topBar;
        $this->sideBar = $sideBar;
        $this->projects = $projects;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
