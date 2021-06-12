<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('paneles','App\Http\Controllers\PanelController');

Route::middleware(['auth:sanctum', 'verified'])->get('/panels', function () {
    return view('panels.index');
})->name('panels');
