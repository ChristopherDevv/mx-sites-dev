<section id="reviews" class="flex items-center py-16 flex-col bg-primary">
    <div class="w-[90%] md:w-full flex flex-col items-center max-w-[1000px] text-white">
        <h2 class="font-bold text-center text-2xl md:text-5xl">
            Reviews
        </h2>
        <div class="testimonial-container py-16 flex flex-col gap-8 md:flex-row sm:flex-wrap items-center md:items-start w-full justify-evenly">
            @foreach ( config('angy.testimonials')  as $testimonial)
                <div class="w-full md:w-[30%] min-w-[280px] bg-white rounded-3xl p-6 shadow-xl">
                    <div class="flex flex-col items-center gap-4">
                        <div class="h-32 w-32 rounded-full hidden">
                            <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="object-cover" />
                        </div>
                        <div class="flex flex-col items-center text-center gap-4">
                            <p class="text-gray-500">
                                <strong>"</strong>{{ $testimonial['paragraph'] }}<strong>"</strong>
                            </p>
                            <h4 class="font-semibold text-mediumGray">{{ $testimonial['name'] }}</h4>
                            <div class="text-[#FFC130] text-2xl flex gap-2">
                                @for ($i = 0; $i < $testimonial['stars']; $i++)
                                    <p>&#9733;</p>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
