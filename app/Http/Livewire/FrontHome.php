<?php

namespace App\Http\Livewire;

use App\Models\Ads;
use App\Models\Banner;
use App\Models\Course;
use App\Models\Notice;
use App\Models\Social;
use Livewire\Component;
use App\Models\Facility;
use App\Models\ContactInfo;
use App\Models\PrinciDesk;
use App\Models\Slider;
use App\Models\Testimonial;

class FrontHome extends Component
{
    public function render()
    {
        $contact = ContactInfo::first();
        $socials = Social::where('status', 1)->get();
        $testis = Testimonial::where('status', 1)->get();
        $facility = Facility::first();
        $courses = Course::all();
        $notices = Notice::where('status', 1)->get();
        $adses = Ads::where('status', 1)->get();
        $desk = PrinciDesk::first();
        $banner = Banner::first();
        $sliders = Slider::where('status', 1)->get();

        return view('livewire.front-home', [
            'contact' => $contact,
            'socials' => $socials,
            'testis' => $testis,
            'facility' => $facility,
            'courses' => $courses,
            'notices' => $notices,
            'adses' => $adses,
            'desk' => $desk,
            'banner' => $banner,
            'sliders' => $sliders,
        ]);
    }
}
