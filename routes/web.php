<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventResponseController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/registracija', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/registracija', [RegistrationController::class, 'checkMaticna'])->name('registration.check');
Route::post('/registracija/zakljucek', [RegistrationController::class, 'store'])->name('registration.store');

Route::get('/novice', [PostController::class, 'index'])->name('news.index');
Route::get('/novice/{post:slug}', [PostController::class, 'show'])->name('news.show');

Route::post('/events/{event}/respond', [EventResponseController::class, 'respond'])
    ->middleware('auth')
    ->name('events.respond');

/*
|--------------------------------------------------------------------------
| Breeze Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::post('/api/lookup-user', function (Illuminate\Http\Request $request) {
    $user = \App\Models\User::where('maticna_stevilka', $request->maticna_stevilka)->first();

    if (!$user) {
        return response()->json(['error' => 'Not found'], 404);
    }

    return response()->json([
        'name' => $user->name,
        'surname' => $user->surname,
        'email' => $user->email,
        'phone' => $user->phone,
    ]);
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('filament.admin.pages.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Breeze authentication routes (login/register/etc.)
require __DIR__ . '/auth.php';
