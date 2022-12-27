<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ResidentController;
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



Route::get('/', [PageController::class, 'landing']);
Route::get('/home', [PageController::class, 'landing'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('login-acc', function () {
    return view('login-acc');
});


Route::get('/packages', [BookingController::class, 'package'])->name('packages');
Route::get('/details/{package_id}', [BookingController::class, 'details'])->name('details');
Route::get('/cart', [BookingController::class, 'cart'])->name('cart');

Route::get('add-to-cart/{package_id}', [BookingController::class, 'add'])->name('add-to-cart');
Route::delete('remove-from-cart', [BookingController::class, 'remove'])->name('remove-from-cart');
Route::patch('update-cart', [BookingController::class, 'update'])->name('update-cart');
Route::get('/history', [BookingController::class, 'history'])->name('history');

Route::get('/admin', [AdminController::class, 'index'])->name('admin-index')->middleware('auth', 'isadmin');

Route::resource('package', PackageController::class)->middleware('auth', 'isadmin');
Route::resource('room', RoomController::class)->middleware('auth', 'isadmin');
Route::resource('facility', FacilityController::class)->middleware('auth', 'isadmin');
Route::resource('resident', ResidentController::class)->middleware('auth', 'isadmin');




Route::resource('/details', ReviewController::class);
Route::resource('/edit-reviews', ReviewController::class);
