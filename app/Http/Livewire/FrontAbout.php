<?php

namespace App\Http\Livewire;

use App\Models\AboutUs;
use Livewire\Component;

class FrontAbout extends Component
{
    public function render()
    {
        $about = AboutUs::first();

        return view('livewire.front-about', [
            'about' => $about,
        ]);
    }
}
