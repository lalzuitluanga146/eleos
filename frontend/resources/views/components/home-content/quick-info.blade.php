<!-- ================= QUICK INFO ================= -->
<section class="relative -mt-4 lg:-mt-12 pb-4 z-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

            <!-- Address -->
            <div
                class="group h-full bg-white rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-sm border border-gray-100 hover:border-primary-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                <div
                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 text-primary-600 flex items-center justify-center">

                    <i class="mdi mdi-map-marker text-3xl"></i>

                </div>

                <h3 class="mt-3 sm:mt-4 text-lg sm:text-xl lg:text-2xl font-bold text-gray-900">

                    Visit Our Clinic

                </h3>

                <p class="mt-3 sm:mt-4 text-sm sm:text-base text-gray-600 leading-7">

                    {{ $data->address }}

                </p>

                <a href="#contact"
                    class="inline-flex items-center gap-2 mt-4 text-sm sm:text-base text-primary-600 font-medium hover:text-primary-700">

                    View Location

                    <i data-lucide="arrow-right" class="w-4 h-4"></i>

                </a>

            </div>

            <!-- Phone -->
            <div
                class="group h-full bg-white rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-sm border border-gray-100 hover:border-primary-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                <div
                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 text-primary-600 flex items-center justify-center">

                    <i class="mdi mdi-phone text-3xl"></i>

                </div>

                <h3 class="mt-3 sm:mt-4 text-lg sm:text-xl lg:text-2xl font-bold text-gray-900">

                    Call Us

                </h3>

                <p class="mt-3 sm:mt-4 text-sm sm:text-base text-gray-600 leading-7">

                    Appointments and enquiries during clinic hours.

                </p>

                <a href="tel:+91{{ preg_replace('/\D+/', '', (string) ($data->phone ?? '')) }}"
                    class="inline-block mt-4 text-sm sm:text-base text-primary-600 font-semibold hover:text-primary-700">

                    {{ $data->phone }}

                </a>

            </div>

            <!-- Hours -->
            <div
                class="group h-full bg-white rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-sm border border-gray-100 hover:border-primary-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                <div
                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 text-primary-600 flex items-center justify-center">

                    <i class="mdi mdi-clock-star-four-points text-3xl"></i>

                </div>

                <h3 class="mt-3 sm:mt-4 text-lg sm:text-xl lg:text-2xl font-bold text-gray-900">

                    Opening Hours

                </h3>

                <div class="mt-4 space-y-3 text-sm sm:text-base">

                    @foreach($data->opening_hours as $days => $hours)
                        <div class="flex justify-between gap-3">
                            <span class="text-gray-600">
                                {{ str_replace('-', ' – ', $days) }}
                            </span>

                            <span class="text-right font-medium {{ $hours ? 'text-green-600' : 'text-red-600' }}">
                                {{ $hours ?: 'Closed' }}
                            </span>
                        </div>
                    @endforeach

                </div>

            </div>

            <!-- Experience -->
            <div
                class="group h-full bg-primary-600 text-white rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                <div
                    class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-white/20 flex items-center justify-center">

                    <i class="mdi mdi-medal text-3xl"></i>

                </div>

                <div class="mt-5">

                    <span class="text-4xl font-bold">
                        {{ $data->doctor_experience ?? '0' }}+
                    </span>

                    <p class="text-primary-100 text-sm sm:text-base font-medium">
                        Years Experience
                    </p>

                </div>

                <p class="mt-4 text-sm sm:text-base text-primary-100 leading-7">

                    Providing compassionate dental treatment focused on patient comfort and long term oral health.

                </p>

            </div>

        </div>

    </div>

</section>