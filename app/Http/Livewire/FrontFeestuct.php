<?php

namespace App\Http\Livewire;

use App\Models\Fee;
use Livewire\Component;

class FrontFeestuct extends Component
{
    public function render()
    {
        $fees = Fee::first();

        return view('livewire.front-feestuct', [
            'fees' => $fees,
        ]);
    }
}
