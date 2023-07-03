<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TermCondition;

class FrontTerm extends Component
{
    public function render()
    {
        $term = TermCondition::first();

        return view('livewire.front-term', [
            'term' => $term,
        ]);
    }
}
