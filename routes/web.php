<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $mapCoordinates = [
        0 => [
            8 => 'red',
            9 => 'red',
            10 => 'red',
            11 => 'red',
        ], 1 => [
            8 => 'red',
            9 => 'red',
            10 => 'red',
            11 => 'red',
        ],18 => [
            8 => 'red',
            9 => 'red',
            10 => 'red',
            11 => 'red',
        ], 19 => [
            8 => 'red',
            9 => 'red',
            10 => 'red',
            11 => 'red',
        ]
    ];

    return view('dashboard', ['mapCoordinates' => $mapCoordinates]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
