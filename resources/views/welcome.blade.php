<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Laravel & Tailwind</title>

   <link href="css/app.css" rel="stylesheet">
   <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
   @livewireStyles
</head>
<body>
<div id="app">
   <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center">
           <div class="flex flex-col justify-around">
               <div class="space-y-6">
                   <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                        Laravel & Tailwind
                   </h1>
               </div>
           </div>
        </div>

        <div>
            @livewire('registration-form')
        </div>
   </div>
</div>

@livewireScripts
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
