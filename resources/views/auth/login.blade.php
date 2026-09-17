<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-6 py-24">
        <div class="w-full max-w-md">
            
            {{-- Heading --}}
            <div class="text-center mb-10">
                <h1 class="display-headline text-6xl">
                    Admin Login
                </h1>
                <p class="text-ink/60 mt-2">
                    Manage your portfolio and bookings
                </p>
            </div>

            {{-- Session status (for password reset messages) --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            {{-- Login form --}}
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="block font-display uppercase tracking-widest text-lg mb-2">
                        Email
                    </label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus 
                        autocomplete="username"
                        class="w-full bg-transparent border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime transition-colors"
                        placeholder="admin@example.com"
                    >
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block font-display uppercase tracking-widest text-lg mb-2">
                        Password
                    </label>
                    <input 
                        id="password" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="current-password"
                        class="w-full bg-transparent border-2 border-ink px-4 py-3 focus:outline-none focus:border-lime transition-colors"
                        placeholder="••••••••"
                    >
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                {{-- Remember me --}}
                <div class="flex items-center gap-2">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        name="remember"
                        class="rounded border-ink bg-transparent focus:ring-lime"
                    >
                    <label for="remember_me" class="text-sm">
                        Remember me
                    </label>
                </div>

                {{-- Submit --}}
                <button type="submit" class="btn-lime w-full">
                    Log In
                </button>

                {{-- Back to site --}}
                <a href="/" class="block text-center text-sm opacity-60 hover:opacity-100 hover:text-lime transition-all">
                    ← Back to site
                </a>
            </form>
        </div>
    </div>
</x-guest-layout>