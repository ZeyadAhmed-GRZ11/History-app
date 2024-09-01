<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;



Route::get('/home/page', HomePage::class);





Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
