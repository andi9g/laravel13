<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Socialite;
use App\Http\Controllers\SocialiteC;

Route::view('/', 'welcome')->name('home');

Route::get('/auth/redirect', [SocialiteC::class, 'socialite'])->name('auth.socialite');
 
Route::get('/auth/google/callback', [SocialiteC::class, 'callback'])->name('auth.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');


});

require __DIR__.'/settings.php';
