<!-- FAQ -->
<section id="faqs" class="flex justify-center bg-mediumGray">
    <div class="flex flex-col items-center w-[90%] md:w-9/12 py-16 text-white max-w-[1000px]">
        <h2 class="font-bold mb-10 text-2xl md:text-4xl">FAQs</h2>
        <div class="divide-y w-full">
            @foreach (config('angy.faqs') as $faq)
                <div x-data="{ open: false}">
                    <div x-on:click="open = !open" class="flex justify-between py-6">
                        <div class="font-extrabold">
                            {{ $faq['question'] }}
                        </div>
                        <button class="text-white text-2xl">
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>

                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                    </div>
                    <div x-show="open" class="pb-4 text-white divide-y">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
