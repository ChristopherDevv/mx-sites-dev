<section id="location" class="flex justify-center">
    <div class="w-full md:w-9/12 flex flex-col md:flex-row justify-center py-16 gap-10">
        <h2 class="text-darkGray text-2xl text-center md:text-left md:text-5xl py-4 md:hidden font-bold">
            Visit us!
        </h2>

        <div class="md:w-1/2">
            <iframe src="{{__('brand.iframe')}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="md:w-1/2 text-darkGray flex-col justify-center items-left gap-12 hidden md:flex">
            <h2 class="text-darkGray text-2xl text-center md:text-left md:text-5xl font-bold">
                Visit us!
            </h2>
            <p class="text-lg">
                {{ __('brand.address')}}
            </p>
        </div>
        <div class="w-full text-lg py-4 px-4 md:hidden font-normal text-navGray">
            <p class="font-bold text-darkGray leading-8 break-all">
                {{ __('brand.address')}}
            </p>
            <p>Phone number: {{ __('brand.cell-phone') }}</p>
            <p>Email: {{ __('brand.email') }}</p>
        </div>
    </div>
</section>
