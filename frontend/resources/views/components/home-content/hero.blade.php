<!-- ================= HERO ================= -->
@php
    $heroImage = filled($data->hero_image)
        ? \Illuminate\Support\Facades\Storage::disk('public')->url($data->hero_image)
        : asset('images/clinic.jpg');
@endphp

<section class="relative overflow-hidden bg-linear-to-b from-primary-50 via-white to-white">

    <!-- Background -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-primary-100 rounded-full blur-3xl opacity-60"></div>
    <div class="absolute top-20 -right-32 w-md h-112 bg-primary-50 rounded-full blur-3xl opacity-70"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-10 pt-16 sm:pb-16 lg:pt-24 lg:pb-24">

        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- LEFT -->
            <div>

                <!-- Badge -->
                <div class="hidden sm:inline-flex items-center gap-2 bg-white border border-primary-100 rounded-full px-4 py-2 shadow-sm  ">

                    <span class="w-2 h-2 rounded-full bg-primary-500"></span>

                    <span class="text-xs sm:text-sm font-medium text-primary-700">

                        {{ $data->hero_badge ?? 'Welcome to Eleos Dental Clinic' }}

                    </span>

                </div>

                @php
                    $words = preg_split('/\s+/', trim($data->hero_title));

                    $split = (int) ceil(count($words) * 0.5);

                    $first = implode(' ', array_slice($words, 0, $split));
                    $second = implode(' ', array_slice($words, $split));
                @endphp

                <!-- Heading -->
                <h1 class="mt-5 sm:mt-6 text-3xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight text-gray-900">

                    {{ $first }}<br>

                    @if ($second)

                        <span class="text-primary-600">

                            {{ $second }}

                        </span>

                    @endif

                </h1>

                <!-- Description -->
                <p class="mt-4 sm:mt-5 text-sm sm:text-base lg:text-lg leading-7 sm:leading-8 text-gray-600 max-w-xl">

                    {{ $data->hero_description }}

                </p>

                <!-- CTA -->
                <div class="mt-8 flex flex-col sm:flex-row gap-3 sm:gap-4">

                    <button
                        onclick="openAppointmentModal()"
                        class="bg-primary-600 cursor-pointer hover:bg-primary-700 text-white px-6 py-3.5 rounded-xl font-semibold shadow-lg hover:shadow-xl transition">

                        Book Appointment

                    </button>

                    <a
                        href="tel:{{ $data->phone }}"
                        class="border border-primary-200 hover:bg-primary-50 text-primary-700 px-6 py-3.5 rounded-xl font-semibold text-center transition">

                        Call Now

                    </a>

                </div>

                <!-- Mobile Image -->
                <div class="lg:hidden mt-10 max-w-md mx-auto">

                    <div class="relative">

                        <div class="absolute inset-0 bg-primary-100 rounded-3xl rotate-3"></div>

                        <img
                            src="{{ $heroImage }}"
                            alt="Eleos Dental Clinic"
                            class="relative rounded-3xl shadow-xl w-full object-cover aspect-4/4.5">

                    </div>

                </div>

                <!-- Statistics -->
                <div class="grid grid-cols-3 text-center gap-4 mt-10">

                    <div>

                        <h3 class="text-2xl sm:text-3xl font-bold text-primary-600">

                            {{ $data->happy_patient ?? '0' }}+

                        </h3>

                        <p class="mt-1 text-xs sm:text-sm text-gray-600">

                            Happy Patients

                        </p>

                    </div>

                    <div>

                        <h3 class="text-2xl sm:text-3xl font-bold text-primary-600">

                            {{ $data->doctor_experience ?? '0' }}+

                        </h3>

                        <p class="mt-1 text-xs sm:text-sm text-gray-600">

                            Years Experience

                        </p>

                    </div>

                    <div>

                        <h3 class="text-2xl sm:text-3xl font-bold text-primary-600">

                            {{ $data->patient_rating ?? '0' }}★

                        </h3>

                        <p class="mt-1 text-xs sm:text-sm text-gray-600">

                            Patient Rating

                        </p>

                    </div>

                </div>

            </div>

            <!-- Desktop Image -->
            <div class="relative hidden lg:block">

                <!-- Floating Card -->
                <div class="absolute -top-6 -left-6 w-40 bg-white rounded-2xl shadow-xl border border-gray-100 p-5 z-20">

                    <p class="text-3xl font-bold text-primary-600">

                        {{ $data->happy_patient ?? '0' }}+

                    </p>

                    <p class="mt-1 text-sm text-gray-600">

                        Happy Smiles

                    </p>

                </div>

                <!-- Floating Card -->
                <div class="absolute -bottom-6 -right-6 w-44 bg-white rounded-2xl shadow-xl border border-gray-100 p-5 z-20">

                    <p class="font-semibold">

                        Same Day Consultation

                    </p>

                    <p class="mt-2 text-sm text-gray-500">

                        Subject to availability

                    </p>

                </div>

                <div class="absolute inset-0 bg-primary-100 rounded-4xl rotate-3"></div>

                <img
                    src="{{ $heroImage }}"
                    alt="Eleos Dental Clinic"
                    class="relative rounded-4xl shadow-2xl w-full object-cover aspect-4/5">

            </div>

        </div>

    </div>

</section>