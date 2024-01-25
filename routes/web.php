<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Livewire\Main\Welcome::class);

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function (){
    Route::get('/', \App\Livewire\User\Welcome::class)->name('dashboard');

    Route::get('/card', \App\Livewire\User\Card::class)->name('card');
    Route::get('/request', \App\Livewire\User\Request::class)->name('request');

    Route::get('/donate/{donation_id}', \App\Livewire\User\Donate::class)->name('donate');


    Route::get('/admin', \App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    Route::get('/admin/donations', \App\Livewire\Admin\Donations::class)->name('admin.donations');
    Route::get('/admin/transactions', \App\Livewire\Admin\Transaction::class)->name('admin.transactions');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
