<?php

use App\Http\Controllers\FlagsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/its', function () {
    return view('its');
});

Route::resource('/bandiere', FlagsController::class);
