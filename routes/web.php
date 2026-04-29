<?php

use App\Http\Controllers\aboutusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\contactController;

// ROTTE NOMINALI
Route::get('/', [homepageController::class, 'homepage'])->name('homepage');
Route::get('/news', [homepageController::class, 'news'])->name('news');
Route::get('/aboutus', [aboutusController::class, 'aboutus'])->name('aboutus');

// ROTTE PARAMETRICHE
Route::get('/news/{_idArticoli}', [homepageController::class, 'articoliCompleti'])->name('articoloDettaglio');

Route::get('/aboutus/{_idPersona}', [aboutusController::class, 'chisiamoPersone'])->name('chisiamoPersona');

// ROTTA CONTATTACI GET
Route::get('/contattaci', [contactController::class, 'contattaci'])->name('contattaci');

// ROTTA DI RICHIESTA UTENTE POST
Route::post('/contattaci', [contactController::class, 'submit'])->name('contact.submit');

// ROTTA THANK YOU
Route::get('/thank-you', [contactController::class, 'thankYou'])->name('thankyou.page');
