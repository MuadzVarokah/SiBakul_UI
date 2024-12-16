<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pelatihan')]

class Pelatihan extends Component
{
    public function render()
    {
        return view('livewire.menu.pelatihan');
    }
}
