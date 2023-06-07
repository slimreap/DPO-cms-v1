<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class ButtonDashboard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $link;
    public function __construct($title, $link)
    {
        $this->title = $title;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.button-dashboard');
    }
}
