<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventResponseController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/novice', [PostController::class, 'index'])->name('news.index');
Route::get('/novice/{post:slug}', [PostController::class, 'show'])->name('news.show');

Route::post('/events/{event}/respond', [EventResponseController::class, 'respond'])
    ->middleware('auth')
    ->name('events.respond');
