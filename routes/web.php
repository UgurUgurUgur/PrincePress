<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavController;

Route::get('/', [NavController::class, 'index'])->name('home');
Route::get('/series', [NavController::class, 'series'])->name('series');
Route::get('/short-stories', [NavController::class, 'shortstories'])->name('short-stories');
Route::get('/about-us', [NavController::class, 'aboutus'])->name('about-us');
Route::get('/contact-us', [NavController::class, 'contactus'])->name('contact-us');