<?php

use App\Http\Controllers\KartingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('kartings', KartingController::class);
