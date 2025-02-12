<section id="departments" class="flex items-center flex-col w-full bg-grayWhite">

    <div class="flex items-center flex-col w-full pt-16">
        <h2 class="font-extrabold text-3xl lg:text-5xl">Our services</h2>
    </div>

    @foreach (config('angy.departments') as $card)
        <div class="flex items-center flex-col w-full {{ $loop->odd ? 'bg-grayWhite' : 'bg-white' }}">
            <div class="w-full md:w-9/12 py-10 px-4 md:px-0 max-w-[1000px] flex flex-col items-center gap-6 {{ $loop->odd ? 'md:flex-row' : 'md:flex-row-reverse' }}">
                <div class="md:h-64 min-w-32 w-full h-48">
                    <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="object-cover h-full w-full rounded-2xl" />
                </div>
                <div class="flex flex-col gap-6">
                    <h2 class="font-bold text-2xl md:text-4xl text-primary text-center md:text-left">
                        {{ $card['title'] }}
                    </h2>
                    <p class="text-darkGray">
                        {{ $card['description'] }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</section>
