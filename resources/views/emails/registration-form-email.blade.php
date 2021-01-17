@component('mail::message')
# Welcome!

You have successfully registered on our page, to continue click on the next button:

@component('mail::button', ['url' => 'https://github.com/juanr10'])
Start
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
