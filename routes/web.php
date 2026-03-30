<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/uslugi/roboty-ziemne', 'services.roboty-ziemne')->name('roboty-ziemne');
Route::view('/uslugi/transport-kruszywa', 'services.transport-kruszywa')->name('transport-kruszywa');
Route::view('/uslugi/wywoz-gruzu', 'services.wywoz-gruzu')->name('wywoz-gruzu');
Route::view('/uslugi/uslugi-koparka', 'services.uslugi-koparka')->name('uslugi-koparka');
