<?php

namespace App\Http\Livewire\Partial;

use Livewire\Component;
use App\Models\Affiliation;
use App\Models\Announce;
use App\Models\Header;
use App\Models\Social;
use Illuminate\Support\Facades\Storage;

class FrontHeader extends Component
{
    public function export()
    {
        $affiliation = Affiliation::find(1);
        return Storage::disk('public')->download($affiliation->doc);
    }
    
    public function render()
    {
        $announces = Announce::where('status', 1)->get();
        $social = Social::where('status', 1)->first();
        $header = Header::first();

        return view('livewire.partial.front-header', [
            'announces' => $announces,
            'social' => $social,
            'header' => $header,
        ]);
    }
}
