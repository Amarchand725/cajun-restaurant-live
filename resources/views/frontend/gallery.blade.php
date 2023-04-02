@extends('frontend.layouts.app')

@section('content')
    <!-- our gallery start -->
    <section class="mt-[-100px]">
        <div
            class="bg-[url('public/frontend/img/gallery-bg.jpg')] bg-cover bg-center bg-no-repeat w-full lg:pt-[287px] lg:pb-[187px] h-[100vh] before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#0000666] before:z-[0] relative py-10">
            <h4 class="kristi text-center lg:text-[40px] md:text-[35px] text-[30px] text-[#f9f9f9] mb-3">
                Memories
            </h4>
            <h1
                class="text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400]">
                Our Galley</h1>

        </div>
    </section>
    <!-- our gallery end -->

    <!-- tabs start -->
    <section class="">
        <div class="tabs lg:py-[100px] py-10">
            <div class="max-w-7xl mx-auto  2xl:px-0 lg:px-4 px-3">
                <div class="">
                    <ul class="flex flex-warp justify-center gap-x-3 pb-3" id="myTab5" data-tabs-toggle="#meeTab3Content">
                        <li class="group">
                            <button href="javascript:;"
                                class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222] text-white border-white"
                                id="mobile-tab" data-tabs-target="#mobile" type="button" role="tab"
                                aria-controls="mobile" aria-selected="true">ALL
                            </button>
                            <!-- <a href="javascript:;" class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222] text-white border-white">ALL</a> -->
                        </li>
                        <li class="group">
                            <button href="javascript:;"
                                class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222] text-white border-white"
                                id="non-tab" data-tabs-target="#non" type="button" role="tab" aria-controls="non"
                                aria-selected="false">Restaurant
                            </button>
                            <!-- <a href="javascript:;" class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222] text-white border-white">Restaurant</a> -->
                        </li>
                        <li class="group">
                            <button href="javascript:;"
                                class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222] text-white border-white"
                                id="biography-tab" data-tabs-target="#biography" type="button" role="tab"
                                aria-controls="biography" aria-selected="false">staff</button>
                            <!-- <a href="javascript:;" class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222] text-white border-white">staff</a> -->
                        </li>
                        <li class="group">
                            <button href="javascript:;"
                                class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222] text-white border-white"
                                id="clients-tab" data-tabs-target="#clients" type="button" role="tab"
                                aria-controls="clients" aria-selected="false">Clients</button>
                            <!-- <a href="javascript:;" class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222] text-white border-white">staff</a> -->
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="mobile" role="tab"
                    aria-labelledby="mobile-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-1.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-1.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-2.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-2.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-3.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-3.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-4.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-4.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-5.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-5.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-6.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-6.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-7.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-7.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-8.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-8.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700 w-full">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-9.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-9.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="non" role="tab" aria-labelledby="non-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-4.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-4.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-1.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-1.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-2.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-2.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-3.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-3.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-9.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-9.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-5.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-5.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-6.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-6.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-7.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-7.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-8.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-8.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700 w-full">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="biography" role="tab" aria-labelledby="biography-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-1.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-1.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-3.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-3.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-5.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-5.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-2.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-2.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-6.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-6.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-7.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-7.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-8.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-8.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700 w-full">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-9.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-9.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-4.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-4.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="clients" role="tab" aria-labelledby="clients-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-1.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-1.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-2.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-2.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-3.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-3.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-4.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-4.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-5.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-5.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-6.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-6.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-7.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-7.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-8.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-8.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700 w-full">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-1.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group">
                            <a href="javascript:;" data-src="{{url('public/frontend/img/tab-9.jpg')}}" class="" data-fancybox="ad">
                                <img src="{{url('public/frontend/img/tab-9.jpg')}}" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-3.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-2.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-8.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-5.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-6.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-7.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-4.jpg')}}">
                            </a>
                            <a data-fancybox="ad" data-src="{{url('public/frontend/img/tab-9.jpg')}}">
                            </a>
                            <div class="">
                                <a href="javascript:;">
                                    <img src="{{url('public/frontend/img/plus-sign.png')}}" alt="" class="absolute bottom-[50%] right-[40%] hidden group-hover:block w-1/12 group-hover:invert-[1]">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group text-center lg:mt-8 mt-5">
                    <a href="javascript:;" class="text-[16px] font-[700] text-[#222] group-hover:text-[#d3a971] duration-500  border-b-[2px] border-[#222] group-hover:border-[#d3a971]">Load More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- tabs end -->
@endsection
