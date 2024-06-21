<header class="bg-gray-100/50 dark:bg-gray-900/80 w-full fixed backdrop-blur inset-x-0 top-0 min-h-[60px]  items-center flex shadow shadow-primary-500/20 z-50">
    <div class="wrapper">
        <div class="flex justify-end items-center">
            <div class="flex items-center">
                <a class="font-druk text-5xl text-transparent bg-gradient-to-b from-primary-500 to-primary-600/50 bg-clip-text" href="{{ route('home') }}">
                    {{ config('app.name') }}
                </a>
            </div>
            <div class="links mx-6">
                <x-nav-link class="h-full min-h-[60px] px-6" href="{{ route('home') }}">Home</x-nav-link>
                <x-nav-link class="h-full min-h-[60px] px-6" href="{{ route('home') }}">Tool</x-nav-link>
                <x-nav-link class="h-full min-h-[60px] px-6" href="{{ route('home') }}">Recommend</x-nav-link>
                <x-nav-link class="h-full min-h-[60px] px-6" href="{{ route('home') }}">Faq's</x-nav-link>
                <x-nav-link class="h-full min-h-[60px] px-6" href="{{ route('home') }}">Contact Us</x-nav-link>
            </div>

            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</header>
