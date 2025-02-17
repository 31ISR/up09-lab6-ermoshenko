<?php

use App\Http\Controllers\Goodbye;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/', [Goodbye::class, 'goodbye'])->name('goodbye');