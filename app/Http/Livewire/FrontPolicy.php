<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PrivacyPolicy;

class FrontPolicy extends Component
{
    public function render()
    {
        $privacy = PrivacyPolicy::first();

        return view('livewire.front-policy', [
            'privacy' => $privacy,
        ]);
    }
}
