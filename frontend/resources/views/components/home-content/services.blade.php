<!-- ================= SERVICES ================= -->
<section id="services" class="py-10 sm:py-16 lg:py-24 bg-white  ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto text-center">

            <span class="inline-flex items-center gap-2 text-primary-600 font-semibold text-xs sm:text-sm uppercase tracking-wide">

                <i class="mdi mdi-medical-bag text-base sm:text-lg"></i>

                {{ $data->services_badge ?? 'Our Services' }}

            </span>

            <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">

                {{ $data->services_title ?? 'Complete Dental Care Under One Roof' }}

            </h2>

            <p class="mt-3 sm:mt-4 text-sm sm:text-base lg:text-lg text-gray-600 leading-7 sm:leading-8">

                {{ $data->services_description }}

            </p>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 sm:gap-6 lg:gap-7 mt-8 sm:mt-10 lg:mt-14">

            @forelse($services as $service)

                <article class="group relative h-full bg-white border border-gray-100 rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-7 shadow-sm hover:border-primary-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">

                    <div class="absolute top-0 right-0 w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-primary-50 -translate-y-6 translate-x-6 group-hover:scale-125 transition duration-500"></div>

                    @if(filled($service->image))

                        <img
                            src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($service->image) }}"
                            alt="{{ $service->title }}"
                            class="relative w-full aspect-video rounded-xl object-cover mb-5"
                            loading="lazy">

                    @else

                        <div class="relative w-14 h-14 sm:w-16 sm:h-16 rounded-xl sm:rounded-2xl bg-primary-100 flex items-center justify-center">

                            <i class="mdi {{ $service->icon ?: 'mdi-tooth-outline' }} text-2xl sm:text-3xl text-primary-600"></i>

                        </div>

                    @endif

                    <h3 class="relative mt-5 text-lg sm:text-xl lg:text-2xl font-bold text-gray-900">

                        {{ $service->title }}

                    </h3>

                    <p class="relative mt-3 sm:mt-4 text-sm sm:text-base text-gray-600 leading-7">

                        {{ $service->description }}

                    </p>

                </article>

            @empty

                <p class="sm:col-span-2 xl:col-span-4 text-center text-sm sm:text-base text-gray-600">

                    Our services will be listed here soon.

                </p>

            @endforelse

        </div>

    </div>
</section>