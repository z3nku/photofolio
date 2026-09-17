<x-admin-layout>
    <div class="flex items-center justify-between mb-8">
        <h1 class="display-headline text-5xl">Bookings</h1>
    </div>

    @if($bookings->isEmpty())
        <div class="bg-white p-12 text-center border-2 border-dashed border-ink/20">
            <p class="text-lg opacity-60">No booking requests yet.</p>
        </div>
    @else
        <div class="grid grid-cols-1 gap-4">
            @foreach($bookings as $booking)
                <a href="{{ route('admin.bookings.show', $booking) }}" 
                   class="bg-white p-6 shadow-sm flex items-start justify-between hover:shadow-md transition-shadow {{ !$booking->is_read ? 'border-l-4 border-lime' : '' }}">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <p class="font-display uppercase tracking-widest text-xl">{{ $booking->name }}</p>
                            @if(!$booking->is_read)
                                <span class="text-xs bg-lime px-2 py-1 font-display uppercase tracking-wider">New</span>
                            @endif
                        </div>
                        <p class="text-sm opacity-60">{{ $booking->email }} • {{ $booking->event_type }}</p>
                        <p class="text-sm mt-2 opacity-80">{{ Str::limit($booking->message, 100) }}</p>
                    </div>
                    <p class="text-xs opacity-40 whitespace-nowrap">{{ $booking->created_at->diffForHumans() }}</p>
                </a>
            @endforeach
        </div>
    @endif
</x-admin-layout>