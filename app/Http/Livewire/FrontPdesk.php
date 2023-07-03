<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PrinciDesk;

class FrontPdesk extends Component
{
    public function render()
    {
        $desk = PrinciDesk::first();
        
        return view('livewire.front-pdesk', [
            'desk' => $desk,
        ]);
    }
}
