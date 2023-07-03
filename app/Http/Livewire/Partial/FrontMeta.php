<?php

namespace App\Http\Livewire\Partial;

use App\Models\SiteDetail;
use Livewire\Component;

class FrontMeta extends Component
{
    public function render()
    {
        $sdetail = SiteDetail::first();

        return view('livewire.partial.front-meta', [
            'sdetail' => $sdetail,
        ]);
    }
}
