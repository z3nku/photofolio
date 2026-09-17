<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Photographer') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col">

    {{-- Navigation --}}
    <nav class="sticky top-0 z-50 bg-cream/80 backdrop-blur-sm border-b border-bone">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            
            {{-- Logo / Name — CHANGE THIS TO YOUR BRAND NAME --}}
            <a href="/" class="font-display text-2xl uppercase tracking-widest hover:text-lime transition-colors">
                {{-- TODO: Replace "STUDIO NAME" with actual photographer name --}}
                STUDIO NAME
            </a>

            {{-- Desktop nav links --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#work" class="font-display uppercase tracking-widest text-lg hover:text-lime transition-colors">Work</a>
                <a href="#about" class="font-display uppercase tracking-widest text-lg hover:text-lime transition-colors">About</a>
                <a href="#testimonials" class="font-display uppercase tracking-widest text-lg hover:text-lime transition-colors">Reviews</a>
                
                {{-- Main CTA always visible in nav --}}
                <a href="#contact" class="bg-ink text-cream font-display uppercase tracking-widest px-5 py-2 text-lg hover:bg-lime hover:text-ink transition-colors">
                    Book Now
                </a>
            </div>

            {{-- Mobile hamburger (simplified — just shows Book button on mobile) --}}
            <a href="#contact" class="md:hidden bg-ink text-cream font-display uppercase tracking-widest px-4 py-2 text-sm">
                Book
            </a>
        </div>
    </nav>

    {{-- Main content injected from child views --}}
    <main class="flex-1">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-ink text-cream py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                {{-- Brand --}}
                <div>
                    <p class="font-display text-2xl uppercase tracking-widest">Studio Name</p>
                    <p class="mt-2 text-sm opacity-60">Photo & Film</p>
                </div>

                {{-- Contact --}}
                <div>
                    <p class="font-display uppercase tracking-widest mb-2">Contact</p>
                    {{-- TODO: Replace with real email --}}
                    <a href="mailto:hello@studioname.com" class="text-sm hover:text-lime transition-colors block">hello@studioname.com</a>
                    {{-- TODO: Replace with real phone --}}
                    <a href="tel:+1234567890" class="text-sm hover:text-lime transition-colors block">+1 (234) 567-890</a>
                </div>

                {{-- Socials --}}
                <div>
                    <p class="font-display uppercase tracking-widest mb-2">Follow</p>
                    <div class="flex gap-4">
                        {{-- TODO: Replace # with real social links --}}
                        <a href="#" class="text-sm hover:text-lime transition-colors">Instagram</a>
                        <a href="#" class="text-sm hover:text-lime transition-colors">YouTube</a>
                        <a href="#" class="text-sm hover:text-lime transition-colors">TikTok</a>
                    </div>
                </div>
            <div class="flex items-center justify-between mt-8">
                <p class="text-xs opacity-40">© 2024 Studio Name. All rights reserved.</p>
                
                <a href="{{ route('login') }}" class="text-xs opacity-30 hover:opacity-100 hover:text-lime transition-all">
                    Admin
                </a>
            </div>
    </footer>

</body>
</html>