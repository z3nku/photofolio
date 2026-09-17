<x-admin-layout>
    <div class="flex items-center justify-between mb-8">
        <h1 class="display-headline text-5xl">Testimonials</h1>
        <a href="{{ route('admin.testimonials.create') }}" class="btn-lime">
            + Add New
        </a>
    </div>

    @if($testimonials->isEmpty())
        <div class="bg-white p-12 text-center border-2 border-dashed border-ink/20">
            <p class="text-lg opacity-60">No testimonials yet. Add your first one.</p>
        </div>
    @else
        <div class="grid grid-cols-1 gap-4">
            @foreach($testimonials as $testimonial)
                <div class="bg-white p-6 shadow-sm flex items-start justify-between">
                    <div>
                        <p class="text-lg leading-relaxed mb-3">"{{ $testimonial->quote }}"</p>
                        <div class="flex items-center gap-3">
                            <p class="font-display uppercase tracking-widest">{{ $testimonial->client_name }}</p>
                            <span class="text-xs opacity-40">•</span>
                            <p class="text-sm opacity-60">{{ $testimonial->event_type }}</p>
                            <span class="text-xs opacity-40">•</span>
                            @if($testimonial->is_active)
                                <span class="text-xs bg-lime/30 px-2 py-1">Active</span>
                            @else
                                <span class="text-xs bg-ink/10 px-2 py-1">Hidden</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn-outline px-4 py-2 text-sm">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial) }}" 
                              onsubmit="return confirm('Delete this testimonial?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white font-display uppercase tracking-widest px-4 py-2 text-sm hover:bg-red-700 transition-colors">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-admin-layout>