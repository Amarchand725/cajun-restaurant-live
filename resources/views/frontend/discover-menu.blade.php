@extends('frontend.layouts.app')

@section('content')
    <!-- our menu start -->
    <section class="md:mt-[-100px]">
        <div
            class="bg-[url('frontend/img/our-menu-bg.jpg')] bg-cover h-[100vh] bg-no-repeat before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#0000666] before:z-[0] relative w-full flex flex-col items-center justify-center py-10">
            <div class="txt">
            <h4 class="relative z-[999999] pt-[110px] kristi text-center lg:text-[45px] md:text-[35px] text-[30px] text-[#f9f9f9] mb-3">
                Discover
            </h4>
            <h1
                class="relative z-[999999] text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400] ">
                Our Menu</h1>
            </div>

        </div>
    </section>
    <!-- our menu end -->

    <!-- discover menu start -->
    <section class="">
        <div class="discover-menu lg:py-[100px] py-10">
            <div class="max-w-8xl mx-auto 2xl:px-0 lg:px-4 px-3">
                <div class="">
                      <h3
                            class="lg:text-[45px] md:text-[35px] text-[30px] kristi mb-[8px] text-center text-[#d3a971]">
                            Taste The Best
                        </h3>
                        <h1 class="yeseva sm:text-[37px] text-[25px] font-[400] mb-[10px] text-center leadin g-[1.2] text-[#282827]">
                            Discover Our Menu
                        </h1>
                        <img src="{{url('frontend/img/heading-icon.png')}}" alt="" class="mx-auto mb-[20px]">
                        <p class="text-[14px] leading-[24px] font-[400] text-center text-[#9b9b9b] lg:w-6/12 w-full mx-auto">
                            Even if you're not a great chef, there's nothing to stop you understanding the
                            difference between what tastes good and what doesn't.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discover menu end -->

    @foreach ($data['menu_categories'] as $menu_category)
        <!-- breakfast menu start -->
        <section class="">
            <div class="breakfast-menu">
                <div class="bg-[url('frontend/img/break-fast-bg.jpg')] h-[70vh] bg-cover bg-center bg-fixed bg-no-repeat w-full lg:pt-[100px] lg:pb-[125px] pt-10 pb-10 before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[0] relative">
                    <div class="txt text-center relative z-[99999]">
                    <h4 class="kristi lg:text-[40px] md:text-[35px] text-[30px] mb-[10px] text-[#fff] text-center">
                        @if(!empty($menu_category->start_time))
                            Starts At {{ date('h:i A', strtotime($menu_category->start_time)) }}
                        @else
                            Don't Miss
                        @endif
                    </h4>
                    <h2  class="text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400]">
                        {{ $menu_category->title }}
                    </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- breakfast menu end -->

        <!-- chicken breast start -->
        <section class="">
            <div class="chicken-breast">
                <div class="max-w-7xl mx-auto lg:pt-[100px] lg:pb-[80px] py-10 2xl:px-0 lg:px-4 px-3">
                    <div class="grid grid-cols-12 lg:gap-x-9 gap-5">
                        @php $temp = 1; @endphp
                        @foreach ($menu_category->haveOurMenus as $menu)
                        <div class="lg:col-span-4 md:col-span-6 col-span-12">
                            @if($temp==1)
                                @php $temp=2 @endphp
                                <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                    <p class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                        ${{ $menu->price }}
                                    </p>
                                    <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                        {{ $menu->title }}
                                    </h3>
                                    <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">
                                        {{ $menu->description }}
                                    </p>
                                </div>
                            @elseif($temp==2)
                                @php $temp=3 @endphp
                                <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                    <p class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                        ${{ $menu->price }}
                                    </p>
                                    <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                        {{ $menu->title }}
                                    </h3>
                                    <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">
                                        {{ $menu->description }}
                                    </p>
                                </div>
                            @else
                                @php $temp=1 @endphp
                                <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                    <p class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                        ${{ $menu->price }}
                                    </p>
                                    <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                        {{ $menu->title }}
                                    </h3>
                                    <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">
                                        {{ $menu->description }}
                                    </p>
                                </div>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- chicken breast end -->
    @endforeach
@endsection
