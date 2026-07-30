<!-- ================= CTA ================= -->
<section class="py-8 sm:py-12 lg:py-16 bg-linear-to-r from-primary-600 to-primary-700  ">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-10 text-center lg:text-left">

            <div class="max-w-xl">

                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/15 text-primary-50 text-xs sm:text-sm font-medium">

                    <i class="mdi mdi-tooth-outline text-base sm:text-lg"></i>

                    Healthy Smiles Start Here

                </span>

                <h2 class="mt-3 text-2xl sm:text-3xl lg:text-[2rem] font-bold text-white leading-tight">

                    Ready to Take Care of Your Smile?

                </h2>

                <p class="mt-3 text-sm sm:text-base leading-7 text-primary-100">

                    Whether you need a routine checkup or treatment for a dental concern, we're here to help. Book your
                    appointment today and let us care for your smile.

                </p>

            </div>

            <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 w-full sm:w-auto">

                <button onclick="openAppointmentModal()"
                    class="w-full sm:w-auto bg-white text-primary-700 hover:bg-gray-100 px-6 py-3.5 rounded-xl font-semibold shadow-lg transition cursor-pointer">

                    Book Appointment

                </button>

                <a href="tel:{{ $data->phone }}"
                    class="w-full sm:w-auto border border-white/40 text-white hover:bg-white/10 px-6 py-3.5 rounded-xl font-semibold text-center transition">

                    Call Now

                </a>

            </div>

        </div>

    </div>

</section>
