<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class ProfilePicture extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imgurl;
    public function __construct($imgurl)
    {
        $this->imgurl = $imgurl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.profile-picture');
    }
}
