<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('calendar');
});

Route::get('/test', [TaskController::class, 'index']);
