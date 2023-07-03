<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Facility;

class FrontFacility extends Component
{
    public function render()
    {
        $facility = Facility::first();
        
        return view('livewire.front-facility', [
            'facility' => $facility,
        ]);
    }
}
