<?php

use App\Http\Controllers\aboutusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\newsController;

// ROTTE NOMINALI
Route::get('/', [homepageController::class, 'homepage'])->name('homepage');
Route::get('/news', [homepageController::class, 'news'])->name('news');
Route::get('/aboutus', [aboutusController::class, 'aboutus'])->name('aboutus');

// ROTTE PARAMETRICHE
Route::get('/news/{_idArticoli}', [homepageController::class, 'articoliCompleti'])->name('articoloDettaglio');

Route::get('/aboutus/{_idPersona}', [aboutusController::class, 'chisiamoPersone'])->name('chisiamoPersona');