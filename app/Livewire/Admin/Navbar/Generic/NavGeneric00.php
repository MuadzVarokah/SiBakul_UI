<?php

namespace App\Livewire\Admin\Navbar\Generic;

use Livewire\Component;

class NavGeneric00 extends Component
{
    public $state_profile = "hidden";

    public function click_profile(bool $is_outside = false){
        if(!$is_outside){
            $this->state_profile = $this->state_profile == "hidden" ? "show" : "hidden";
        } else {
            $this->state_profile = "hidden";
        }
    }

    public function render()
    {
        return view('livewire.admin.navbar.generic.nav-generic00');
    }
}
