<header class="pb-4 relative z-10 w-full border-b-2 border-white">
    <nav class="">
        <div class="md:block hidden max-w-6xl mx-auto xl:px-0 lg:px-4 px-3 sm:pt-6">
            <div class="">
                <div class="grid grid-cols-12 items-center">
                    <div class="col-span-2 xl:col-span-3">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img loading="lazy" src="{{ asset('public/frontend') }}/img/logo-light.png" height="46" width="196" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-span-10 xl:col-span-9">
                        <ul class="flex flex-col sm:flex-row items-center justify-end gap-x-2 lg:gap-x-4 xl:gap-x-7">
                            <li class="relative group">
                                <div>
                                    <a href="{{ route('home') }}" class="text-[13px] lg:text-[16px] font-[600] tracking-[0.6px]">
                                        <span class="text-white hover:text-[#d3a971] uppercase">
                                            HOME
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="relative group">
                                <div>
                                    <a href="{{ route('about') }}" class="text-[13px] lg:text-[16px] font-[600] tracking-[0.6px]">
                                        <span class="text-white hover:text-[#d3a971] uppercase">
                                        About
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="relative group">
                                <div>
                                    <a href="{{ route('discover-menu') }}" class="text-[13px] lg:text-[16px] font-[600] tracking-[0.6px]">
                                        <span class="text-white hover:text-[#d3a971] uppercase">
                                        Menu
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="relative group">
                                <div>
                                    <a href="{{ route('gallery') }}" class="text-[13px] lg:text-[16px] font-[600] tracking-[0.6px]">
                                        <span class="text-white hover:text-[#d3a971] uppercase">
                                        Gallery
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="relative group">
                                <div>
                                    <a href="{{ route('blog') }}" class="text-[13px] lg:text-[16px] font-[600] tracking-[0.6px]">
                                        <span class="text-white hover:text-[#d3a971] uppercase">
                                        Blog
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="relative group">
                                <div>
                                    <a href="{{ route('shop') }}" class="text-[13px] lg:text-[16px] font-[600] tracking-[0.6px]">
                                        <span class="text-white hover:text-[#d3a971] uppercase">
                                        Shop
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="">
                                <a href="{{ route('reservation') }}" class="border-white border-2 min-w-[129px] h-[40px] leading-[35px] text-center block text-[13px] lg:text-[16px] font-[600] tracking-[0.6px]">
                                    <span class="text-white hover:text-[#d3a971] uppercase px-3">
                                        Reservation
                                    </span>
                                </a>
                            </li>
                            <li>
                                <!-- drawer init and toggle -->
                                <div class="text-center">
                                    <button class="text-white" type="button" data-drawer-target="drawer-right-example"
                                        data-drawer-show="drawer-right-example" data-drawer-placement="right"
                                        aria-controls="drawer-right-example">
                                        <svg fill="white" viewBox="0 0 20 20" class="w-10 h-10 pr-3">
                                            <path class="minus block text-white" fill="currentColor" fill-rule="evenodd"
                                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                                clip-rule="evenodd"></path>
                                            <path class="plus hidden text-white" fill="currentColor" fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- drawer component -->
                                <div id="drawer-right-example"
                                    class="flex flex-col justify-between fixed top-0 right-0 z-40 h-screen pt-[100px] px-[38px] pb-[40px] overflow-y-auto transition-transform translate-x-full bg-[#161616] w-[370px]"
                                    tabindex="-1" aria-labelledby="drawer-right-label">
                                    <button type="button" data-drawer-hide="drawer-right-example"
                                        aria-controls="drawer-right-example"
                                        class="text-white bg-transparent hover:text-[#d3a971] absolute top-[45px] right-[40px] inline-flex items-center">
                                        <svg class="w-6 h-6 ml-2" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close menu</span>
                                    </button>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="col-span-12">
                                            <img src="{{ asset('public/frontend') }}/img/footer-logo.png" alt="LOGO"
                                                class="mx-auto mb-6" />
                                            <div class="txt">
                                                <p
                                                    class="text-[15px] leading-[24px] mb-[15px] text-[#9b9b9b] text-center font-[500]">
                                                    El Royale was the first restaurant to open in Egypt,
                                                    the resturant was designed with the history in mind we
                                                    have created a soft industrial dining room.
                                                </p>
                                            </div>
                                            <div class="flex flex-wrap items-center justify-center gap-x-4">
                                                <i class="fa-brands fa-instagram text-white text-[15px]"></i>
                                                <i class="fa fa-tripadvisor text-white text-[15px]"></i>
                                                <i class="fa-brands fa-twitter text-white text-[15px]"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="email">
                                            <span class="text-[#9b9b9b] text-[14px] font-[14px]">Main Email:</span>
                                            <a href="mailto:;"
                                                class="text-[#9b9b9b] text-[14px] font-[14px] hover:text-[#d3a971]">
                                                Elroyale@7oroof.com
                                            </a>
                                        </div>
                                        <div class="phone">
                                            <span class="text-[#9b9b9b] text-[14px] font-[14px]">Phone:</span>
                                            <a href="tel:;"
                                                class="text-[#9b9b9b] text-[14px] font-[14px] hover:text-[#d3a971]">
                                                02 010123456789
                                            </a>
                                        </div>
                                        <div class="btn mt-3">
                                            <a href="javascript:;"
                                                class="bg-[#d3a971] text-white border-[#d3a971] border-2 block w-full text-center text-[14px] font-[700] rounded-[1px] leading-[48px] h-[50px] min-w-[170px] hover:bg-white hover:text-[#d3a971] hover:border-white duration-500 hover:duration-500">
                                                Make a Reservation
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="block md:hidden">
            <div class="block lg:hidden " x-data="{ open: false }">
                <div class="grid items-center grid-cols-12 sm:gap-5 gap-3 place-self-center sm:py-3 sm:pt-0 pt-3 ">
                    <div class="col-span-11">
                        <div class="md:col-span-3 col-span-12">
                            <div class="world-logo">
                                <img class="inline w-[250px] h-[45px]" src="{{ asset('public/frontend/logo.png') }}" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="flex flex-col">
                            <div class="flex flex-row items-center justify-center">
                                <button data-collapse-toggle="mobile-menu" type="button"
                                    class="navbtn inline-flex justify-center items-center ml-3 rounded-lg lg:hidden focus:outline-none focus:ring-2 focus:ring-blue-300"
                                    aria-controls="mobile-menu-2" aria-expanded="false">
                                    <svg fill="#131643" viewBox="0 0 20 20" class="w-10 h-10 pr-3">
                                        <path class="minus block" fill-rule="evenodd"
                                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                        <path class="plus hidden" fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <div id="mobile-menu"
                                class="flex-col hidden flex-grow pb-4 md:pb-0 p-5 absolute top-[30%] left-0 bg-[#fff] drop-shadow-md w-full z-50 py-5 xl:px-2 mt-10 ">
                                <ul class="">
                                    <li class="text-[#B7B7B7] text-[14px] py-2"> Service </li>
                                    <li class="text-[#B7B7B7] text-[14px] py-2"> Compnaies</li>
                                    <li class="text-[#B7B7B7] text-[14px] py-2"> resources </li>
                                    <li class="text-[#B7B7B7] text-[14px] py-2"> Categories </li>
                                    <li class="text-[#B7B7B7] text-[14px] py-2"> For Buyer </li>
                                    <li class="text-[#B7B7B7] text-[14px] py-2"> For Supplier </li>
                                    <li class="text-[#B7B7B7] text-[14px] py-2">Contact us</li>
                                    <li class="text-[#B7B7B7] text-[14px]  py-2">Need Help?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
