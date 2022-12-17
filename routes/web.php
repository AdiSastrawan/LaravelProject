<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('login-acc', function () {
    return view('login-acc');
});

Route::get('/' , [PageController::class, 'landingPage']);
Route::get('/home' , [PageController::class, 'landingPage'])->name('home');
Route::get('/booking' , [PageController::class, 'bookingPage'])->name('booking');
Route::get('/booking-details' , [PageController::class, 'bookingDetailsPage'])->name('booking-details');
//Route::get('/' , [AdminController::class, 'index'])->name('admin-page')->middleware('auth','isadmin');
Route::resource('/booking-details', ReviewController::class);
Route::resource('/edit-reviews', ReviewController::class);