<header class="absolute w-full z-50">
    <div class="mx-auto px-4 lg:px-20">
        <!-- Hidden checkbox = menu toggle (no JS needed) -->
        <input id="nav-toggle" type="checkbox" class="peer hidden" />

        <div class="grid lg:grid-cols-3 grid-cols-2 items-center py-3">
            <!-- Left: Logo -->
            <a href="{{route('home')}}" class="flex items-center">
                <img src="{{ asset('assets/images/img.png') }}" alt="Logo" class="h-24 md:h-28 w-auto" />
            </a>

            <!-- Center: Desktop Menu -->
            <nav class="hidden lg:flex justify-center">
                <ul class="grid grid-flow-col whitespace-nowrap gap-8 xl:gap-8 text-xl font-bold text-white">
                    <li><a href="{{route('home')}}" class="hover:opacity-70">Home</a></li>
                    <li><a href="#" class="hover:opacity-70">About Us</a></li>
                    <li><a href="#" class="hover:opacity-70">Services</a></li>
                    <li><a href="#" class="hover:opacity-70">Vision</a></li>
                    <li><a href="#" class="hover:opacity-70">All Projects</a></li>
                    <li><a href="#" class="hover:opacity-70">Clients</a></li>
                    <li><a href="#" class="hover:opacity-70">Contacts</a></li>
                </ul>
            </nav>

            <!-- Right: Call button (desktop) + Hamburger (mobile) -->
            <div class="flex items-center justify-end gap-3">
                <!-- Hamburger (mobile only) -->
                <label for="nav-toggle" class="lg:hidden inline-flex items-center justify-center w-14 h-14 rounded-full bg-white/40 hover:bg-white/60 transition cursor-pointer">
                    <span class="sr-only">Open menu</span>
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#0F548E" stroke-width="2" stroke-linecap="round">
                        <path d="M4 7h16M4 12h16M4 17h16"/>
                    </svg>
                </label>

                <!-- Call button -->
                <a href="tel:+0000000000" class="flex items-center justify-center w-14 h-14 rounded-full bg-[#0F548E] hover:bg-[#09406C] transition">
                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56" height="56" rx="28" fill="#0F548E"/>
                        <path d="M37.97 34.33C37.97 34.69 37.89 35.06 37.72 35.42C37.55 35.78 37.33 36.12 37.04 36.44C36.55 36.98 36.01 37.37 35.4 37.62C34.8 37.87 34.15 38 33.45 38C32.43 38 31.34 37.76 30.19 37.27C29.04 36.78 27.89 36.12 26.75 35.29C25.6 34.45 24.51 33.52 23.47 32.49C22.44 31.45 21.51 30.36 20.68 29.22C19.86 28.08 19.2 26.94 18.72 25.81C18.24 24.67 18 23.58 18 22.54C18 21.86 18.12 21.21 18.36 20.61C18.6 20 18.98 19.44 19.51 18.94C20.15 18.31 20.85 18 21.59 18C21.87 18 22.15 18.06 22.4 18.18C22.66 18.3 22.89 18.48 23.07 18.74L25.39 22.01C25.57 22.26 25.7 22.49 25.79 22.71C25.88 22.92 25.93 23.13 25.93 23.32C25.93 23.56 25.86 23.8 25.72 24.03C25.59 24.26 25.4 24.5 25.16 24.74L24.4 25.53C24.29 25.64 24.24 25.77 24.24 25.93C24.24 26.01 24.25 26.08 24.27 26.16C24.3 26.24 24.33 26.3 24.35 26.36C24.53 26.69 24.84 27.12 25.28 27.64C25.73 28.16 26.21 28.69 26.73 29.22C27.27 29.75 27.79 30.24 28.32 30.69C28.84 31.13 29.27 31.43 29.61 31.61C29.66 31.63 29.72 31.66 29.79 31.69C29.87 31.72 29.95 31.73 30.04 31.73C30.21 31.73 30.34 31.67 30.45 31.56L31.21 30.81C31.46 30.56 31.7 30.37 31.93 30.25C32.16 30.11 32.39 30.04 32.64 30.04C32.83 30.04 33.03 30.08 33.25 30.17C33.47 30.26 33.7 30.39 33.95 30.56L37.26 32.91C37.52 33.09 37.7 33.3 37.81 33.55C37.91 33.8 37.97 34.05 37.97 34.33Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10"/>
                    </svg>
                </a>
                <div>
                    <livewire:language-switcher />
                </div>
            </div>
        </div>

        <!-- Mobile menu: expands when the checkbox is checked -->
        <nav class="lg:hidden overflow-hidden max-h-0 peer-checked:max-h-96 transition-all duration-300">
            <ul class="mt-2 mb-3 flex flex-col gap-1 text-xl font-semibold text-black bg-white">
                <li><a href="{{route('home')}}" class="block px-3 py-2 rounded hover:bg-white/40">Home</a></li>
                <li><a href="#" class="block px-3 py-2 rounded hover:bg-white/40">About Us</a></li>
                <li><a href="#" class="block px-3 py-2 rounded hover:bg-white/40">Services</a></li>
                <li><a href="#" class="block px-3 py-2 rounded hover:bg-white/40">Vision</a></li>
                <li><a href="#" class="block px-3 py-2 rounded hover:bg-white/40">All Projects</a></li>
                <li><a href="#" class="block px-3 py-2 rounded hover:bg-white/40">Clients</a></li>
                <li><a href="#" class="block px-3 py-2 rounded hover:bg-white/40">Contacts</a></li>
            </ul>
        </nav>
    </div>
</header>
