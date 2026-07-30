<!-- ================= WHY CHOOSE US ================= -->
<section class="relative py-10 sm:py-16 lg:py-24 bg-primary-50 overflow-hidden  ">

    <!-- Background Decoration -->
    <div class="absolute left-0 top-0 w-80 h-80 lg:w-96 lg:h-96 bg-primary-100 rounded-full blur-3xl opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="max-w-3xl mx-auto text-center">

            <span
                class="inline-flex items-center gap-2 text-primary-600 font-semibold text-xs sm:text-sm uppercase tracking-wide">

                <i class="mdi mdi-shield-check-outline text-base sm:text-lg"></i>

                {{ $data->why_choose_badge ?? 'Why Choose Eleos Dental Clinic' }}

            </span>

            <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">

                {{ $data->why_choose_title ?? 'Dentistry Built Around Your Comfort' }}

            </h2>

            <p class="mt-3 sm:mt-4 text-sm sm:text-base lg:text-lg text-gray-600 leading-7 sm:leading-8">

                {{ $data->why_choose_description }}

            </p>

        </div>

        <div class="grid lg:grid-cols-5 gap-6 lg:gap-8 mt-8 sm:mt-10 lg:mt-14">

            <!-- Featured Card -->
            <div
                class="lg:col-span-2 rounded-3xl lg:rounded-4xl bg-linear-to-br from-primary-600 to-primary-700 text-white p-6 sm:p-8 lg:p-10 shadow-xl">

                <div
                    class="w-14 h-14 sm:w-16 sm:h-16 rounded-xl sm:rounded-2xl bg-white/20 flex items-center justify-center">

                    <i class="mdi mdi-heart-pulse text-3xl sm:text-4xl"></i>

                </div>

                <h3 class="mt-5 text-xl sm:text-2xl lg:text-3xl font-bold">

                    Patient First Care

                </h3>

                <p class="mt-3 sm:mt-4 text-sm sm:text-base leading-7 text-primary-100">

                    Every treatment begins with listening.
                    We explain your options clearly, answer your questions,
                    and help you make informed decisions without pressure.

                </p>

                <div class="mt-6 sm:mt-8 space-y-3">

                    <div class="flex items-start gap-3">

                        <i class="mdi mdi-check-circle text-lg mt-0.5"></i>

                        <span class="text-sm sm:text-base">Honest treatment recommendations</span>

                    </div>

                    <div class="flex items-start gap-3">

                        <i class="mdi mdi-check-circle text-lg mt-0.5"></i>

                        <span class="text-sm sm:text-base">Comfortable and gentle procedures</span>

                    </div>

                    <div class="flex items-start gap-3">

                        <i class="mdi mdi-check-circle text-lg mt-0.5"></i>

                        <span class="text-sm sm:text-base">Friendly support from consultation to recovery</span>

                    </div>

                </div>

            </div>

            <!-- Right Grid -->
            <div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">

                <!-- Card -->
                <div
                    class="h-full bg-white rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-sm border border-gray-100 hover:border-primary-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 flex items-center justify-center">

                        <i class="mdi mdi-tooth-outline text-2xl sm:text-3xl text-primary-600"></i>

                    </div>

                    <h4 class="mt-5 text-lg sm:text-xl lg:text-2xl font-bold">

                        Modern Dentistry

                    </h4>

                    <p class="mt-3 sm:mt-4 text-sm sm:text-base text-gray-600 leading-7">

                        We use up-to-date techniques and equipment to provide
                        accurate diagnosis and effective treatment.

                    </p>

                </div>

                <!-- Card -->
                <div
                    class="h-full bg-white rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-sm border border-gray-100 hover:border-primary-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 flex items-center justify-center">

                        <i class="mdi mdi-account-heart-outline text-2xl sm:text-3xl text-primary-600"></i>

                    </div>

                    <h4 class="mt-5 text-lg sm:text-xl lg:text-2xl font-bold">

                        Personalized Care

                    </h4>

                    <p class="mt-3 sm:mt-4 text-sm sm:text-base text-gray-600 leading-7">

                        Every treatment plan is tailored to your oral health,
                        lifestyle and long-term wellbeing.

                    </p>

                </div>

                <!-- Card -->
                <div
                    class="h-full bg-white rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-sm border border-gray-100 hover:border-primary-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 flex items-center justify-center">

                        <i class="mdi mdi-shield-check text-2xl sm:text-3xl text-primary-600"></i>

                    </div>

                    <h4 class="mt-5 text-lg sm:text-xl lg:text-2xl font-bold">

                        Safe & Hygienic

                    </h4>

                    <p class="mt-3 sm:mt-4 text-sm sm:text-base text-gray-600 leading-7">

                        We maintain strict sterilization and hygiene protocols
                        to ensure a safe clinical environment.

                    </p>

                </div>

                <!-- Card -->
                <div
                    class="h-full bg-white rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-sm border border-gray-100 hover:border-primary-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">

                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-primary-100 flex items-center justify-center">

                        <i class="mdi mdi-clock-check-outline text-2xl sm:text-3xl text-primary-600"></i>

                    </div>

                    <h4 class="mt-5 text-lg sm:text-xl lg:text-2xl font-bold">

                        Flexible Appointments

                    </h4>

                    <p class="mt-3 sm:mt-4 text-sm sm:text-base text-gray-600 leading-7">

                        Book appointments that fit your schedule with
                        minimal waiting time whenever possible.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
