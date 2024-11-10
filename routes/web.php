<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

// Routes PageController
Route::get('/', [PageController::class, 'index5'])->name('index5');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/blog1', [PageController::class, 'blog1'])->name('blog1');
Route::get('/blog2', [PageController::class, 'blog2'])->name('blog2');
Route::get('/blog3', [PageController::class, 'blog3'])->name('blog3');
Route::get('/blog4', [PageController::class, 'blog4'])->name('blog4');
Route::get('/blog5', [PageController::class, 'blog5'])->name('blog5');
Route::get('/blog6', [PageController::class, 'blog6'])->name('blog6');
Route::get('/blog7', [PageController::class, 'blog7'])->name('blog7');
Route::get('/blog8', [PageController::class, 'blog8'])->name('blog8');
Route::get('/blog9', [PageController::class, 'blog9'])->name('blog9');

// Rute untuk menampilkan formulir pendaftaran
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Rute untuk mengolah pendaftaran
Route::post('/register', [RegisterController::class, 'register']);

// Routes untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes untuk booking
Route::get('/booking', [BookingController::class, 'showBookingForm'])->name('booking.form');
Route::post('/bookings', [BookingController::class, 'book'])->middleware('auth')->name('bookings');

//admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin/bookings/delete', [AdminController::class, 'deleteBooking'])->name('admin.deleteBooking');
    Route::post('/admin/bookings/update-status', [AdminController::class, 'updateBookingStatus'])->name('admin.updateBookingStatus');
    Route::post('/admin/users/delete', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

