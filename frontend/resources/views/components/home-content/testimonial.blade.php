<!-- ================= TESTIMONIALS ================= -->
<section class="relative py-10 sm:py-16 lg:py-24 bg-white overflow-hidden  ">

    <div class="absolute -right-32 top-0 w-80 h-80 lg:w-96 lg:h-96 bg-primary-50 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto text-center">

            <span class="inline-flex items-center gap-2 text-primary-600 font-semibold text-xs sm:text-sm uppercase tracking-wide">

                <i class="mdi mdi-star-circle-outline text-base sm:text-lg"></i>

                {{ $data->testimonials_badge ?? 'Patient Testimonials' }}

            </span>

            <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">

                {{ $data->testimonials_title ?? 'Smiles That Speak For Themselves' }}

            </h2>

            <p class="mt-3 sm:mt-4 text-sm sm:text-base lg:text-lg text-gray-600 leading-7 sm:leading-8">

                {{ $data->testimonials_description }}

            </p>

        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 sm:gap-6 lg:gap-8 mt-8 sm:mt-10 lg:mt-14">

            @forelse($testimonials as $testimonial)

                @php
                    $highlight = $loop->iteration % 3 === 2;
                    $initials = collect(preg_split('/\s+/', trim($testimonial->patient_name)))
                        ->filter()
                        ->map(fn (string $name): string => mb_substr($name, 0, 1))
                        ->take(2)
                        ->implode('');
                @endphp

                <article class="{{ $highlight ? 'bg-primary-600 text-white shadow-xl' : 'bg-gray-50 border border-gray-100 shadow-sm' }} rounded-2xl lg:rounded-3xl p-5 sm:p-6 lg:p-8 hover:border-primary-200 hover:shadow-lg transition-all duration-300">

                    <div class="flex items-center justify-between">

                        <div class="flex text-yellow-400" aria-label="Rating: {{ $testimonial->rating }} out of 5">

                            @for($star = 1; $star <= 5; $star++)
                                <i class="mdi {{ $star <= $testimonial->rating ? 'mdi-star' : 'mdi-star-outline' }} text-lg sm:text-xl"></i>
                            @endfor

                        </div>

                        <i class="mdi mdi-format-quote-close text-4xl sm:text-5xl {{ $highlight ? 'text-white/20' : 'text-primary-100' }}"></i>

                    </div>

                    <p class="mt-3 sm:mt-4 text-sm sm:text-base leading-7 {{ $highlight ? 'text-primary-100' : 'text-gray-600' }}">

                        {{ $testimonial->review }}

                    </p>

                    <div class="flex items-center gap-3 mt-6">

                        @if(filled($testimonial->patient_photo))

                            <img
                                src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($testimonial->patient_photo) }}"
                                alt="{{ $testimonial->patient_name }}"
                                class="w-12 h-12 sm:w-14 sm:h-14 rounded-full object-cover border border-primary-200">

                        @else

                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full {{ $highlight ? 'bg-white/20' : 'bg-primary-100 text-primary-600' }} flex items-center justify-center font-bold">

                                {{ $initials ?: 'P' }}

                            </div>

                        @endif

                        <h4 class="text-sm sm:text-base lg:text-lg font-semibold">

                            {{ $testimonial->patient_name }}

                        </h4>

                    </div>

                </article>

            @empty

                <p class="lg:col-span-3 text-center text-sm sm:text-base text-gray-600">

                    Patient testimonials will be shown here soon.

                </p>

            @endforelse

        </div>

    </div>

</section>