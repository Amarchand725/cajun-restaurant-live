<section class="event-sec py-[100px]">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-12 gap-x-8">
            <div class="col-span-12">
                <div class="txt text-center mb-[25px] lg:mb-[75px]">
                    <p class="text-[40px] xl:text-[50px] text-[#d3a971] block mb-[8px] leading-[1] kristi">Don’t Miss
                    </p>
                    <h2
                        class="text-[45px] font-[400] mb-[10px] yeseva lg:w-9/12 mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                        Our News & Events</h2>
                    <img src="{{ asset('/public/frontend/img/shape2.png') }}" alt="Shape" class="mx-auto mb-[20px]">
                    <p
                        class="text-[14px] sm:text-[17px] lg:text-[19px] leading-[32px] mb-[15px] text-[#9b9b9b] w-7/12 xl:pr-4 mx-auto">
                        Since our grand opening in May 1995, El Royale has won great awards from food critics and
                        organizations all over the world.</p>
                </div>
            </div>

            @foreach ($data['blogs'] as $blog)
                <div class="col-span-4">
                    <div class="card">
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
                            {{-- <a href="javascript:;"
                                class="m text-[#222] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                                Read More
                            </a> --}}
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-span-4">
                <div class="card">
                    <div
                        class="img mb-[30px] relative before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[1]">
                        <img src="{{ asset('public/frontend') }}/img/miss1.jpg" alt="" class="w-full">
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
                            Healthy & Simple Recipes That Are Perfect for Spring</h6>
                        <span class="text-[15px] text-[#9b9b9b] font-[400]">Jan 20, 2020</span>
                        <p class="mt-[14px] text-[14px] sm:text-[17px] leading-[32px] mb-[15px] text-[#9b9b9b]">
                            My favorite form of cold weather exercise is snow-shoeing, but by chance I haven’t
                            been able to go this year. Busy working at the computer when fresh snow fell...</p>
                        <a href="javascript:;"
                            class="m text-[#222] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="card">
                    <div
                        class="img mb-[30px] relative before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[1]">
                        <img src="{{ asset('public/frontend') }}/img/miss1.jpg" alt="" class="w-full">
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
                            Healthy & Simple Recipes That Are Perfect for Spring</h6>
                        <span class="text-[15px] text-[#9b9b9b] font-[400]">Jan 20, 2020</span>
                        <p class="mt-[14px] text-[14px] sm:text-[17px] leading-[32px] mb-[15px] text-[#9b9b9b]">
                            My favorite form of cold weather exercise is snow-shoeing, but by chance I haven’t
                            been able to go this year. Busy working at the computer when fresh snow fell...</p>
                        <a href="javascript:;"
                            class="m text-[#222] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                            Read More
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
