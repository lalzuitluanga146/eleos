<!-- ================= CONTACT ================= -->
<section id="contact" class="py-10 sm:py-16 lg:py-24 bg-primary-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="max-w-3xl mx-auto text-center  ">

            <span
                class="inline-flex items-center gap-2 text-primary-600 font-semibold text-xs sm:text-sm uppercase tracking-wide">

                <i class="mdi mdi-map-marker-outline text-base sm:text-lg"></i>

                Contact Us

            </span>

            <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">

                We'd Love to Hear From You

            </h2>

            <p class="mt-3 sm:mt-4 text-sm sm:text-base lg:text-lg text-gray-600 leading-7 sm:leading-8">

                Have questions or would like to schedule an appointment?
                Reach out to us through any of the options below.

            </p>

        </div>

        <div class="grid lg:grid-cols-5 gap-6 lg:gap-10 mt-8 sm:mt-10 lg:mt-14">

            <!-- Contact Card -->
            <div class="lg:col-span-2">

                <div
                    class="bg-white rounded-3xl lg:rounded-4xl p-5 sm:p-6 lg:p-8 shadow-lg border border-gray-100 h-full">

                    <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900">

                        Get in Touch

                    </h3>

                    <p class="mt-3 sm:mt-4 text-sm sm:text-base text-gray-600 leading-7">

                        We're happy to answer your questions and help you book
                        your next appointment.

                    </p>

                    <div class="mt-8 sm:mt-10 space-y-6 sm:space-y-8">

                        <!-- Address -->
                        <div class="flex gap-4">

                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 flex items-center justify-center shrink-0">

                                <i class="mdi mdi-map-marker text-xl sm:text-2xl text-primary-600"></i>

                            </div>

                            <div>

                                <h4 class="text-sm sm:text-base font-semibold">

                                    Address

                                </h4>

                                <p class="mt-2 text-sm sm:text-base text-gray-600 leading-6 sm:leading-7">

                                    {{ $data->address ?? 'Clinic address' }}

                                </p>

                            </div>

                        </div>

                        <!-- Phone -->
                        <div class="flex gap-4">

                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 flex items-center justify-center shrink-0">

                                <i class="mdi mdi-phone text-xl sm:text-2xl text-primary-600"></i>

                            </div>

                            <div>

                                <h4 class="text-sm sm:text-base font-semibold">

                                    Phone

                                </h4>

                                <a
                                    href="tel:+91{{ preg_replace('/\D+/', '', (string) ($data->phone ?? '')) }}"
                                    class="mt-2 block text-sm sm:text-base text-primary-600 hover:text-primary-700">

                                    {{ $data->phone ?? 'Phone number unavailable' }}

                                </a>

                            </div>

                        </div>

                        <!-- WhatsApp -->
                        <div class="flex gap-4">

                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-green-100 flex items-center justify-center shrink-0">

                                <i class="mdi mdi-whatsapp text-xl sm:text-2xl text-green-600"></i>

                            </div>

                            <div>

                                <h4 class="text-sm sm:text-base font-semibold">

                                    WhatsApp

                                </h4>

                                <a
                                    href="{{ $data->whatsapp ? 'https://wa.me/'.preg_replace('/\D+/', '', $data->whatsapp) : '#' }}"
                                    target="_blank"
                                    class="mt-2 block text-sm sm:text-base text-green-600 hover:text-green-700">

                                    Chat with Us

                                </a>

                            </div>

                        </div>

                        <!-- Hours -->
                        <div class="flex gap-4">

                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 flex items-center justify-center shrink-0">

                                <i class="mdi mdi-clock-outline text-xl sm:text-2xl text-primary-600"></i>

                            </div>

                            <div>

                                <h4 class="text-sm sm:text-base font-semibold">

                                    Opening Hours

                                </h4>

                                <p class="mt-2 text-xs sm:text-sm lg:text-base leading-6 sm:leading-8">

                                    @foreach($data->opening_hours ?? [] as $day => $hours)
                                        <span class="block text-gray-600">
                                            {{ $day }}:
                                            @if($hours)
                                                <span class="text-green-600">{{ $hours }}</span>
                                            @else
                                                <span class="text-red-600">Closed</span>
                                            @endif
                                        </span>
                                    @endforeach

                                </p>

                            </div>

                        </div>

                    </div>

                    <button
                        onclick="openAppointmentModal()"
                        class="w-full mt-8 sm:mt-10 bg-primary-600 hover:bg-primary-700 text-white rounded-xl py-3.5 font-semibold cursor-pointer transition">

                        Book Appointment

                    </button>

                </div>

            </div>

<!-- Google Map -->
<div class="lg:col-span-3">

    <div class="relative overflow-hidden rounded-3xl lg:rounded-4xl shadow-lg border border-gray-100 bg-white min-h-[500px] lg:min-h-[650px]">

        @if(filled($data->google_maps_url))

            <!-- Map -->
            <iframe
                src="{{ $data->google_maps_url }}"
                class="absolute inset-0 w-full h-full"
                style="border:2"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>



        @else

            <div class="absolute inset-0 flex items-center justify-center bg-primary-50 p-8 text-center">

                <div>

                    <i class="mdi mdi-map-marker-off text-5xl text-primary-300"></i>

                    <h3 class="mt-4 text-xl font-bold text-gray-900">

                        Google Maps not configured

                    </h3>

                    <p class="mt-2 text-gray-600">

                        Add a Google Maps Embed URL in Site Settings to display your clinic location.

                    </p>

                </div>

            </div>

        @endif

    </div>

</div>

        </div>

    </div>

</section>