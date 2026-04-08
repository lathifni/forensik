<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KematianController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [KematianController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/kematian/create', [KematianController::class, 'create'])->name('kematian.create');
    Route::post('/kematian', [KematianController::class, 'store'])->name('kematian.store');
    Route::get('/kematian/export', [KematianController::class, 'export'])->name('kematian.export');
    Route::get('/kematian/detail/{id}', [KematianController::class, 'show'])->name('kematian.show');
});

require __DIR__.'/auth.php';
