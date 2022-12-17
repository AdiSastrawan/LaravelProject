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

Route::get('/admin' , [AdminController::class, 'index'])->name('admin-page')->middleware('auth','isadmin');
Route::get('/package' , [AdminController::class, 'package'])->name('admin-package')->middleware('auth','isadmin');
Route::get('/package/create' , [AdminController::class, 'packageCreate'])->name('admin-package-create')->middleware('auth','isadmin');
Route::post('/package' , [AdminController::class, 'packageStore'])->name('admin-package-store')->middleware('auth','isadmin');
Route::get('/package/edit/{id}' , [AdminController::class, 'packageEdit'])->name('admin-package-edit')->middleware('auth','isadmin');
Route::get('/package/{id}' , [AdminController::class, 'packageDestroy'])->name('admin-package-destroy')->middleware('auth','isadmin');
Route::put('/package' , [AdminController::class, 'packageUpdate'])->name('admin-package-update')->middleware('auth','isadmin');

Route::resource('/booking-details', ReviewController::class);
Route::resource('/edit-reviews', ReviewController::class);