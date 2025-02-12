<footer>
    <section class="bg-darkGray flex flex-col justify-center items-center py-16">
        <div class="w-[90%] max-w-[1000px]">
            <div class="w-full flex flex-col md:flex-row md:items-center justify-evenly pb-16">
                <div class="flex flex-col items-center gap-6 md:max-w-[255px]">
                    <div class="justify-self-center self-center flex justify-center items-center h-20">
                        <img src="{{ config('angy.images.logo') }}" alt="Ícono del logo"
                            class="object-contain h-full w-full" />
                    </div>
                    <div class="text-white opacity-50 text-5xl flex flex-row justify-evenly mb-6 md:mb-0 gap-8">
                        <a href="" target="_blank"><img src="./img/icons/facebook-w.png" alt="Icon facebook" /></a>
                        <a href="tel:+14694600925"><img src="./img/icons/whatsapp-w.png" alt="Icon WhatsApp" /></a>
                        <a href="" target="_blank"><img src="./img/icons/instagram-w.png" alt="Icon Instagram" /></a>
                    </div>
                </div>
                <div class="flex flex-col justify-center gap-y-4 mb-4 md:mb-0 text-white">
                    <h3 class="font-extrabold">Sitemap</h3>
                    <ul class="grid gap-y-4 underline opacity-60">
                        <li class=""><a href="#hero">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#departments">Our services</a></li>
                    </ul>
                </div>
                <div class="text-white opacity-60 flex flex-col justify-center">
                    <ul class="grid gap-y-4 underline">
                        <li><a href="#reviews">Reviews</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="opacity-50 w-[90%]" />
        <span class="sm:text-center text-white opacity-60 pt-8 mb-8 w-[90%] md:w-3/5">{{ now()->year }}, Como en Kasa Corp. All rights reserved. Developed by <a href="https://www.oneparkfinancial.com/" target="_blank" class="font-bold">One Park Financial</a>.</span>
    </section>
</footer>
