<x-admin-layout>
    <div class="max-w-2xl">
        <h1 class="display-headline text-5xl mb-8">Edit Testimonial</h1>

        <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="client_name" class="block font-display uppercase tracking-widest text-lg mb-2">
                    Client Name
                </label>
                <input 
                    type="text" 
                    name="client_name" 
                    id="client_name" 
                    value="{{ old('client_name', $testimonial->client_name) }}" 
                    required
                    class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime transition-colors"
                >
                @error('client_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="event_type" class="block font-display uppercase tracking-widest text-lg mb-2">
                    Event Type
                </label>
                <input 
                    type="text" 
                    name="event_type" 
                    id="event_type" 
                    value="{{ old('event_type', $testimonial->event_type) }}" 
                    required
                    class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime transition-colors"
                >
                @error('event_type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="quote" class="block font-display uppercase tracking-widest text-lg mb-2">
                    Quote
                </label>
                <textarea 
                    name="quote" 
                    id="quote" 
                    rows="5" 
                    required
                    class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime transition-colors"
                >{{ old('quote', $testimonial->quote) }}</textarea>
                @error('quote')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-2">
                <input 
                    type="checkbox" 
                    name="is_active" 
                    id="is_active" 
                    value="1"
                    {{ $testimonial->is_active ? 'checked' : '' }}
                    class="border-ink bg-white focus:ring-lime"
                >
                <label for="is_active" class="text-sm">
                    Active (show on landing page)
                </label>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="btn-lime">
                    Update Testimonial
                </button>
                <a href="{{ route('admin.testimonials.index') }}" class="btn-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</x-admin-layout>