<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\TempatwisataController;

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
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    // Route::get('/wishlist', [WishlistController::class, 'store'])->name('wishlist');

    Route::get('/tempatwisata', [TempatwisataController::class, 'index'])->name('tempatwisata');
    Route::get('/tempatwisata-tambah', [TempatwisataController::class, 'create'])->name('tempatwisata-tambah');
    Route::post('/tempatwisata', [TempatwisataController::class, 'store'])->name('tempatwisata');
    Route::post('/tempatwisata/{id}', [TempatwisataController::class, 'show'])->name('tempatwisata');

});

// Route::get('/wishlist', function () {
//     return view('wishlist');
// })->middleware(['auth', 'verified'])->name('wishlist');

require __DIR__.'/auth.php';
