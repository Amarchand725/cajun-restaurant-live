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
                Our Gallery</h1>

        </div>
    </section>
    <!-- our gallery end -->

    <!-- tabs start -->
    <section class="">
        <div class="tabs lg:py-[100px] py-10">
            <div class="max-w-7xl mx-auto  2xl:px-0 lg:px-4 px-3">
                <div class="grid col-span-12">
                    <div class="txt text-center mb-[25px] lg:mb-[55px]">
                        <p
                            class="text-[30px] lg:text-[40px] xl:text-[50px] text-[#d3a971] block mb-[8px] leading-[1] kristi">
                            Our
                            Favourites</p>
                        <h2
                            class="text-[30px] lg:text-[45px] font-[400] mb-[10px] yeseva lg:w-9/12 mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                            Discover Our Menu</h2>
                        <img src="http://127.0.0.1:8000/assets/img/shape2.png" alt="Shape" class="mx-auto mb-[20px]">
                        <p
                            class="text-[14px] md:text-[17px] lg:text-[19px] leading-[32px] mb-[15px] text-[#9b9b9b] w-7/12 xl:pr-4 mx-auto">
                            Since our grand opening in May 1995, El Royale has won great awards from food
                            critics and organizations all over the world.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="mobile" role="tab" aria-labelledby="mobile-tab">
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
