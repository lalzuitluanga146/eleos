@extends('layouts.app')

@section('content')

<section class="py-18 lg:py-24">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto">

            <!-- Header -->
            <div class="text-center">

                <span
                    class="inline-flex items-center gap-2 text-primary-700 font-semibold text-xs sm:text-sm uppercase tracking-wide">

                    <i class="mdi mdi-file-document-outline text-base sm:text-base"></i>

                    Medical Disclaimer

                </span>

                <h1 class="mt-3 sm:mt-4 text-xl sm:text-2xl font-bold text-gray-900 leading-tight">

                    Medical Disclaimer

                </h1>

                <p class="mt-3 sm:mt-4 text-sm sm:text-base lg:text-base leading-6 sm:leading-8 text-gray-600">

                    The information provided on this website is intended for general
                    informational and educational purposes only. By using this website,
                    you acknowledge and agree to the terms outlined in this disclaimer.

                </p>

                <p class="mt-3 text-xs sm:text-sm text-gray-500">

                    Last updated: {{ now()->format('F j, Y') }}

                </p>

            </div>

            <!-- Content -->
            <div class="mt-8 sm:mt-10 space-y-8">

                <section>

                    <h2 class="text-base sm:text-xl font-semibold text-gray-900">

                        General Information Only

                    </h2>

                    <p class="mt-3 text-sm sm:text-base text-gray-600 leading-6">

                        The content on this website is provided to help visitors better
                        understand dental health, common dental conditions, and available
                        treatments. It is not intended to replace professional dental
                        advice, diagnosis, or treatment.

                    </p>

                </section>

                <section>

                    <h2 class="text-base sm:text-xl font-semibold text-gray-900">

                        No Dentist–Patient Relationship

                    </h2>

                    <p class="mt-3 text-sm sm:text-base text-gray-600 leading-6">

                        Viewing this website, sending an enquiry, or requesting an
                        appointment does not establish a dentist–patient relationship.
                        A professional relationship is formed only after you have been
                        examined and accepted as a patient by the clinic.

                    </p>

                </section>

                <section>

                    <h2 class="text-base sm:text-xl font-semibold text-gray-900">

                        Individual Results May Vary

                    </h2>

                    <p class="mt-3 text-sm sm:text-base text-gray-600 leading-6">

                        Every patient has unique oral health needs. Treatment options,
                        recommendations, recovery times, and outcomes may differ depending
                        on your individual condition, medical history, and clinical
                        examination.

                    </p>

                </section>

                <section>

                    <h2 class="text-base sm:text-xl font-semibold text-gray-900">

                        Emergency Situations

                    </h2>

                    <p class="mt-3 text-sm sm:text-base text-gray-600 leading-6">

                        This website is not intended for emergency dental or medical care.
                        If you are experiencing severe pain, significant swelling,
                        uncontrolled bleeding, facial trauma, or any medical emergency,
                        seek immediate care from the nearest emergency medical facility or
                        contact your local emergency services.

                    </p>

                </section>

                <section>

                    <h2 class="text-base sm:text-xl font-semibold text-gray-900">

                        Accuracy of Information

                    </h2>

                    <p class="mt-3 text-sm sm:text-base text-gray-600 leading-6">

                        We strive to keep the information on this website accurate and up
                        to date. However, medical knowledge and dental practices continue
                        to evolve, and we cannot guarantee that all information will always
                        be complete, current, or applicable to every individual.

                    </p>

                </section>

                <section>

                    <h2 class="text-base sm:text-xl font-semibold text-gray-900">

                        External Websites

                    </h2>

                    <p class="mt-3 text-sm sm:text-base text-gray-600 leading-6">

                        This website may include links to third-party websites for your
                        convenience. We do not control or endorse the content, accuracy,
                        or privacy practices of those websites and are not responsible for
                        their content.

                    </p>

                </section>

                <section>

                    <h2 class="text-base sm:text-xl font-semibold text-gray-900">

                        Limitation of Liability

                    </h2>

                    <p class="mt-3 text-sm sm:text-base text-gray-600 leading-6">

                        While reasonable efforts are made to provide reliable information,
                        the clinic and its staff are not liable for any loss, injury, or
                        damage arising from the use of this website or reliance on the
                        information it contains.

                    </p>

                </section>

                <!-- Contact Card -->
                <section
                    class="bg-primary-50 rounded-2xl border border-primary-100 p-5 sm:p-6">

                    <h2 class="text-base sm:text-xl font-semibold text-gray-900">

                        Contact Us

                    </h2>

                    <p class="mt-3 text-sm sm:text-base text-gray-600 leading-6">

                        If you have questions about the information provided on this
                        website or need advice regarding your oral health, please contact
                        our clinic to schedule a consultation with the dentist.

                    </p>

                </section>

            </div>

        </div>

    </div>

</section>

@endsection