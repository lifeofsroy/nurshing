<?php

namespace App\Http\Livewire;

use App\Models\CookiePolicy;
use Livewire\Component;

class FrontCookie extends Component
{
    public function render()
    {
        $cookie = CookiePolicy::first();

        return view('livewire.front-cookie', [
            'cookie' => $cookie,
        ]);
    }
}
