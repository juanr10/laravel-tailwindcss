<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\RegistrationFormMailable;
use Illuminate\Support\Facades\Mail;

/**
 * Component to validate data from a form & send a confirmation email.
 */
class RegistrationForm extends Component
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
        $contact = $this->validate();

        sleep(1);
        Mail::to($this->email_address)->send(new RegistrationFormMailable($contact));

        $this->successMessage =
        'You have registered in our application! Please wait for our confirmation email to continue.';

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email_address = '';
        $this->country = '';
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
}
