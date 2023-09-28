<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavController;

Route::get('/', [NavController::class, 'index'])->name('home');
Route::get('/series', [NavController::class, 'series'])->name('series');
Route::get('/short-stories', [NavController::class, 'shortStories'])->name('short-stories');
Route::get('/about', [NavController::class, 'about'])->name('about');
Route::get('/contact', [NavController::class, 'contact'])->name('contact');