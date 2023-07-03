<?php

namespace App\Http\Livewire;

use App\Models\Notice;
use Livewire\Component;

class FrontNotice extends Component
{
    public function render()
    {
        $notices = Notice::where('status', 1)->get();

        return view('livewire.front-notice', [
            'notices' => $notices
        ]);
    }
}
