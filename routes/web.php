<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Form\Index as FormIndex;

Route::get('/', App\Livewire\Public\Home\Index::class)->name('home');
Route::get('/form/{type}', FormIndex::class)->name('form');

//ZAKI
Route::get('/create-wish', \App\Livewire\Birthday\Index::class)->name('wish.create');
Route::get('/list-wish', \App\Livewire\Birthday\ListWishes::class)->name('wish.index');
Route::get('/show/{id}',\App\Livewire\Birthday\Show::class)->name('wishes.show');
