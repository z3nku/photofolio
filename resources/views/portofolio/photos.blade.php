<x-guest-layout>
    <section class="py-24 md:py-32">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center gap-4 mb-6">
                <span class="h-px w-12 bg-lime"></span>
                <span class="font-display uppercase tracking-[0.3em] text-lg">Portfolio</span>
            </div>
            <h1 class="display-headline text-7xl md:text-9xl mb-4">Photos</h1>
            <p class="text-lg opacity-60 max-w-xl mb-16">
                Gallery coming soon. For now, reach out and I'll send a custom selection of recent work.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @for($i = 1; $i <= 9; $i++)
                    <div class="bg-white p-2 shadow-sm">
                        <img src="https://picsum.photos/seed/photo{{ $i }}/600/600" 
                             alt="Portfolio placeholder" 
                             class="w-full aspect-square object-cover">
                    </div>
                @endfor
            </div>

            <div class="mt-16 text-center">
                <a href="/#contact" class="btn-lime">Start Your Story</a>
            </div>
        </div>
    </section>
</x-guest-layout>