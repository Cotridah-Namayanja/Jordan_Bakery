<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;



Route::get('/', [SiteController::class, 'home']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/addrecipe', [SiteController::class, 'addrecipe'])->name('addrecipe');
Route::post('/saverecipe', [SiteController::class, 'saverecipe'])->name('saverecipe');



