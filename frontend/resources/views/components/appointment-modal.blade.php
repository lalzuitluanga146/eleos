<div id="appointmentModal" onclick="closeAppointmentModal()"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 p-4">

    <div onclick="event.stopPropagation()"
        class="flex max-h-[92vh] w-full max-w-xl flex-col overflow-hidden rounded-2xl bg-white shadow-2xl">

        <!-- Header -->
        <div class="flex items-center justify-between border-b border-gray-100 px-6 py-5">

            <div class="flex items-center gap-4">

                <!-- Logo -->
                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary-50">

                    @if (filled($data->logo))
                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($data->logo) }}"
                            alt="{{ $data->clinic_name }}" class="w-11 h-11 rounded-full object-cover shadow-md">
                    @else
                        <div
                            class="w-11 h-11 rounded-2xl bg-primary-600 flex items-center justify-center text-white font-bold text-lg shadow-md">
                            {{ mb_substr($data->clinic_name ?? 'E', 0, 1) }}
                        </div>
                    @endif

                </div>

                <div>

                    <h2 class="text-xl font-semibold text-gray-900">
                        {{ $data->clinic_name ?? 'Eleos Dental Clinic' }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Request an Appointment
                    </p>

                </div>

            </div>

            <button onclick="closeAppointmentModal()" title="Close"
                class="flex h-10 w-10 items-center justify-center rounded-full text-gray-400 transition hover:bg-gray-100 hover:text-gray-600">

                <i class="mdi mdi-close"></i>

            </button>

        </div>

        <!-- Body -->
        <div class="space-y-6 overflow-y-auto px-6 py-4">

            <!-- Patient Information -->

            <div class="grid gap-4 sm:grid-cols-2">

                <div>

                    <label class="mb-2 block text-sm font-medium">
                        Full Name
                    </label>

                    <input type="text" placeholder="John Doe"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:ring-2 focus:ring-primary-100">

                </div>

                <div>

                    <label class="mb-2 block text-sm font-medium">
                        Mobile Number
                    </label>

                    <input type="text" placeholder="9876543210"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:ring-2 focus:ring-primary-100">

                </div>

            </div>

            <!-- Date -->

            <div>

                <label class="mb-3 block text-sm font-medium">
                    Select Date
                </label>

                <div class="grid grid-cols-3 gap-2 sm:grid-cols-5">

                    <button class="rounded-xl border border-primary-500 bg-primary-50 px-2 py-3 text-center">
                        <p class="text-xs text-gray-500">Mon</p>
                        <p class="font-semibold">21 Jul</p>
                    </button>

                    <button class="rounded-xl border border-gray-200 px-2 py-3 hover:border-primary-400 cursor-pointer">
                        <p class="text-xs text-gray-500">Tue</p>
                        <p class="font-semibold">22 Jul</p>
                    </button>

                    <button class="rounded-xl border border-gray-200 px-2 py-3 hover:border-primary-400 cursor-pointer">
                        <p class="text-xs text-gray-500">Wed</p>
                        <p class="font-semibold">23 Jul</p>
                    </button>

                    <button class="rounded-xl border border-gray-200 px-2 py-3 hover:border-primary-400 cursor-pointer">
                        <p class="text-xs text-gray-500">Thu</p>
                        <p class="font-semibold">24 Jul</p>
                    </button>

                    <button class="rounded-xl border border-gray-200 px-2 py-3 hover:border-primary-400 cursor-pointer">
                        <p class="text-xs text-gray-500">Fri</p>
                        <p class="font-semibold">25 Jul</p>
                    </button>

                </div>

            </div>

            <!-- Time -->

            <div>

                <label class="mb-3 block text-sm font-medium">
                    Available Time
                </label>

                <div class="grid grid-cols-3 gap-2 sm:grid-cols-4">
                    <!-- Selected -->
                    <button
                        class="rounded-lg border border-primary-600 bg-primary-600 py-2.5 text-sm font-medium text-white">
                        09:00
                    </button>

                    <!-- Available -->
                    <button
                        class="rounded-lg border border-gray-200 py-2.5 text-sm transition hover:border-primary-400 hover:bg-primary-50 cursor-pointer">
                        09:30
                    </button>

                    <!-- Unavailable -->
                    <button disabled
                        class="cursor-not-allowed rounded-lg border border-gray-200 bg-gray-100 py-2.5 text-sm text-gray-400 line-through opacity-70">
                        10:00
                    </button>

                    <!-- Unavailable -->
                    <button disabled
                        class="cursor-not-allowed rounded-lg border border-gray-200 bg-gray-100 py-2.5 text-sm text-gray-400 line-through opacity-70">
                        10:30
                    </button>

                    <button
                        class="rounded-lg border border-gray-200 py-2.5 text-sm transition hover:border-primary-400 hover:bg-primary-50 cursor-pointer">
                        11:00
                    </button>

                    <button
                        class="rounded-lg border border-gray-200 py-2.5 text-sm transition hover:border-primary-400 hover:bg-primary-50 cursor-pointer">
                        11:30
                    </button>

                    <button
                        class="rounded-lg border border-gray-200 py-2.5 text-sm transition hover:border-primary-400 hover:bg-primary-50 cursor-pointer">
                        02:00
                    </button>

                    <button
                        class="rounded-lg border border-gray-200 py-2.5 text-sm transition hover:border-primary-400 hover:bg-primary-50 cursor-pointer">
                        02:30
                    </button>

                </div>

            </div>

            <!-- Reason -->

            <div>

                <label class="mb-2 block text-sm font-medium">
                    Reason for Visit
                    <span class="text-gray-400">(Optional)</span>
                </label>

                <textarea rows="3" placeholder="Describe your concern..."
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-primary-500 focus:ring-2 focus:ring-primary-100"></textarea>

            </div>

            <div class="rounded-lg bg-blue-50 border border-blue-200 p-2">
                <p class="text-xs sm:text-sm text-blue-800 font-medium">
                    <i class="mdi mdi-information-outline mr-2"></i>
                    We will contact you shortly to confirm your appointment request.
                </p>
            </div>
        </div>


        <!-- Footer -->

        <div class="flex justify-between border-t border-gray-100 bg-white px-6 py-4">

            <a href="{{ $data->whatsapp ? 'https://wa.me/' . preg_replace('/\D+/', '', $data->whatsapp) : '#' }}"
                target="_blank"
                class="rounded-xl border border-green-500 bg-green-500 px-4 py-2 text-sm font-semibold text-white transition duration-200 hover:bg-green-600 hover:shadow-md">
                <i class="mdi mdi-whatsapp"></i>
                Chat Now

            </a>
            <div class="flex gap-2">

                <button onclick="closeAppointmentModal()"
                    class="rounded-xl border border-gray-300 px-4 py-2 text-sm font-medium hover:bg-gray-50 cursor-pointer">

                    Cancel

                </button>

                <button onclick="closeAppointmentModal()"
                    class="rounded-xl bg-primary-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-primary-700 cursor-pointer">

                    Submit

                </button>
            </div>

        </div>

    </div>

</div>
