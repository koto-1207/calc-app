<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});


Volt::route('/calcs/{num1}/{operator}/{num2}', 'calc');
