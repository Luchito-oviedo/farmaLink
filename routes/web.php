<?php

use App\Livewire\Medications;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/medications', Medications::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
