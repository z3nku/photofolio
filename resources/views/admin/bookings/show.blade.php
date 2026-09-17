<x-admin-layout>
    <div class="max-w-3xl">
        <a href="{{ route('admin.bookings.index') }}" class="text-sm opacity-60 hover:opacity-100 hover:text-lime mb-6 inline-block">
            ← Back to bookings
        </a>

        <h1 class="display-headline text-5xl mb-8">{{ $booking->name }}</h1>

        <div class="bg-white p-8 shadow-sm space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="font-display uppercase tracking-widest text-sm opacity-60 mb-1">Email</p>
                    <a href="mailto:{{ $booking->email }}" class="text-lg hover:text-lime">{{ $booking->email }}</a>
                </div>
                <div>
                    <p class="font-display uppercase tracking-widest text-sm opacity-60 mb-1">Phone</p>
                    <p class="text-lg">{{ $booking->phone ?? '—' }}</p>
                </div>
                <div>
                    <p class="font-display uppercase tracking-widest text-sm opacity-60 mb-1">Event Type</p>
                    <p class="text-lg">{{ $booking->event_type }}</p>
                </div>
                <div>
                    <p class="font-display uppercase tracking-widest text-sm opacity-60 mb-1">Event Date</p>
                    <p class="text-lg">{{ $booking->event_date?->format('F j, Y') ?? '—' }}</p>
                </div>
            </div>

            <div>
                <p class="font-display uppercase tracking-widest text-sm opacity-60 mb-2">Message</p>
                <p class="text-lg leading-relaxed whitespace-pre-line">{{ $booking->message }}</p>
            </div>

            <div class="pt-6 border-t border-ink/10 flex items-center justify-between">
                <p class="text-xs opacity-40">Received {{ $booking->created_at->format('M j, Y \a\t g:i a') }}</p>
                <form method="POST" action="{{ route('admin.bookings.destroy', $booking) }}"
                      onsubmit="return confirm('Delete this booking?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white font-display uppercase tracking-widest px-4 py-2 text-sm hover:bg-red-700 transition-colors">
                        Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-6">
            <a href="mailto:{{ $booking->email }}?subject=Re: Your {{ $booking->event_type }} inquiry"
               class="btn-lime inline-block">
                Reply via Email
            </a>
        </div>
    </div>
</x-admin-layout>