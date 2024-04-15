<?php

use App\Livewire\Authentication\Login;
use App\Livewire\Authentication\Register;
use App\Livewire\Chirps\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/dashboard', Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
