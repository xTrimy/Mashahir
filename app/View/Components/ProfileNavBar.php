<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProfileNavBar extends Component
{


    public $page;

    public $profile;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page, $profile)
    {
        $this->profile = $profile;
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.profile-nav-bar');
    }
}
