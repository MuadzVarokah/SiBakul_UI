<?php

namespace App\Livewire\Menu;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sertifikasi')]

class Sertifikasi extends Component
{
    public $activeTab = 'usaha';

    // Menginisialisasi tab aktif berdasarkan URL hash
    public function mount()
    {
        $this->activeTab = request()->has('tab') ? request()->query('tab') : 'usaha';
    }

    public function render()
    {
        return view('livewire.menu.sertifikasi');
    }
}
