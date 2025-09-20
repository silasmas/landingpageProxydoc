<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Route::get('/privacy-policy', [ContactController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms', [ContactController::class, 'terms'])->name('terms');
