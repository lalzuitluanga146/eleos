<header id="siteHeader"
    class="fixed inset-x-0 top-0 z-50 bg-white/50 backdrop-blur-lg overflow-hidden transition-all duration-300">

    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between h-18 px-5 lg:px-8">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-3">
                @if (filled($data->logo))
                    <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($data->logo) }}"
                        alt="{{ $data->clinic_name }}" class="w-11 h-11 rounded-full object-cover shadow-md">
                @else
                    <div
                        class="w-11 h-11 rounded-2xl bg-primary-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                        {{ mb_substr($data->clinic_name ?? 'E', 0, 1) }}
                    </div>
                @endif

                <div>
                    <p class="font-bold text-gray-900 leading-none">
                        {{ $data->clinic_name ?? 'Eleos Dental Clinic' }}
                    </p>

                    <p class="text-xs text-gray-500 mt-1">
                        {{ $data->clinic_tagline ?? 'Gentle Dental Care' }}
                    </p>
                </div>

            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center gap-8">

                <a href="/" class="text-gray-700 hover:text-primary-600 transition">
                    Home
                </a>

                <a href="#about" class="text-gray-700 hover:text-primary-600 transition">
                    About
                </a>

                <a href="#services" class="text-gray-700 hover:text-primary-600 transition">
                    Services
                </a>

                <a href="#faq" class="text-gray-700 hover:text-primary-600 transition">
                    FAQ
                </a>

                <a href="#contact" class="text-gray-700 hover:text-primary-600 transition">
                    Contact
                </a>

                <a href="#gallery" class="text-gray-700 hover:text-primary-600 transition">
                    Gallery
                </a>

            </nav>

            {{-- Desktop CTA --}}
            <div class="hidden lg:flex">

                <button onclick="openAppointmentModal()"
                    class="px-6 py-3 rounded-xl bg-primary-600 hover:bg-primary-700 text-white font-semibold shadow-md hover:shadow-lg cursor-pointer transition duration-300">

                    Book Appointment

                </button>

            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobileMenuButton"
                class="lg:hidden w-11 h-11 rounded-xl border border-gray-200 bg-white/50 backdrop-blur-lg flex items-center justify-center transition">

                {{-- Hamburger --}}
                <svg id="menuOpenIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />

                </svg>

                {{-- Close --}}
                <svg id="menuCloseIcon" xmlns="http://www.w3.org/2000/svg" class="hidden w-6 h-6 text-gray-700"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />

                </svg>

            </button>

        </div>

    </div>

    {{-- Mobile Menu --}}
<div id="mobileMenu" class="hidden lg:hidden border-t border-white/20">

    <div class="px-5 py-6 space-y-5">

        <a href="/" class="mobile-link block text-gray-700 hover:text-primary-600 transition">
            Home
        </a>

        <a href="#about" class="mobile-link block text-gray-700 hover:text-primary-600 transition">
            About
        </a>

        <a href="#services" class="mobile-link block text-gray-700 hover:text-primary-600 transition">
            Services
        </a>

        <a href="#faq" class="mobile-link block text-gray-700 hover:text-primary-600 transition">
            FAQ
        </a>

        <a href="#contact" class="mobile-link block text-gray-700 hover:text-primary-600 transition">
            Contact
        </a>

        <a href="#gallery" class="mobile-link block text-gray-700 hover:text-primary-600 transition">
            Gallery
        </a>

    </div>

</div>

</header>
