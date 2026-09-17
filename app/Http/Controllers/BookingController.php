<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'event_type' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'message' => 'required|string',
        ]);

        Booking::create($validated);

        return back()->with('booking_success', 'Thanks! I\'ll be in touch within 24 hours.');
    }
}