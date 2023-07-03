<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class FrontCourseDetail extends Component
{
    public $course_slug;

    public function mount($course_slug)
    {
        $this->course_slug = $course_slug;
    }

    public function render()
    {
        $course = Course::where('slug', $this->course_slug)->first();

        return view('livewire.front-course-detail', [
            'course' => $course,
        ]);
    }
}
