<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class FrontCourse extends Component
{
    public function render()
    {
        $courses = Course::all();

        return view('livewire.front-course', [
            'courses' => $courses,
        ]);
    }
}
