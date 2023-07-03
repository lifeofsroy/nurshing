<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use App\Models\AdmissionForm;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use App\Mail\AdmissionMailToAdmin;
use Illuminate\Support\Facades\Mail;

class FrontAdmission extends Component
{
    use WithFileUploads;

    public $course;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $phone;
    public $email;
    public $gender;
    public $dob;
    public $blood;
    public $caste;
    public $religion;
    public $tongue;
    public $aadhaar;
    public $activity;
    public $is_disable;
    public $vill;
    public $po;
    public $ps;
    public $dist;
    public $state;
    public $pin;
    public $addr_same;
    public $parma_addr;
    public $ft_name;
    public $ft_occup;
    public $mt_name;
    public $mt_occup;
    public $guar_addr;
    public $guar_pin;
    public $guar_ph;
    public $quali1;
    public $board1;
    public $sub1;
    public $percent1;
    public $passing1;
    public $remark1;

    public $quali2;
    public $board2;
    public $sub2;
    public $percent2;
    public $passing2;
    public $remark2;

    public $quali3;
    public $board3;
    public $sub3;
    public $percent3;
    public $passing3;
    public $remark3;
    public $quali4;
    public $board4;
    public $sub4;
    public $percent4;
    public $passing4;
    public $remark4;
    public $is_pay = false;
    public $tc_photo;
    public $usr_photo;
    public $sgn_photo;
    public $adr_photo;
    public $cer_photo = null;
    public $m10_photo;

    public $is_quali2 = false;
    public $is_quali3 = false;
    public $is_quali4 = false;

    public $is_accept = false;


    public function resetInput()
    {
        $this->course = '';
        $this->first_name = '';
        $this->middle_name = '';
        $this->last_name = '';
        $this->phone = '';
        $this->email = '';
        $this->gender = '';
        $this->dob = '';
        $this->blood = '';
        $this->caste = '';
        $this->religion = '';
        $this->tongue = '';
        $this->aadhaar = '';
        $this->activity = '';
        $this->is_disable = '';
        $this->vill = '';
        $this->po = '';
        $this->ps = '';
        $this->dist = '';
        $this->state = '';
        $this->pin = '';
        $this->addr_same = '';
        $this->parma_addr = '';
        $this->ft_name = '';
        $this->ft_occup = '';
        $this->mt_name = '';
        $this->mt_occup = '';
        $this->guar_addr = '';
        $this->guar_pin = '';
        $this->guar_ph = '';
        $this->quali1 = '';
        $this->board1 = '';
        $this->sub1 = '';
        $this->percent1 = '';
        $this->passing1 = '';
        $this->remark1 = '';
        $this->quali2 = '';
        $this->board2 = '';
        $this->sub2 = '';
        $this->percent2 = '';
        $this->passing2 = '';
        $this->remark2 = '';
        $this->quali3 = '';
        $this->board3 = '';
        $this->sub3 = '';
        $this->percent3 = '';
        $this->passing3 = '';
        $this->remark3 = '';
        $this->quali4 = '';
        $this->board4 = '';
        $this->sub4 = '';
        $this->percent4 = '';
        $this->passing4 = '';
        $this->remark4 = '';
        $this->is_pay = '';
        $this->tc_photo = null;
        $this->usr_photo = null;
        $this->sgn_photo = null;
        $this->adr_photo = null;
        $this->cer_photo = null;
        $this->m10_photo = null;
        $this->is_accept = null;
        $this->resetErrorBag();
    }

    public function resetDetail()
    {
        $this->first_name = '';
        $this->middle_name = '';
        $this->last_name = '';
        $this->phone = '';
        $this->email = '';
        $this->gender = '';
        $this->dob = '';
        $this->blood = '';
        $this->caste = '';
        $this->religion = '';
        $this->tongue = '';
        $this->aadhaar = '';
        $this->activity = '';
        $this->is_disable = '';
        $this->vill = '';
        $this->po = '';
        $this->ps = '';
        $this->dist = '';
        $this->state = '';
        $this->pin = '';
        $this->addr_same = '';
        $this->parma_addr = '';
        $this->ft_name = '';
        $this->ft_occup = '';
        $this->mt_name = '';
        $this->mt_occup = '';
        $this->guar_addr = '';
        $this->guar_pin = '';
        $this->guar_ph = '';
        $this->resetErrorBag();
    }

    public function resetQualification()
    {
        $this->quali1 = '';
        $this->board1 = '';
        $this->sub1 = '';
        $this->percent1 = '';
        $this->passing1 = '';
        $this->remark1 = '';
        $this->quali2 = '';
        $this->board2 = '';
        $this->sub2 = '';
        $this->percent2 = '';
        $this->passing2 = '';
        $this->remark2 = '';
        $this->quali3 = '';
        $this->board3 = '';
        $this->sub3 = '';
        $this->percent3 = '';
        $this->passing3 = '';
        $this->remark3 = '';
        $this->quali4 = '';
        $this->board4 = '';
        $this->sub4 = '';
        $this->percent4 = '';
        $this->passing4 = '';
        $this->remark4 = '';
        $this->resetErrorBag();
    }

    public function resetPayment()
    {
        $this->is_pay = '';
        $this->tc_photo = '';
    }

    public function resetTc()
    {
        $this->tc_photo = null;
    }

    public function resetPhoto()
    {
        $this->usr_photo = null;
    }

    public function resetSign()
    {
        $this->sgn_photo = null;
    }

    public function resetAadhaar()
    {
        $this->adr_photo = null;
    }

    public function resetCaste()
    {
        $this->cer_photo = null;
    }

    public function resetSheet()
    {
        $this->m10_photo = null;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'course' => 'required',
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns|unique:admission_forms',
            'phone' => 'required|numeric|digits:10',
            'dob' => 'required|before:today',
            'gender' => 'required',
            'caste' => 'required',
            'religion' => 'required',
            'tongue' => 'required',
            'aadhaar' => 'required',
            'is_disable' => 'required',
            'vill' => 'required',
            'po' => 'required',
            'ps' => 'required',
            'dist' => 'required',
            'state' => 'required',
            'pin' => 'required|numeric|digits:6',
            'parma_addr' => 'exclude_if:addr_same,true|required',
            'ft_name' => 'required',
            'ft_occup' => 'required',
            'mt_name' => 'required',
            'mt_occup' => 'required',
            'guar_addr' => 'required',
            'guar_pin' => 'required|numeric|digits:6',
            'guar_ph' => 'required|numeric|digits:10',

            'quali1' => 'required',
            'board1' => 'required',
            'sub1' => 'required',
            'percent1' => 'required|numeric',
            'passing1' => 'required|numeric|digits:4',

            'quali2' => 'nullable',
            'board2' => 'nullable',
            'sub2' => 'nullable',
            'percent2' => 'nullable|numeric',
            'passing2' => 'nullable|numeric|digits:4',

            'quali3' => 'nullable',
            'board3' => 'nullable',
            'sub3' => 'nullable',
            'percent3' => 'nullable|numeric',
            'passing3' => 'nullable|numeric|digits:4',

            'quali4' => 'nullable',
            'board4' => 'nullable',
            'sub4' => 'nullable',
            'percent4' => 'nullable|numeric',
            'passing4' => 'nullable|numeric|digits:4',

            'is_pay' => 'accepted',
            'tc_photo' => 'exclude_if:is_pay,false|required|image|mimes:png,jpg,jpeg|max:500',

            'usr_photo' => 'required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=1000,max_height=1000,min_width=400,min_height=400',
            'sgn_photo' => 'required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=400,max_height=400,min_width=100,min_height=100',
            'adr_photo' => 'required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=1000,max_height=1000,min_width=400,min_height=400',
            'cer_photo' => 'exclude_if:caste,General|required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=1000,max_height=1000,min_width=400,min_height=400',
            'm10_photo' => 'required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=1000,max_height=1000,min_width=400,min_height=400',

            'is_accept' => 'accepted',
        ]);
    }

    public function admissionSubmit()
    {
        $this->validate([
            'course' => 'required',
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns|unique:admission_forms',
            'phone' => 'required|numeric|digits:10',
            'dob' => 'required|before:today',
            'gender' => 'required',
            'caste' => 'required',
            'religion' => 'required',
            'tongue' => 'required',
            'aadhaar' => 'required',
            'is_disable' => 'required',
            'vill' => 'required',
            'po' => 'required',
            'ps' => 'required',
            'dist' => 'required',
            'state' => 'required',
            'pin' => 'required',
            'parma_addr' => 'exclude_if:addr_same,true|required',
            'ft_name' => 'required',
            'ft_occup' => 'required',
            'mt_name' => 'required',
            'mt_occup' => 'required',
            'guar_addr' => 'required',
            'guar_pin' => 'required|numeric|digits:6',
            'guar_ph' => 'required|numeric|digits:10',

            'quali1' => 'required',
            'board1' => 'required',
            'sub1' => 'required',
            'percent1' => 'required|numeric|decimal:2',
            'passing1' => 'required|numeric|digits:4',

            'quali2' => 'nullable',
            'board2' => 'nullable',
            'sub2' => 'nullable',
            'percent2' => 'nullable|numeric|decimal:2',
            'passing2' => 'nullable|numeric|digits:4',

            'quali3' => 'nullable',
            'board3' => 'nullable',
            'sub3' => 'nullable',
            'percent3' => 'nullable|numeric|decimal:2',
            'passing3' => 'nullable|numeric|digits:4',

            'quali4' => 'nullable',
            'board4' => 'nullable',
            'sub4' => 'nullable',
            'percent4' => 'nullable|numeric|decimal:2',
            'passing4' => 'nullable|numeric|digits:4',

            'is_pay' => 'accepted',
            'tc_photo' => 'exclude_if:is_pay,false|required|image|mimes:png,jpg,jpeg|max:500',

            'usr_photo' => 'required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=1000,max_height=1000,min_width=400,min_height=400',
            'sgn_photo' => 'required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=400,max_height=400,min_width=100,min_height=100',
            'adr_photo' => 'required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=1000,max_height=1000,min_width=400,min_height=400',
            'cer_photo' => 'exclude_if:caste,General|required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=1000,max_height=1000,min_width=400,min_height=400',
            'm10_photo' => 'required|image|mimes:png,jpg,jpeg|max:200|dimensions:max_width=1000,max_height=1000,min_width=400,min_height=400',

            'is_accept' => 'accepted',
        ]);

        $admission = new AdmissionForm();

        $admission->course = $this->course;
        $admission->first_name = $this->first_name;
        $admission->middle_name = $this->middle_name;
        $admission->last_name = $this->last_name;
        $admission->phone = $this->phone;
        $admission->email = $this->email;
        $admission->gender = $this->gender;
        $admission->dob = $this->dob;
        $admission->blood = $this->blood;
        $admission->caste = $this->caste;
        $admission->religion = $this->religion;
        $admission->tongue = $this->tongue;
        $admission->aadhaar = $this->aadhaar;
        $admission->activity = $this->activity;
        $admission->is_disable = $this->is_disable;
        $admission->vill = $this->vill;
        $admission->po = $this->po;
        $admission->ps = $this->ps;
        $admission->dist = $this->dist;
        $admission->state = $this->state;
        $admission->pin = $this->pin;
        $admission->addr_same = $this->addr_same;
        $admission->parma_addr = $this->parma_addr;
        $admission->ft_name = $this->ft_name;
        $admission->ft_occup = $this->ft_occup;
        $admission->mt_name = $this->mt_name;
        $admission->mt_occup = $this->mt_occup;
        $admission->guar_addr = $this->guar_addr;
        $admission->guar_pin = $this->guar_pin;
        $admission->guar_ph = $this->guar_ph;
        $admission->quali1 = $this->quali1;
        $admission->board1 = $this->board1;
        $admission->sub1 = $this->sub1;
        $admission->percent1 = $this->percent1;
        $admission->passing1 = $this->passing1;
        $admission->remark1 = $this->remark1;
        $admission->quali2 = $this->quali2;
        $admission->board2 = $this->board2;
        $admission->sub2 = $this->sub2;
        $admission->percent2 = $this->percent2;
        $admission->passing2 = $this->passing2;
        $admission->remark2 = $this->remark2;
        $admission->quali3 = $this->quali3;
        $admission->board3 = $this->board3;
        $admission->sub3 = $this->sub3;
        $admission->percent3 = $this->percent3;
        $admission->passing3 = $this->passing3;
        $admission->remark3 = $this->remark3;
        $admission->quali4 = $this->quali4;
        $admission->board4 = $this->board4;
        $admission->sub4 = $this->sub4;
        $admission->percent4 = $this->percent4;
        $admission->passing4 = $this->passing4;
        $admission->remark4 = $this->remark4;
        $admission->is_pay = $this->is_pay;


        $imageName1 = Carbon::now()->timestamp . '.' . $this->tc_photo->extension();
        $this->tc_photo->storeAs('public/admission/tc', $imageName1);
        $admission->tc_photo = 'admission/tc/' . $imageName1;

        $imageName2 = Carbon::now()->timestamp . '.' . $this->usr_photo->extension();
        $this->usr_photo->storeAs('public/admission/usr', $imageName2);
        $admission->usr_photo = 'admission/usr/' . $imageName2;

        $imageName3 = Carbon::now()->timestamp . '.' . $this->sgn_photo->extension();
        $this->sgn_photo->storeAs('public/admission/sgn', $imageName3);
        $admission->sgn_photo = 'admission/sgn/' . $imageName3;

        $imageName4 = Carbon::now()->timestamp . '.' . $this->adr_photo->extension();
        $this->adr_photo->storeAs('public/admission/adr', $imageName4);
        $admission->adr_photo = 'admission/adr/' . $imageName4;

        $admission->cer_photo = null;

        if ($this->caste != 'General') {
            $imageName5 = Carbon::now()->timestamp . '.' . $this->cer_photo->extension();
            $this->cer_photo->storeAs('public/admission/cer', $imageName5);
            $admission->cer_photo = 'admission/cer/' . $imageName5;
        }

        $imageName6 = Carbon::now()->timestamp . '.' . $this->m10_photo->extension();
        $this->m10_photo->storeAs('public/admission/m10', $imageName6);
        $admission->m10_photo = 'admission/m10/' . $imageName6;


        $admission->save();

        Mail::to('admission@dishanursinginstitute.com')->send(new AdmissionMailToAdmin($this->course, $this->first_name, $this->middle_name, $this->last_name, $this->phone, $this->email, $this->gender, $this->dob, $this->blood, $this->caste, $this->religion, $this->tongue, $this->aadhaar, $this->activity, $this->is_disable, $this->vill, $this->po, $this->ps, $this->dist, $this->state, $this->pin, $this->addr_same, $this->parma_addr, $this->ft_name, $this->ft_occup, $this->mt_name, $this->mt_occup, $this->guar_addr, $this->guar_pin, $this->guar_ph, $this->quali1, $this->board1, $this->sub1, $this->percent1, $this->passing1, $this->remark1, $this->quali2, $this->board2, $this->sub2, $this->percent2, $this->passing2, $this->remark2, $this->quali3, $this->board3, $this->sub3, $this->percent3, $this->passing3, $this->remark3, $this->quali4, $this->board4, $this->sub4, $this->percent4, $this->passing4, $this->remark4, $this->is_pay, $admission->tc_photo, $admission->usr_photo, $admission->sgn_photo, $admission->adr_photo, $admission->cer_photo, $admission->m10_photo));

        $this->resetInput();
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('added', ['message' => 'Form Submitted']);
    }

    protected $messages = [
        'course.required' => 'Please select a Course',

        'first_name.required' => 'First Name is Required',
        'last_name.required' => 'Last Name is Required',

        'email.required' => 'Email is Required',
        'email.email' => 'Enter valid Email',
        'email.unique' => 'Email already taken',

        'phone.required' => 'Phone is Required',
        'phone.numeric' => 'Enter valid Phone No.',
        'phone.digits' => 'Enter 10 digits Phone No.',

        'dob.required' => 'DoB is Required',
        'dob.before' => 'Enter valid DoB',

        'gender.required' => 'Gender is Required',

        'caste.required' => 'Caste is Required',

        'religion.required' => 'Religion is Required',

        'tongue.required' => 'Language is Required',

        'aadhaar.required' => 'Aadhaar is Required',

        'is_disable.required' => 'Field is Required',

        'father_name.required' => 'Father\'s Name is Required',

        'mother_name.required' => 'Mother\'s Name is Required',

        'vill.required' => 'Vill / City is Required',

        'po.required' => 'P.O. is Required',

        'ps.required' => 'P.S. is Required',

        'dist.required' => 'Dist. is Required',

        'state.required' => 'State is Required',

        'pin.required' => 'PIN is Required',
        'pin.numeric' => 'Enter valid PIN',
        'pin.digits' => '6 digits PIN',

        'parma_addr.required' => 'Parmanent Address is Empty',

        'ft_name.required' => 'Father\'s Name is Required',
        'ft_occup.required' => 'Father\'s Occupation is Required',

        'mt_name.required' => 'Mother\'s Name is Required',
        'mt_occup.required' => 'Mother\'s Occupation is Required',

        'guar_addr.required' => 'Gurdian\'s Addres is Required',

        'guar_pin.required' => 'Gurdian\'s PIN is Required',
        'guar_pin.numeric' => 'Enter valid PIN',
        'guar_pin.digits' => '6 digits PIN',

        'guar_ph.required' => 'Gurdian\'s Phone is Required',
        'guar_ph.numeric' => 'Enter valid Phone No.',
        'guar_ph.digits' => 'Enter 10 digits Phone No.',

        'quali1.required' => 'Qualification is Required',
        'board1.required' => 'Board is Required',
        'sub1.required' => 'Subject is Required',
        'percent1.required' => 'Required',
        'percent1.numeric' => 'Enter valid Percentage',
        'passing1.required' => 'Year is Required',
        'passing1.numeric' => 'Enter valid Year',
        'passing1.digits' => '4 digits Year e.g. 2017',

        'percent2.numeric' => 'Enter valid Percentage',
        'passing2.numeric' => 'Enter valid Year',
        'passing2.digits' => '4 digits Year e.g. 2017',

        'percent3.numeric' => 'Enter valid Percentage',
        'passing3.numeric' => 'Enter valid Year',
        'passing3.digits' => '4 digits Year e.g. 2017',

        'percent4.numeric' => 'Enter valid Percentage',
        'passing4.numeric' => 'Enter valid Year',
        'passing4.digits' => '4 digits Year e.g. 2017',

        'is_pay.accepted' => 'You have to accept this',

        'tc_photo.required' => 'TC is Required',
        'tc_photo.image' => 'Only Image accepted',
        'tc_photo.mimes' => 'Only jpg,jepg,png accepted',
        'tc_photo.max' => 'Should be less than 200KB',
        'tc_photo.dimensions' => 'Min 400 x 400 px, Max 1000 x 1000 px,',

        'usr_photo.required' => 'Photo is Required',
        'usr_photo.image' => 'Only Image accepted',
        'usr_photo.mimes' => 'Only jpg,jepg,png accepted',
        'usr_photo.max' => 'Should be less than 200KB',
        'usr_photo.dimensions' => 'Min 400 x 400 px, Max 1000 x 1000 px,',

        'sgn_photo.required' => 'Sign is Required',
        'sgn_photo.image' => 'Only Image accepted',
        'sgn_photo.mimes' => 'Only jpg,jepg,png accepted',
        'sgn_photo.max' => 'Should be less than 200KB',
        'sgn_photo.dimensions' => 'Min 100 x 100 px, Max 400 x 400 px',

        'adr_photo.required' => 'Aadhaar is Required',
        'adr_photo.image' => 'Only Image accepted',
        'adr_photo.mimes' => 'Only jpg,jepg,png accepted',
        'adr_photo.max' => 'Should be less than 200KB',
        'adr_photo.dimensions' => 'Min 400 x 400 px, Max 1000 x 1000 px,',

        'cer_photo.required' => 'Certificate is Required',
        'cer_photo.image' => 'Only Image accepted',
        'cer_photo.mimes' => 'Only jpg,jepg,png accepted',
        'cer_photo.max' => 'Should be less than 200KB',
        'cer_photo.dimensions' => 'Min 400 x 400 px, Max 1000 x 1000 px,',

        'm10_photo.required' => 'Marksheet is Required',
        'm10_photo.image' => 'Only Image accepted',
        'm10_photo.mimes' => 'Only jpg,jepg,png accepted',
        'm10_photo.max' => 'Should be less than 200KB',
        'm10_photo.dimensions' => 'Min 400 x 400 px, Max 1000 x 1000 px,',

        'is_accept.accepted' => 'You have to accept this',
    ];

    public function render()
    {
        $courses = Course::all();

        return view('livewire.front-admission', [
            'courses' => $courses,
        ]);
    }
}
