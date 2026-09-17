<?php

use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\BookingController;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $testimonials = Testimonial::where('is_active', true)->latest()->get();
    return view('welcome', compact('testimonials'));
});

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('bookings', AdminBookingController::class)->only(['index', 'show', 'destroy']);
});

Route::get('/photos', function () {
    return view('portfolio.photos');
})->name('portfolio.photos');

Route::get('/films', function () {
    return view('portfolio.films');
})->name('portfolio.films');

require __DIR__.'/auth.php';