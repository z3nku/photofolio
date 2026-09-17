<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // Show all testimonials in admin panel
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    // Show form to create new testimonial
    public function create()
    {
        return view('admin.testimonials.create');
    }

    // Store new testimonial
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'event_type' => 'required|string|max:255',
            'quote' => 'required|string',
            'is_active' => 'sometimes|boolean',
        ]);

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial added.');
    }

    // Show form to edit existing testimonial
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    // Update testimonial
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'event_type' => 'required|string|max:255',
            'quote' => 'required|string',
            'is_active' => 'sometimes|boolean',
        ]);

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial updated.');
    }

    // Delete testimonial
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimonial deleted.');
    }
}