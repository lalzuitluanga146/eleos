@extends('layouts.app')

@section('content')

<section class="py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center">
            <span class="inline-flex items-center gap-2 text-primary-600 font-semibold text-sm uppercase tracking-wide">
                <i class="mdi mdi-shield-lock-outline text-lg"></i>
                Privacy Policy
            </span>

            <h1 class="mt-4 text-3xl sm:text-4xl font-bold text-gray-900">
                Privacy Policy
            </h1>

            <p class="mt-4 text-gray-600 text-base leading-8">
                We respect your privacy and are committed to protecting the personal
                information you share with us. This Privacy Policy explains how
                information is collected, used, and protected when you visit our website
                or contact our clinic.
            </p>

            <p class="mt-4 text-sm text-gray-500">
                Last updated: {{ now()->format('F j, Y') }}
            </p>
        </div>

        <div class="mt-12 space-y-10">

            <section>
                <h2 class="text-2xl font-bold text-gray-900">
                    Information We Collect
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    When you use our website or request an appointment, we may collect
                    information that you voluntarily provide, including:
                </p>

                <ul class="mt-4 list-disc pl-6 space-y-2 text-gray-600">
                    <li>Your name</li>
                    <li>Mobile or telephone number</li>
                    <li>Email address (if provided)</li>
                    <li>Your message or appointment request</li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-gray-900">
                    How We Use Your Information
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    The information you provide is used only for purposes related to our
                    dental services, including:
                </p>

                <ul class="mt-4 list-disc pl-6 space-y-2 text-gray-600">
                    <li>Responding to enquiries</li>
                    <li>Scheduling or confirming appointments</li>
                    <li>Communicating about your requested dental services</li>
                    <li>Improving our patient support</li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-gray-900">
                    Information Sharing
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    We do not sell, rent, or trade your personal information.
                    Your information is only shared when required by law or when
                    necessary to provide our dental services.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-gray-900">
                    Data Security
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    We take reasonable administrative and technical measures to protect
                    your personal information against unauthorized access, disclosure,
                    alteration, or loss. However, no method of electronic transmission or
                    storage can be guaranteed to be completely secure.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-gray-900">
                    Cookies
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    Our website may use essential cookies that help the website function
                    properly. These cookies do not collect sensitive personal information
                    and are not used for advertising purposes.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-gray-900">
                    Third-Party Links
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    Our website may contain links to third-party websites such as Google
                    Maps or social media platforms. We are not responsible for the
                    privacy practices or content of those external websites.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-gray-900">
                    Your Rights
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    You may request access to the personal information you have provided,
                    ask us to correct inaccurate information, or request that we delete
                    your information where applicable.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-bold text-gray-900">
                    Changes to This Privacy Policy
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    We may update this Privacy Policy from time to time to reflect
                    changes to our website or legal requirements. Any updates will be
                    posted on this page with the revised date.
                </p>
            </section>

            <section class="bg-primary-50 rounded-3xl p-6 sm:p-8">
                <h2 class="text-2xl font-bold text-gray-900">
                    Contact Us
                </h2>

                <p class="mt-4 text-gray-600 leading-8">
                    If you have any questions about this Privacy Policy or how your
                    personal information is handled, please contact us using the contact
                    information provided on our website.
                </p>
            </section>

        </div>
    </div>
</section>

@endsection