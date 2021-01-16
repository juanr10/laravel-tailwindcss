<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $first_name;
    public $last_name;
    public $email_address;
    public $country;
    public $successMessage = '';

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email_address' => 'required|email',
        'country' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact['first_name'] = $this->first_name;
        $contact['last_name'] = $this->last_name;
        $contact['email_address'] = $this->email_address;
        $contact['country'] = $this->country;

        sleep(1);
        Mail::to('juan.argudo@gmail.com')->send(new ContactFormMailable($contact));

        $this->resetForm();

        $this->successMessage = 'You have registered in our application.';
    }

    private function resetForm ()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email_address = '';
        $this->country = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
