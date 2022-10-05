<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('card', [CardController::class, 'index'])->name('card.index');
Route::post('card', [CardController::class, 'store'])->name('card.store');
Route::get('card/{id}/edit', [CardController::class, 'edit'])->name('card.edit');
Route::put('card/{id}', [CardController::class, 'update'])->name('card.update');
Route::delete('card/{id}', [CardController::class, 'destroy'])->name('card.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
