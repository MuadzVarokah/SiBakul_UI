<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]

class Login extends Component
{
    public function render()
    {
        //Membuat menu cepat
        $menuCepat = collect([
            ["title" => "Fitur Aplikasi", "type" => "icon", "icon" => "<i class='fa-solid fa-list'></i>"],
            ["title" => "Mendaftar", "type" => "icon", "icon" => "<i class='fa-solid fa-arrow-right-to-bracket'></i>"],
            ["title" => "Panduan", "type" => "icon", "icon" => "<i class='fa-solid fa-file-circle-question'></i>"],
            ["title" => "Pelatihan", "type" => "icon", "icon" => "<i class='fa-solid fa-person-chalkboard'></i>"],
            ["title" => "Pameran", "type" => "icon", "icon" => "<i class='fa-solid fa-palette'></i>"],
            ["title" => "Tanya Admin", "type" => "icon", "icon" => "<i class='fa-solid fa-headset'></i>"],
            // ["title" => "Info Terbaru", "type" => "icon", "icon" => "<i class='fa-solid fa-circle-info'></i>"],
            // ["title" => "lorem ipsum", "type" => "img", "icon" => "<img src='https://sibakuljogja.jogjaprov.go.id/files/berkasweb/60.png' alt='Markethub'>"],
        ]);

        // Mengubah setiap item menjadi objek stdClass
        $menuCepat = $menuCepat->map(function ($item) {
            $object = new \stdClass();
            $object->title = $item['title'];
            $object->type = $item['type'];
            $object->icon = $item['icon'];
            return $object;
        });

        // dd($menuCepat);

        return view('livewire.login', ['menuCepat' => $menuCepat])
                ->layout('components.layouts.login');
    }
}
