<!-- SOBRE NOSOTROS -->
<section id="about" class="bg-white">
    <div class="flex flex-col items-center py-16">
        <div class="flex flex-col items-center w-[90%] md:w-1/2 max-w-[800px]">
            <div class="flex flex-col justify-center items-center gap-8">
                <div class="h-32 md:h-36">
                    <img src="{{ config('angy.images.logo') }}" alt="Logo" class="object-contain h-full w-full" />
                </div>

                <div class="flex flex-col gap-4">
                    <div class="text-neutralGray flex flex-col text-center font-semibold gap-4 leading-8">
                        <p>
                            {{ config('angy.about.about') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
