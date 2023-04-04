@extends('frontend.layouts.app')

@section('content')
    <!-- our menu start -->
<section class="mt-[-100px]">
    <div
        class="bg-[url('public/frontend/img/blog-bg.jpg')] bg-cover bg-center md:h-[140vh] xl:h-[80vh] before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00006] before:z-[0] relative w-full flex flex-col items-center justify-center pt-10">
        <div class="txt pb-3">
            <h4
                class="relative z-[999999] pt-[110px] kristi text-center lg:text-[45px] md:text-[35px] text-[30px] text-[#f9f9f9] mb-3 leading-[1]">
                Don’t Miss
            </h4>
            <h1
                class="relative z-[999999] text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400] leading-[1]">
                Our News</h1>
        </div>
        <ul class="mt-[20px] flex items-center gap-x-4">
            <li class="">
                <a href="index" class="text-white text-[16px] font-[400] leading-[1]">Home</a>
            </li>
            <li class="before:content-['ï„…'] before:text-white">
                <a href="index" class="text-white text-[16px] font-[400] leading-[1]">blog</a>
            </li>
            <li class="before:content-['ï„…'] before:text-white">
                <a href="index" class="text-white text-[16px] font-[400] leading-[1] active:text-[##d3a971]">Grid</a>
            </li>
        </ul>

    </div>
</section>
<!-- our menu end -->

<!-- slider start -->
<section class="py-[100px]">
    <div class="max-w-7xl mx-auto">
        <div class="gri grid-cols-12">
            <div class="col-span-12">
                <h2 class="text-[30px] text-center lg:text-[45px] font-[400] mb-[10px] yeseva lg:w-9/12 mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                    Discover Our Blogs
                </h2>
                <div class="slider3">
                    @foreach ($blogs as $blog)
                        <div class="mx-4">
                            <div class="card h-full">
                                <div class="img mb-[30px] relative before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[1]">
                                    <img src="{{ asset('public/admin/images/blogs') }}/{{ $blog->image }}" alt="" class="w-full">
                                </div>
                                <div class="txt pl-[30px] pr-[15px]">
                                    <div class="meta mb-[11px]">
                                        <a href="javascript:;"
                                            class="bg-[#d3a971] text-white text-[15px] leading-[30px] px-[10px] py-[3px] rounded-[3px] mr-[4px]">
                                            Food
                                        </a>
                                        <a href="javascript:;"
                                            class="bg-[#d3a971] text-white text-[15px] leading-[30px] px-[10px] py-[3px] rounded-[3px] mr-[4px]">
                                            Recipes
                                        </a>
                                    </div>
                                    <h6 class="text-[#282828] text-[18px]  lg:text-[22px] leading-[27px] font-[600] mb-[11px]">
                                        {{ $blog->title }}
                                    </h6>
                                    <span class="text-[15px] text-[#9b9b9b] font-[400]">{{ date('M d, Y | H:i A', strtotime($blog->created_at)) }}</span>
                                    <p class="mt-[14px] text-[14px] sm:text-[17px] leading-[32px] mb-[15px] text-[#9b9b9b]">
                                        {{ $blog->description }}
                                    </p>
                                    {{-- <a href="javascript:;" class="m text-[#222] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                                        Read More
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider end  -->
@endsection
