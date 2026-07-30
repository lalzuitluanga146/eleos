<!-- ================= ABOUT ================= -->
@php
    $aboutImage = filled($data->about_image)
        ? \Illuminate\Support\Facades\Storage::disk('public')->url($data->about_image)
        : asset('images/profile.jpeg');
@endphp

<section id="about" class="relative py-10 sm:py-16 lg:py-24 bg-primary-50 overflow-hidden">

    <div class="absolute right-0 top-0 w-80 h-80 lg:w-96 lg:h-96 bg-primary-100 rounded-full blur-3xl opacity-40"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center">

            <!-- Image -->
            <div class="relative mx-auto w-full max-w-sm sm:max-w-md lg:max-w-none">

                <div class="absolute inset-0 bg-primary-200 rounded-3xl lg:rounded-4xl rotate-3"></div>

                <img id="doctor-secret" src="{{ $aboutImage }}" alt="{{ $data->doctor_name }}"
                    class="relative rounded-3xl lg:rounded-4xl shadow-2xl w-full aspect-4/5 object-cover">

                <div
                    class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 bg-white rounded-2xl shadow-lg p-4 sm:p-5 border border-gray-100">

                    <div class="flex items-center gap-3">

                        <div
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-primary-100 flex items-center justify-center">

                            <i class="mdi mdi-medal text-primary-600 text-xl sm:text-2xl"></i>

                        </div>

                        <div>

                            <p class="text-xl sm:text-2xl font-bold text-gray-900">
                                {{ $data->doctor_experience ?? '0' }}+
                            </p>

                            <p class="text-xs sm:text-sm text-gray-500">
                                Years Experience
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Content -->
            <div class=" ">

                <span
                    class="inline-flex items-center gap-2 text-primary-700 font-semibold text-xs sm:text-sm uppercase tracking-wide">

                    <i class="mdi mdi-tooth-outline text-base sm:text-lg"></i>

                    {{ $data->about_badge ?? 'Meet Your Dentist' }}

                </span>

                <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">

                    {{ $data->about_title }}

                </h2>

                <p class="mt-3 sm:mt-4 text-sm sm:text-base lg:text-lg leading-7 sm:leading-8 text-gray-600">

                    {{ $data->about_description }}

                </p>

                <!-- Qualifications -->
                <div class="mt-8 sm:mt-10 space-y-5">

                    <div class="flex items-start gap-4">

                        <div class="w-10 h-10 rounded-xl bg-primary-100 flex items-center justify-center shrink-0">

                            <i class="mdi mdi-school text-primary-600"></i>

                        </div>

                        <div>

                            <h4 class="text-sm sm:text-base font-semibold">

                                {{ $data->doctor_qualification ?? 'BDS' }}

                            </h4>

                            <p class="mt-2 text-sm sm:text-base text-gray-500 leading-7">

                                Qualified dental professional dedicated to comprehensive oral healthcare.

                            </p>

                        </div>

                    </div>

                    <div class="flex items-start gap-4">

                        <div class="w-10 h-10 rounded-xl bg-primary-100 flex items-center justify-center shrink-0">

                            <i class="mdi mdi-heart-outline text-primary-600"></i>

                        </div>

                        <div>

                            <h4 class="text-sm sm:text-base font-semibold">

                                Gentle Patient Care

                            </h4>

                            <p class="mt-2 text-sm sm:text-base text-gray-500 leading-7">

                                Every treatment is focused on comfort, communication and trust.

                            </p>

                        </div>

                    </div>

                    <div class="flex items-start gap-4">

                        <div class="w-10 h-10 rounded-xl bg-primary-100 flex items-center justify-center shrink-0">

                            <i class="mdi mdi-shield-check-outline text-primary-600"></i>

                        </div>

                        <div>

                            <h4 class="text-sm sm:text-base font-semibold">

                                Personalized Treatment

                            </h4>

                            <p class="mt-2 text-sm sm:text-base text-gray-500 leading-7">

                                Tailored dental solutions for every patient and every smile.

                            </p>

                        </div>

                    </div>

                </div>

                <!-- Feature Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8 sm:mt-10">

                    <div
                        class="group bg-white rounded-2xl p-5 border border-gray-100 shadow-sm text-center hover:border-primary-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                        <i class="mdi mdi-account-heart text-3xl text-primary-600"></i>

                        <h4 class="mt-3 text-sm sm:text-base font-semibold">

                            Friendly

                        </h4>

                        <p class="mt-2 text-sm sm:text-base text-gray-500 leading-7">

                            Caring treatment for every patient.

                        </p>

                    </div>

                    <div
                        class="group bg-white rounded-2xl p-5 border border-gray-100 shadow-sm text-center hover:border-primary-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                        <i class="mdi mdi-hospital-box-outline text-3xl text-primary-600"></i>

                        <h4 class="mt-3 text-sm sm:text-base font-semibold">

                            Modern

                        </h4>

                        <p class="mt-2 text-sm sm:text-base text-gray-500 leading-7">

                            Updated equipment and techniques.

                        </p>

                    </div>

                    <div
                        class="group bg-white rounded-2xl p-5 border border-gray-100 shadow-sm text-center hover:border-primary-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">

                        <i class="mdi mdi-emoticon-happy-outline text-3xl text-primary-600"></i>

                        <h4 class="mt-3 text-sm sm:text-base font-semibold">

                            Comfortable

                        </h4>

                        <p class="mt-2 text-sm sm:text-base text-gray-500 leading-7">

                            Relaxed environment for all ages.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<style>
    .snowflake {
        position: fixed;
        top: -40px;
        pointer-events: none;
        user-select: none;
        z-index: 9999;

        animation-name: snowfall;
        animation-timing-function: linear;
        animation-fill-mode: forwards;
    }

    @keyframes snowfall {
        0% {
            transform: translateX(0) translateY(0) rotate(0deg);
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        25% {
            transform: translateX(15px) translateY(25vh) rotate(90deg);
        }

        50% {
            transform: translateX(-15px) translateY(50vh) rotate(180deg);
        }

        75% {
            transform: translateX(20px) translateY(75vh) rotate(270deg);
        }

        100% {
            transform: translateX(-10px) translateY(110vh) rotate(360deg);
            opacity: 0;
        }
    }
</style>

<script>
    const secretImage = document.getElementById('doctor-secret');

    let clicks = 0;
    let resetTimer;

    secretImage.addEventListener('click', () => {

        clicks++;

        clearTimeout(resetTimer);

        resetTimer = setTimeout(() => {
            clicks = 0;
        }, 3000);

        if (clicks >= 5) {
            clicks = 0;
            startSnow();
        }
    });

    function startSnow() {

        // Different settings for each screen size
        let interval, flakesPerInterval;

        if (window.innerWidth < 640) {
            interval = 100;
            flakesPerInterval = 2;
        } else if (window.innerWidth < 1024) {
            interval = 70;
            flakesPerInterval = 3;
        } else {
            interval = 50;
            flakesPerInterval = 4;
        }

        const duration = 5000;

        const snowInterval = setInterval(() => {

            for (let i = 0; i < flakesPerInterval; i++) {

                const snow = document.createElement('div');

                snow.className = 'snowflake';
                snow.innerHTML = '❄';

                snow.style.left = Math.random() * window.innerWidth + 'px';
                snow.style.fontSize = (8 + Math.random() * 16) + 'px';
                snow.style.animationDuration = (4 + Math.random() * 4) + 's';
                snow.style.animationDelay = Math.random() * 0.8 + 's';
                snow.style.opacity = 0.5 + Math.random() * 0.5;

                document.body.appendChild(snow);

                setTimeout(() => snow.remove(), 6000);
            }

        }, interval);

        setTimeout(() => clearInterval(snowInterval), duration);
    }
</script>
