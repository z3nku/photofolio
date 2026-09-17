<x-guest-layout>
    <section class="py-24 md:py-32">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center gap-4 mb-6">
                <span class="h-px w-12 bg-lime"></span>
                <span class="font-display uppercase tracking-[0.3em] text-lg">Portfolio</span>
            </div>
            <h1 class="display-headline text-7xl md:text-9xl mb-4">Films</h1>
            <p class="text-lg opacity-60 max-w-xl mb-16">
                Film reel coming soon. Reach out and I'll share recent edits.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @for($i = 1; $i <= 4; $i++)
                    <div class="bg-white p-3 shadow-md">
                        <div class="aspect-video bg-ink flex items-center justify-center">
                            <span class="font-display uppercase tracking-widest text-cream opacity-40">
                                Film {{ $i }}
                            </span>
                        </div>
                        <p class="font-display uppercase tracking-widest mt-3 text-lg">Project Title {{ $i }}</p>
                    </div>
                @endfor
            </div>

            <div class="mt-16 text-center">
                <a href="/#contact" class="btn-lime">Start Your Story</a>
            </div>
        </div>
    </section>
</x-guest-layout>