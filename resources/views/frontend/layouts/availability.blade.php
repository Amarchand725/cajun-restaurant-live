<section
     class="availibility-sec bg-[url('frontend/img/availibility-bg.jpg')] bg-center bg-cover relative before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[0] px-4 py-[40px] lg:py-[100px]">
    <div class="max-w-7xl mx-auto bg-white p-[15px] sm:p-[40px] lg:p-[90px] rounded-[4px] relative z-[9999] shadow-md">
                <div class="grid grid-cols-12 lgap-y-8 lg:gap-x-8">
                    <div class="col-span-12 lg:col-span-5">
                        <div class="card relative">
                            <!-- <img src="{{ asset('public/frontend') }}/img/card-bg.jpg" alt="Card"
                                class="h-full w-full absolute top-0 left-0 z-[0]"> -->
                                <img src="{{url('/frontend/img/card-bg.jpg')}}" alt="Card"
                                    class="h-full w-full absolute top-0 left-0 z-[0]">
                            <div class="txt text-center pt-[75px] px-[50px] pb-[70px] relative z-[99999]">
                                <span class="text-[35px] text-[#d3a971] kristi block leading-[1.5]">Check Availability</span>
                                <h5 class="text-[30px] xl:text-[34px] text-white font-[600] leading-[1.2] mb-[8px] yeseva">
                                    Opening Times</h5>
                                <ul class="mb-[32px]">
                                    <li
                                        class="flex items-center justify-between leading-[40px] xl:leading-[50px] pt-[6px] border-b-[1px] border-dashed border-[#494b4f]">
                                        <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">Week days</span>
                                        <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">{{ $data['about_us']->week_days_timing }}</span>
                                    </li>
                                    <li
                                        class="flex items-center justify-between leading-[40px] xl:leading-[50px] pt-[6px] border-b-[1px] border-dashed border-[#494b4f]">
                                        <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">Saturday</span>
                                        <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">{{ $data['about_us']->saturday_timing }}</span>
                                    </li>
                                    <li class="flex items-center justify-between leading-[40px] xl:leading-[50px] pt-[6px]">
                                        <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">Saturday</span>
                                        <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">{{ $data['about_us']->sunday_timing }}</span>
                                    </li>
                                </ul>
                                <div class="call">
                                    <span class="text-[35px] text-[#d3a971] kristi block leading-[1.5]">Call Us Now</span>
                                    <a href="tel:;" class="text-white text-[24px] lg:text-[32px] font-[400] block yeseva mb-[6px] xl:mb-[45px] leading-[1.2]">
                                        {{ $data['about_us']->call_now }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-7">
                        <div
                            class="form border-[#d3a971] border rounded-[2px] bg-white pt-[50px] pb-[60px] relative px-[25px] sm:px-[38px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:rounded-[2px] before:border before:border-[#d3a971] before:z-[0]">
                            <p
                                class="relative z-[99999] text-[14px] sm:text-[17px] leading-[28px] mb-[15px] text-[#9b9b9b] mb-[30px]">
                                You can book your table online easily in just a couple of minutes. We take reservations for
                                lunch, just check the availability of your table.</p>
                            <div class="grid grid-cols-12 md:gap-x-7 gap-y-7 relative z-[99999] ">
                                <div class="col-span-12 sm:col-span-6">
                                    <div
                                        class="select bg-[#f6f6f6] h-[55px] border border-[#dbdbdb] rounded-[2px] px-[15px] w-full text-[#9b9b9b]">
                                        <select
                                            class="bg-transparent text-[14px] lg:text-[16px] w-full py-3 focus:outline-0 text-[#9b9b9b] text-[13px]">
                                            <option value="people1">2 people</option>
                                            <option value="people2">4 people</option>
                                            <option value="people3">6 people</option>
                                            <option value="people4">8 people</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div
                                        class="select bg-[#f6f6f6] h-[55px] border border-[#dbdbdb] rounded-[2px] px-[15px] w-full text-[#9b9b9b]">
                                        <select
                                            class="bg-transparent text-[14px] lg:text-[16px] w-full py-3 focus:outline-0 text-[#9b9b9b] text-[13px]">
                                            <option value="people1">March 23,2023</option>
                                            <option value="people2">March 26,2023</option>
                                            <option value="people3">March 28,2023</option>
                                            <option value="people4">April 5,2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div
                                        class="select bg-[#f6f6f6] h-[55px] border border-[#dbdbdb] rounded-[2px] px-[15px] w-full text-[#9b9b9b]">
                                        <select
                                            class="bg-transparent text-[14px] lg:text-[16px] w-full py-3 focus:outline-0 text-[#9b9b9b] text-[13px]">
                                            <option value="people1">2 people</option>
                                            <option value="people2">4 people</option>
                                            <option value="people3">6 people</option>
                                            <option value="people4">8 people</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div
                                        class="select bg-[#f6f6f6] h-[55px] border border-[#dbdbdb] rounded-[2px] px-[15px] w-full text-[#9b9b9b]">
                                        <input type="text" placeholder="Your Name"
                                            class="bg-transparent text-[14px] lg:text-[16px] w-full h-full focus:outline-0 text-[#9b9b9b] text-[13px]">
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div
                                        class="select bg-[#f6f6f6] h-[55px] border border-[#dbdbdb] rounded-[2px] px-[15px] w-full text-[#9b9b9b]">
                                        <input type="text" placeholder="Email"
                                            class="bg-transparent text-[14px] lg:text-[16px] w-full h-full focus:outline-0 text-[#9b9b9b] text-[13px]">
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6">
                                    <div
                                        class="select bg-[#f6f6f6] h-[55px] border border-[#dbdbdb] rounded-[2px] px-[15px] w-full text-[#9b9b9b]">
                                        <input type="number" placeholder="Phone Number"
                                            class="bg-transparent text-[14px] lg:text-[16px] w-full h-full focus:outline-0 text-[#9b9b9b] text-[13px]">
                                    </div>
                                </div>
                                <div class="col-span-12 mt-[20px]">
                                    <button type="submit"
                                        class="bg-[#222] text-white shadow-md w-full text-[13px] lg:text-[16px] font-[700] min-w-[170px] h-[60px] leading-[48px] text-center px-[10px] leading-[1.3] hover:bg-[#d3a971] ease-in-out duration-500 hover:duration-500">
                                        Find A Table
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</section>
