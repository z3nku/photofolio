<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin — {{ config('app.name', 'Photographer') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cream text-ink font-sans min-h-screen">

    {{-- Admin Nav --}}
    <nav class="bg-ink text-cream">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <span class="font-display uppercase tracking-widest text-xl">Admin Panel</span>
            <div class="flex items-center gap-6">
                <a href="{{ route('admin.testimonials.index') }}" class="font-display uppercase tracking-widest hover:text-lime transition-colors">
                    Testimonials
                </a>
                <a href="/" class="font-display uppercase tracking-widest hover:text-lime transition-colors">
                    View Site
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="font-display uppercase tracking-widest hover:text-lime transition-colors">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Flash messages --}}
    @if(session('success'))
        <div class="bg-lime text-ink px-6 py-3 text-center">
            {{ session('success') }}
        </div>
    @endif

    {{-- Main content --}}
    <main class="max-w-6xl mx-auto px-6 py-12">
        {{ $slot }}
    </main>

</body>
</html>