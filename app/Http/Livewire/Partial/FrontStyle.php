<?php

namespace App\Http\Livewire\Partial;

use Livewire\Component;
use App\Models\SiteDetail;

class FrontStyle extends Component
{
    public function render()
    {
        $sdetail = SiteDetail::first();
        
        return view('livewire.partial.front-style', [
            'sdetail' => $sdetail,
        ]);
    }
}
