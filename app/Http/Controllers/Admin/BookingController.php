<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        // Mark as read when viewed
        if (!$booking->is_read) {
            $booking->update(['is_read' => true]);
        }
        return view('admin.bookings.show', compact('booking'));
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted.');
    }
}