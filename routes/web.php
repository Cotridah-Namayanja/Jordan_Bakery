<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;



Route::get('/', [SiteController::class, 'home']);
Route::get('/contact', [SiteController::class, 'contact']);

