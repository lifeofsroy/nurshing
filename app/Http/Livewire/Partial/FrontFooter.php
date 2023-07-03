<?php

namespace App\Http\Livewire\Partial;

use App\Models\ContactInfo;
use App\Models\Footer;
use Livewire\Component;

class FrontFooter extends Component
{
    public function render()
    {
        $footer = Footer::first();
        $contact = ContactInfo::first();

        return view('livewire.partial.front-footer', [
            'footer' => $footer,
            'contact' => $contact,
        ]);
    }
}
