<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users;
use App\Livewire\CreateUser;
use App\Livewire\UpdateUser;
use App\Livewire\Login;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {
    Route::get('/logout', Login::class);
    Route::get('/users', Users::class);
    Route::get('/users/create', CreateUser::class);
    Route::get('/users/{user}', UpdateUser::class);
});

Route::get('/', Login::class)->name('login');


