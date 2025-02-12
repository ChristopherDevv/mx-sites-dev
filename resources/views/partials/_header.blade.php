<header>
    <!-- FIXED NAV -->
    <nav class="hidden md:flex flex-row justify-between items-center text-sm bg-white px-4 py-2 fixed z-50 w-full gap-2 lg:gap-4 shadow-md h-[90px]">
        <a href="#" class="h-10">
            <img src="{{ config('angy.images.logo') }}" alt="Logo" class="object-contain w-full h-full" />
        </a>
        <div class="flex flex-row grow justify-center max-w-[1000px]">
            <div class="flex flex-row grow justify-center font-normal text-center text-navGray items-center lg:text-base">
                <a href="#hero" class="cursor-pointer py-1 px-2 hover:decoration-primary hover:font-bold hover:underline hover:underline-offset-4 hover:decoration-2 transition-all ease-in leading-6">
                    Home
                </a>
                <a href="#about" class="cursor-pointer py-1 px-2 hover:decoration-primary hover:font-bold hover:underline hover:underline-offset-4 hover:decoration-2 transition-all ease-in leading-6">
                    About us
                </a>
                <a href="#departments" class="cursor-pointer py-1 px-2 hover:decoration-primary hover:font-bold hover:underline hover:underline-offset-4 hover:decoration-2 transition-all ease-in leading-6">
                    Services
                </a>
                <a href="#reviews" class="cursor-pointer py-1 px-2 hover:decoration-primary hover:font-bold hover:underline hover:underline-offset-4 hover:decoration-2 transition-all ease-in leading-6">
                    Reviews
                </a>
                <a href="#contact" class="cursor-pointer py-1 px-2 hover:decoration-primary hover:font-bold hover:underline hover:underline-offset-4 hover:decoration-2 transition-all ease-in leading-6">
                    Contact
                </a>
            </div>
        </div>
        <div class="min-w-[125px]">
            <button type="button" class="link-evant cursor-pointer lg:min-w-[170px] text-white py-2 px-2 lg:px-4 text-lg flex gap-2 items-center sm:text-xs lg:text-base w-full transition-all ease-in hover:bg-secondary focus:ring-4 focus:bg-primary focus:ring-primary/50 active:ring-4 active:ring-secondary/50 active:bg-secondary disabled:bg-opacity-50 bg-primary rounded-full">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <a href="tel:+14694600925" class="text-nowrap font-semibold">{{ __('brand.cell-phone') }}</a>
            </button>
        </div>
    </nav>
    <!-- MOBILE NAV -->
    <nav x-data="{ open: false }" class="md:hidden fixed flex-row justify-between items-center text-sm bg-white z-50 w-full shadow-md top-0 flex px-4 py-2 h-[90px]">
        <div class="flex flex-row items-center justify-between text-sm w-full">
            <a href="#" class="h-10">
                <img src="./img/logos/logo-icon.png" class="object-contain h-full w-full" alt="Logo" />
            </a>
            <div class="flex items-center gap-2">
                <div class="flex items-center gap-2">
                    <button id="call-icon" class="link-evant text-lg text-white bg-primary py-1 px-4 cursor-pointer transition-all ease-in hover:bg-secondary focus:ring-2 focus:ring-primary focus:bg-primary active:ring-2 active:ring-secondary active:bg-secondary disabled:opacity-50 rounded-full">
                        <a href="tel:+14694600925">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </button>
                    <button id="bars" x-on:click="open = ! open" class="text-lg text-primary cursor-pointer transition-all ease-in p-1 hover:text-secondary focus:ring-2 focus:ring-primary focus:text-primary active:ring-2 active:ring-secondary active:text-secondary disabled:opacity-50 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div x-show="open" id="menu" class="flex flex-col grow justify-center absolute top-[90px] right-[0] shadow-lg">
                    <div class="flex flex-col grow justify-evenly font-medium text-darkGray text-center divide-y z-20 bg-white">
                        <a href="#hero" class="flex py-3 px-6 justify-center items-center self-stretch hover:bg-primary transition-all ease-in hover:bg-opacity-50">
                            Home
                        </a>
                        <a href="#about" class="flex py-3 px-6 justify-center items-center self-stretch hover:bg-primary transition-all ease-in hover:bg-opacity-50">
                            About us
                        </a>
                        <a href="#departments" class="flex py-3 px-6 justify-center items-center self-stretch hover:bg-primary transition-all ease-in hover:bg-opacity-50">
                            Services
                        </a>
                        <a href="#reviews" class="flex py-3 px-6 justify-center items-center self-stretch hover:bg-primary transition-all ease-in hover:bg-opacity-50">
                            Reviews
                        </a>
                        <a href="#contact" class="flex py-3 px-6 justify-center items-center self-stretch hover:bg-primary transition-all ease-in hover:bg-opacity-50">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
