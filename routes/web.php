<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('login-acc', function () {
    return view('login-acc');
});

Route::get('/home' , [PageController::class, 'landingPage'])->name('home');
Route::get('/booking' , [PageController::class, 'bookingPage'])->name('booking');
Route::get('/booking-details' , [PageController::class, 'bookingDetailsPage'])->name('booking-details');