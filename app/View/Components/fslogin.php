<?php

namespace App\View\Components;

use Illuminate\View\Component;

class fslogin extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public $facebook;
     public $google;
     public $github;
     public $twitter;
    public function __construct($facebook, $github, $google, $twitter)
    {
        $this->facebook = $facebook;
        $this->google = $google;
        $this->github = $github;
        $this->twitter = $twitter;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.fslogin');
    }
}
