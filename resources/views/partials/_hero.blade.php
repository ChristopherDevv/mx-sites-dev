<section id="hero" class="text-center flex flex-col md:flex-row items-center justify-center h-[650px] md:h-[600px] mt-[90px] md:mt-0 bg-hero-mobile bg-bottom bg-cover bg-no-repeat md:bg-white">
    <div class="hidden md:flex h-1/2 w-full md:h-full md:w-1/2 justify-center items-center pt-0 md:pt-[90px] max-h-[470px] md:max-h-full">
        <img src="{{ config('angy.images.banner-desktop') }}" alt="Hero Banner" class="object-cover h-full w-full" />
    </div>
    <div class="flex justify-center items-center w-full h-full md:w-1/2 md:pt-[90px] md:bg-secondary">
        <div class="bg-white/80 p-6 md:bg-white/0 flex flex-col justify-center items-center w-[70%] md:h-full rounded-3xl gap-8">
            <div class="w-full flex flex-col items-center gap-2">
                <h1 class="w-full text-[24px] md:text-[32px] leading-10 lg:leading-12 md:text-center font-semibold text-darkGray md:text-white">
                    {{ config('angy.hero.title') }}
                </h1>
                <p class="md:text-white text-xl">{{ config('angy.hero.subtitle') }}</p>
            </div>
            <div class="w-full flex flex-col items-center">
                <div class="flex flex-row items-center justify-center w-[90%] max-w-[342px]">
                    <a href="#contact" class="bg-primary text-white py-2 px-4 font-semibold text-lg flex gap-2 items-center justify-center w-full transition-all ease-in hover:bg-primary/50 focus:ring-4 focus:bg-primary focus:ring-primary/50 active:text-primary active:bg-opacity-0 active:ring-4 active:ring-primary/50 disabled:bg-opacity-50 rounded-full">
                        {{ config('angy.hero.contact-us') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
