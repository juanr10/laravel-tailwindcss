<?php

use App\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//RegistrationForm livewire component
Route::get('/register', function () {
    return view('welcome');
});

//SearchDropdown livewire component
Route::get('/menu', function () {
    return view('menu');
});

//DataTables livewire component
Route::get('/data-tables', function () {
    return view('menu', [
        'users' => User::all(),
    ]);
});

