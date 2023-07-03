<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm;
use App\Models\ContactInfo;
use App\Mail\ContactMailToAdmin;
use Illuminate\Support\Facades\Mail;

class FrontContact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $desc;

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->subject = null;
        $this->desc = null;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email|email:rfc,dns',
            'phone' => 'required|numeric|digits:10',
            'subject' => 'required',
            'desc' => 'required',
        ]);
    }

    public function contactRequest(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|email:rfc,dns',
            'phone' => 'required|numeric|digits:10',
            'subject' => 'required',
            'desc' => 'required',
        ]);

        $form = new ContactForm();
        $form->name = $this->name;
        $form->email = $this->email;
        $form->phone = $this->phone;
        $form->subject = $this->subject;
        $form->desc = $this->desc;

        $form->save();

        Mail::to('contact@dishanursinginstitute.com')->send(new ContactMailToAdmin($this->name, $this->email, $this->phone, $this->subject, $this->desc));

        $this->resetInput();
        $this->dispatchBrowserEvent('added', ['message' => 'Message Sent']);
    }

    protected $messages = [
        'name.required' => 'Name cannot be empty',
        'email.required' => 'Email is necessary',
        'email.email' => 'Email is invalid',
        'phone.required' => 'Phone is necessary',
        'subject.required' => 'Subject is necessary',
        'desc.required' => 'You forgot to write your Message',
    ];

    public function render()
    {
        $contact = ContactInfo::first();
        
        return view('livewire.front-contact', [
            'contact' => $contact,
        ]);
    }
}
