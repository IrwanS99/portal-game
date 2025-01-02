<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Form\Index as FormIndex;

Route::get('/', App\Livewire\Public\Home\Index::class)->name('home');
Route::get('/form/{type}', FormIndex::class)->name('form');
