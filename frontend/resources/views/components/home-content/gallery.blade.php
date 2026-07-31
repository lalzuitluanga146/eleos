<!-- ================= GALLERY ================= -->
<section id="gallery" class="py-10 sm:py-16 lg:py-24 bg-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto text-center  ">

            <span
                class="inline-flex items-center gap-2 text-primary-600 font-semibold text-xs sm:text-sm uppercase tracking-wide">

                <i class="mdi mdi-image-outline text-base sm:text-lg"></i>

                {{ $data->gallery_badge ?? 'Our Clinic' }}

            </span>

            <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">

                {{ $data->gallery_title ?? 'A Modern & Comfortable Environment' }}

            </h2>

            <p class="mt-3 sm:mt-4 text-sm sm:text-base lg:text-lg text-gray-600 leading-7 sm:leading-8">

                {{ $data->gallery_description }}

            </p>

        </div>
        @if ($galleries->isNotEmpty())
            <div class="mt-8 sm:mt-10 lg:mt-14 columns-1 sm:columns-2 lg:columns-3 gap-5">
                @foreach ($galleries as $gallery)
                    <figure class="group relative mb-5 break-inside-avoid overflow-hidden rounded-3xl shadow">

                        <img src="{{ Storage::disk('public')->url($gallery->image) }}"
                            alt="{{ $gallery->alt_text ?: $gallery->title ?: 'Eleos Dental Clinic' }}" loading="lazy"
                            class="w-full h-auto object-cover transition duration-700 group-hover:scale-105">

                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent opacity-70 group-hover:opacity-100 transition">
                        </div>

                        @if (filled($gallery->title))
                            <figcaption class="absolute bottom-4 left-4 text-white font-medium">
                                {{ $gallery->title }}
                            </figcaption>
                        @endif

                    </figure>
                @endforeach
            </div>
        @else
            <div class="mt-8 sm:mt-10 lg:mt-14">
                <p class="text-center text-gray-600">
                    Clinic photos will be added here soon.
                </p>
            </div>
        @endif

    </div>

</section>
