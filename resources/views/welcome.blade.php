<x-guest-layout>
    
    {{-- HERO SECTION --}}
    <section class="relative min-h-screen flex items-center">
        
        {{-- Hero Image (full bleed background) --}}
        {{-- TODO: Replace 'https://picsum.photos/1920/1080' with actual hero image --}}
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://picsum.photos/1920/1080');">
            {{-- Dark overlay for text readability --}}
            <div class="absolute inset-0 bg-ink/40"></div>
        </div>

        {{-- Hero Content --}}
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 text-center">
            
            {{-- Eyebrow text --}}
            <p class="text-cream font-display uppercase tracking-[0.5em] text-xl mb-4">
                Photo + Film
            </p>

            {{-- Main headline --}}
            <h1 class="display-headline text-cream text-6xl md:text-8xl lg:text-9xl max-w-4xl mx-auto">
                Stories Worth Telling
            </h1>

            {{-- Subheadline --}}
            <p class="text-cream/80 text-lg md:text-xl max-w-2xl mx-auto mt-6 font-sans">
                Capturing the moments that matter — from the big day to the small glances in between.
            </p>

            {{-- CTA Button --}}
            <a href="#contact" class="btn-lime mt-10">
                Start Your Story
            </a>
        </div>
    </section>

        {{-- PORTFOLIO GATEWAY --}}
    <section id="work" class="py-24 md:py-32">
        <div class="max-w-6xl mx-auto px-6">
            
            {{-- Section Label --}}
            <div class="flex items-center gap-4 mb-12">
                <span class="h-px w-12 bg-lime"></span>
                <span class="font-display uppercase tracking-[0.3em] text-lg">Explore Our Work</span>
            </div>

            {{-- Two Cards Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                
                {{-- Photos Card --}}
                <a href="{{  route('portofolio.photos') }}" class="group block">
                    <div class="bg-white p-3 shadow-lg transform transition-transform duration-300 group-hover:-rotate-1 group-hover:scale-[1.02]">
                        {{-- TODO: Replace with actual photo --}}
                        <img 
                            src="https://picsum.photos/800/600" 
                            alt="Photography portfolio"
                            class="w-full h-72 md:h-96 object-cover"
                        >
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <h3 class="display-headline text-4xl md:text-5xl group-hover:text-gold transition-colors">
                            Photos
                        </h3>
                        <span class="font-display uppercase tracking-widest text-lg group-hover:translate-x-2 transition-transform">
                            →
                        </span>
                    </div>
                </a>

                {{-- Films Card --}}
                <a href="{{  route('portofolio.films') }}" class="group block">
                    <div class="bg-white p-3 shadow-lg transform transition-transform duration-300 group-hover:rotate-1 group-hover:scale-[1.02]">
                        {{-- TODO: Replace with actual film still --}}
                        <img 
                            src="https://picsum.photos/800/600" 
                            alt="Film portfolio"
                            class="w-full h-72 md:h-96 object-cover"
                        >
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <h3 class="display-headline text-4xl md:text-5xl group-hover:text-gold transition-colors">
                            Films
                        </h3>
                        <span class="font-display uppercase tracking-widest text-lg group-hover:translate-x-2 transition-transform">
                            →
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>

        {{-- STATS STRIP --}}
    <section class="bg-ink text-cream py-16">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                
                {{-- TODO: Replace with real numbers --}}
                <div>
                    <p class="display-headline text-6xl md:text-7xl text-lime">250+</p>
                    <p class="font-display uppercase tracking-[0.3em] mt-2 text-cream/60">Events Shot</p>
                </div>

                <div>
                    <p class="display-headline text-6xl md:text-7xl text-lime">7</p>
                    <p class="font-display uppercase tracking-[0.3em] mt-2 text-cream/60">Years Shooting</p>
                </div>

                <div>
                    <p class="display-headline text-6xl md:text-7xl text-lime">100%</p>
                    <p class="font-display uppercase tracking-[0.3em] mt-2 text-cream/60">Happy Clients</p>
                </div>
            </div>
        </div>
    </section>

        {{-- ABOUT SNIPPET --}}
    <section id="about" class="py-24 md:py-32">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20 items-center">
                
                {{-- Headshot --}}
                <div class="bg-white p-3 shadow-lg transform -rotate-2 max-w-sm mx-auto md:mx-0">
                    {{-- TODO: Replace with actual headshot --}}
                    <img 
                        src="https://picsum.photos/600/700" 
                        alt="Photographer portrait"
                        class="w-full h-96 md:h-[500px] object-cover"
                    >
                </div>

                {{-- Text --}}
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <span class="h-px w-12 bg-lime"></span>
                        <span class="font-display uppercase tracking-[0.3em] text-lg">Meet the Shooter</span>
                    </div>

                    {{-- TODO: Replace with actual photographer name --}}
                    <h2 class="display-headline text-5xl md:text-6xl mb-6">
                        Hi, I'm [Name]
                    </h2>

                    {{-- TODO: Replace with real bio --}}
                    <p class="text-lg leading-relaxed mb-4">
                        I've spent the last seven years documenting the moments that actually matter — the unposed laughs, the tearful glances, the chaos between the planned shots.
                    </p>
                    <p class="text-lg leading-relaxed">
                        No cookie-cutter shots. No forced smiles. Just your story, told the way it felt.
                    </p>
                </div>
            </div>
        </div>
    </section>

            {{-- TESTIMONIALS --}}
    <section id="testimonials" class="py-24 md:py-32 bg-bone/50">
        <div class="max-w-6xl mx-auto px-6">
            
            <div class="flex items-center gap-4 mb-12">
                <span class="h-px w-12 bg-lime"></span>
                <span class="font-display uppercase tracking-[0.3em] text-lg">They Said It</span>
            </div>

            @if($testimonials->isEmpty())
                <p class="text-center opacity-60">Testimonials coming soon.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($testimonials as $testimonial)
                        <div class="bg-white p-8 shadow-md">
                            <p class="text-lg leading-relaxed mb-6">
                                "{{ $testimonial->quote }}"
                            </p>
                            <div>
                                <p class="font-display uppercase tracking-widest text-lg">{{ $testimonial->client_name }}</p>
                                <p class="text-sm opacity-60">{{ $testimonial->event_type }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

        {{-- BOOKING FORM --}}
    <section id="contact" class="bg-lime py-24 md:py-32">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="display-headline text-6xl md:text-8xl text-ink mb-6">
                    Ready to make something real?
                </h2>
                <p class="text-ink/70 text-lg md:text-xl max-w-2xl mx-auto">
                    Tell me about your event. I'll reply within 24 hours.
                </p>
            </div>

            {{-- Success message --}}
            @if(session('booking_success'))
                <div class="bg-ink text-lime p-6 text-center mb-8 font-display uppercase tracking-widest text-xl">
                    {{ session('booking_success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('booking.store') }}" class="space-y-5 bg-cream p-8 shadow-lg">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block font-display uppercase tracking-widest mb-2">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime">
                        @error('name')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block font-display uppercase tracking-widest mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime">
                        @error('email')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block font-display uppercase tracking-widest mb-2">Phone (optional)</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                            class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime">
                    </div>

                    <div>
                        <label class="block font-display uppercase tracking-widest mb-2">Event Date</label>
                        <input type="date" name="event_date" value="{{ old('event_date') }}"
                            class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime">
                    </div>
                </div>

                <div>
                    <label class="block font-display uppercase tracking-widest mb-2">Event Type</label>
                    <select name="event_type" required
                        class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime">
                        <option value="">Select one...</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Engagement">Engagement</option>
                        <option value="Corporate">Corporate</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Other">Other</option>
                    </select>
                    @error('event_type')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block font-display uppercase tracking-widest mb-2">Tell me about your event</label>
                    <textarea name="message" rows="5" required
                        class="w-full bg-white border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime">{{ old('message') }}</textarea>
                    @error('message')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
                </div>

                <button type="submit" class="btn-outline bg-ink text-lime border-ink hover:bg-transparent hover:text-ink w-full">
                    Start Your Story
                </button>
            </form>
        </div>
    </section>

</x-guest-layout>