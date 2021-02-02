<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationFormMailable;
use App\Http\Livewire\RegistrationForm;

class RegistrationFormTest extends TestCase
{
    /** @test */
    function main_page_contains_contact_form_livewire_component_test()
    {
        $this->get('/')->assertSeeLivewire('registration-form');
    }

    /** @test */
    function registration_form_sends_out_an_email_test()
    {
        Mail::fake();

        Livewire::test(RegistrationForm::class)
            ->set('first_name', 'Carla')
            ->set('first_name', 'Carla')
            ->set('last_name', 'Garcia')
            ->set('email_address', 'carla@example.com')
            ->set('country', 'Spain')
            ->call('submitForm')
            ->assertSee('You have registered in our application! Please wait for our confirmation email to continue.');

        Mail::assertSent(function(RegistrationFormMailable $mail) {
            $mail->build();

            return $mail->hasTo('carla@example.com') &&
                $mail->subject == 'Successfully registration';
        });
    }

    /** @test */
    function registration_form_first_name_is_required_test()
    {
        Livewire::test(RegistrationForm::class)
            ->set('first_name')
            ->set('last_name', 'Garcia')
            ->set('email_address', 'carla@example.com')
            ->set('country', 'Spain')
            ->call('submitForm')
            ->assertHasErrors(['first_name' => 'required']);
    }

    /** @test */
    function registration_form_email_field_is_valid_test()
    {
        Livewire::test(RegistrationForm::class)
            ->set('first_name', 'Carla')
            ->set('last_name', 'Garcia')
            ->set('email_address', 'carla')
            ->set('country', 'Spain')
            ->call('submitForm')
            ->assertHasErrors(['email_address' => 'email']);
    }
}
