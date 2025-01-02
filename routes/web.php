<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Public\Home\Index::class)->name('home');
