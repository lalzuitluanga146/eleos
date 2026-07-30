<!-- ================= FOOTER ================= -->

<footer class="relative overflow-hidden bg-primary-900 text-white">

    <!-- Background Decoration -->

    <div class="absolute -top-40 right-0 w-120 h-120 rounded-full bg-primary-800/30 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top -->

        <div class="py-10 sm:py-16 grid lg:grid-cols-12 gap-10 lg:gap-12">

            <!-- Clinic -->

            <div class="lg:col-span-5">

                <a href="/" class="flex items-center gap-4">

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

                        <h3 class="text-xl sm:text-2xl font-bold">

                            {{ $data->clinic_name ?? 'Eleos Dental Clinic' }}

                        </h3>

                        <p class="text-sm sm:text-base text-primary-200">

                            {{ $data->clinic_tagline ?? 'Gentle Dental Care' }}

                        </p>

                    </div>

                </a>

                <p class="mt-6 sm:mt-8 text-sm sm:text-base text-primary-200 leading-7 max-w-md">
                     {{-- {{ $data-> clinic_description}} --}}

                    Providing compassionate, honest and modern dental care
                    for individuals and families in Aizawl. We are committed
                    to helping every patient achieve a healthy and confident smile.

                </p>

                <!-- Social -->

                <div class="flex gap-4 mt-6 sm:mt-8">
                    @if ($data->facebook_url)
                    <a href="{{ $data->facebook_url}}"
                        class="w-12 h-12 rounded-xl bg-white/10 hover:bg-primary-600 transition flex items-center justify-center">

                        <i class="mdi mdi-facebook text-xl"></i>

                    </a>
                    @endif
                    @if ($data->instagram_url)
                    <a href="{{ $data->instagram_url}}"
                        class="w-12 h-12 rounded-xl bg-white/10 hover:bg-primary-600 transition flex items-center justify-center">

                        <i class="mdi mdi-instagram text-xl"></i>

                    </a>
                    @endif
                     @if ($data->whatsapp)
                    <a href="{{ $data->whatsapp ? 'https://wa.me/'.preg_replace('/\D+/', '', $data->whatsapp) : '#' }}"
                        class="w-12 h-12 rounded-xl bg-white/10 hover:bg-primary-600 transition flex items-center justify-center">

                        <i class="mdi mdi-whatsapp text-xl"></i>

                    </a>
                    @endif

                    @if ($data->linkedin_url)
                    <a href="{{ $data->linkedin_url}}"
                        class="w-12 h-12 rounded-xl bg-white/10 hover:bg-primary-600 transition flex items-center justify-center">

                        <i class="mdi mdi-linkedin text-xl"></i>

                    </a>
                    @endif

                </div>

            </div>

            <!-- Quick Links -->

            <div class="lg:col-span-2">

                <h4 class="text-lg sm:text-xl font-bold">

                    Quick Links

                </h4>

                <ul class="mt-5 sm:mt-6 space-y-4">

                    <li><a href="/" class="text-sm sm:text-base text-primary-200 hover:text-white transition">Home</a></li>

                    <li><a href="#about" class="text-sm sm:text-base text-primary-200 hover:text-white transition">About</a></li>

                    <li><a href="#services" class="text-sm sm:text-base text-primary-200 hover:text-white transition">Services</a></li>

                    <li><a href="#gallery" class="text-sm sm:text-base text-primary-200 hover:text-white transition">Gallery</a></li>

                    <li><a href="#contact" class="text-sm sm:text-base text-primary-200 hover:text-white transition">Contact</a></li>

                </ul>

            </div>

            <!-- Services -->

            <div class="lg:col-span-2 hidden md:block">

                <h4 class="text-lg sm:text-xl font-bold">

                    Services

                </h4>

                <ul class="mt-5 sm:mt-6 space-y-4 text-sm sm:text-base text-primary-200">

                    @forelse($services->take(5) as $service)
                        <li>{{ $service->title }}</li>
                    @empty
                        <li>Services coming soon</li>
                    @endforelse

                </ul>

            </div>

            <!-- Contact -->

            <div class="lg:col-span-3">

                <h4 class="text-lg sm:text-xl font-bold">

                    Contact

                </h4>

                <div class="mt-5 sm:mt-6 space-y-5">

                    <div class="flex gap-3">

                        <i class="mdi mdi-map-marker text-primary-400 text-xl mt-1"></i>

                        <span class="text-sm sm:text-base text-primary-200 leading-7">

                            {{ $data->address ?? 'Clinic address' }}

                        </span>

                    </div>

                    <div class="flex gap-3">

                        <i class="mdi mdi-phone text-primary-400 text-xl"></i>

                        <a href="tel:+91{{ preg_replace('/\D+/', '', (string) ($data->phone ?? '')) }}"
                            class="text-sm sm:text-base text-primary-200 hover:text-white">

                            {{ $data->phone ?? 'Phone number unavailable' }}

                        </a>

                    </div>

                    <div class="flex gap-3">

                        <i class="mdi mdi-clock-outline text-primary-400 text-xl"></i>

                        <span class="text-sm sm:text-base text-primary-200 leading-7">

                            @foreach($data->opening_hours ?? [] as $day => $hours)
                                {{ $day }}: {{ $hours ?: 'Closed' }}@if(!$loop->last)<br>@endif
                            @endforeach

                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom -->

        <div class="border-t border-white/10 py-6 sm:py-8">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <p class="text-primary-300 text-sm text-center md:text-left">

                    © {{ date('Y') }} Eleos Dental Clinic. All rights reserved.

                </p>

                <div class="flex gap-6 text-sm">

                    <a href="/privacy-policy" class="text-primary-300 hover:text-white transition">

                        Privacy Policy

                    </a>

                    <a href="/medical-disclaimer" class="text-primary-300 hover:text-white transition">

                        Medical Disclaimer

                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>