<!-- ================= FAQ ================= -->
<section id="faq" class="bg-white py-10 sm:py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-10 lg:mb-14">
            <span
                class="inline-flex items-center gap-2 text-primary-600 font-semibold text-xs sm:text-sm uppercase tracking-wide">
                <i class="mdi mdi-help-circle-outline text-base sm:text-lg"></i>
                {{ $data->faq_badge ?? 'Frequently Asked Questions' }}
            </span>

            <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900">
                {{ $data->faq_title ?? 'Have Questions?' }}
            </h2>

            <p
                class="mt-3 sm:mt-4 max-w-2xl mx-auto text-sm sm:text-base lg:text-lg text-gray-600 leading-7 sm:leading-8">
                {{ $data->faq_description }}
            </p>
        </div>

        <div class="divide-y divide-gray-200">
            @forelse($faqs as $faq)
                <div
                    class="faq-item rounded-xl transition-all duration-300 hover:bg-primary-50 hover:shadow-xs hover:-translate-y-0.5">

                    <button type="button"
                        class="faq-toggle group flex w-full items-center justify-between gap-3 cursor-pointer px-4 py-4 text-left">

                        <span
                            class="pr-3 sm:pr-6 text-sm sm:text-base lg:text-lg font-semibold text-primary-900 transition-colors duration-300 group-hover:text-primary-600">
                            {{ $faq->question }}
                        </span>

                        <i
                            class="faq-icon mdi {{ $loop->first ? 'mdi-minus' : 'mdi-plus' }} text-xl sm:text-2xl text-primary-600 transition-all duration-300 group-hover:scale-110 flex-shrink-0">
                        </i>
                    </button>

                    <div class="faq-content overflow-hidden transition-all duration-300"
                        style="{{ $loop->first ? '' : 'max-height:0;' }}">

                        <p
                            class="px-4 pb-2 pt-1 sm:pb-6 text-xs sm:text-sm lg:text-base text-gray-600 leading-6 sm:leading-8 ">
                            {{ $faq->answer }}
                        </p>

                    </div>

                </div>
            @empty
                <p class="py-4 sm:py-6 text-center text-sm sm:text-base text-gray-600">
                    Frequently asked questions will be added here soon.
                </p>
            @endforelse
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const items = document.querySelectorAll('.faq-item');

        items.forEach((item, index) => {
            const button = item.querySelector('.faq-toggle');
            const content = item.querySelector('.faq-content');
            const icon = item.querySelector('.faq-icon');

            if (index === 0) {
                content.style.maxHeight = content.scrollHeight + 'px';
            }

            button.addEventListener('click', () => {
                const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

                // Close all items
                items.forEach(other => {
                    other.querySelector('.faq-content').style.maxHeight = '0px';

                    const otherIcon = other.querySelector('.faq-icon');
                    otherIcon.classList.remove('mdi-minus');
                    otherIcon.classList.add('mdi-plus');
                });

                // Open clicked item if it wasn't already open
                if (!isOpen) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.classList.remove('mdi-plus');
                    icon.classList.add('mdi-minus');
                }
            });
        });
    });
</script>
