<?php

namespace App\Http\Livewire;

use App\Models\Eligibility;
use Livewire\Component;

class FrontEligible extends Component
{
    public function render()
    {
        $eligible = Eligibility::first();

        return view('livewire.front-eligible', [
            'eligible' => $eligible,
        ]);
    }
}
