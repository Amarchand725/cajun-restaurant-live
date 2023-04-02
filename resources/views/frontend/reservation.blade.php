@extends("frontend.layouts.app")

@section('content')
    <!-- banner section -->
    <section class="mt-[-100px]">
        <div
            class="bg-[url('public/frontend/img/reservation-bg.jpg')] bg-cover h-[100vh] bg-no-repeat before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00066] before:z-[0] relative w-full flex flex-col items-center justify-center py-10">
            <div class="txt">
            <h4 class="relative z-[999999] pt-[110px] kristi text-center lg:text-[45px] md:text-[35px] text-[30px] text-[#f9f9f9] ">
            Book A Table
            </h4>
            <h1
                class="relative z-[999999] text-[#fff] text-center lg:text-[60px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400] leading-[1]">
                Reservation</h1>
            </div>

        </div>
    </section>
    <!-- banner section end  -->

    <!-- registration section -->
    <section class="mt-[-100px]">
        <div class="max-w-7xl mx-auto bg-white p-[40px] lg:p-[90px] rounded-[4px] relative z-[9999] shadow-md">
            <div class="grid grid-cols-12 gap-x-8">
                <div class="col-span-5">
                    <div class="card relative">
                        <img src="{{url('public/frontend/img/card-bg.jpg')}}" alt="Card"
                            class="h-full w-full absolute top-0 left-0 z-[0]">
                        <div class="txt text-center pt-[75px] px-[50px] pb-[70px] relative z-[99999]">
                            <span class="text-[35px] text-[#d3a971] kristi block leading-[1.5]">Check Availability</span>
                            <h5 class="text-[30px] xl:text-[34px] text-white font-[600] leading-[1.2] mb-[8px] yeseva">
                                Opening Times</h5>
                            <ul class="mb-[32px]">
                                <li
                                    class="flex items-center justify-between leading-[40px] xl:leading-[50px] pt-[6px] border-b-[1px] border-dashed border-[#494b4f]">
                                    <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">Week days</span>
                                    <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">09.00 – 24:00</span>
                                </li>
                                <li
                                    class="flex items-center justify-between leading-[40px] xl:leading-[50px] pt-[6px] border-b-[1px] border-dashed border-[#494b4f]">
                                    <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">Saturday</span>
                                    <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">08:00 – 03.00</span>
                                </li>
                                <li class="flex items-center justify-between leading-[40px] xl:leading-[50px] pt-[6px]">
                                    <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">Saturday</span>
                                    <span class="leading-[40px] text-[#9b9b9b] text-[17px] font-[400]">Day off</span>
                                </li>
                            </ul>
                            <div class="call">
                                <span class="text-[35px] text-[#d3a971] kristi block leading-[1.5]">Call Us Now</span>
                                <a href="tel:;"
                                    class="text-white text-[24px] lg:text-[32px] font-[400] block yeseva mb-[6px] xl:mb-[45px] leading-[1.2]">
                                    0201023456789
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-7">
                    <div
                        class="form border-[#d3a971] border rounded-[2px] bg-white pt-[50px] pb-[60px] relative px-[38px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:rounded-[2px] before:border before:border-[#d3a971] before:z-[0]">
                        <p
                            class="relative z-[99999] text-[14px] sm:text-[17px] leading-[28px] mb-[15px] text-[#9b9b9b] mb-[30px]">
                            You can book your table online easily in just a couple of minutes. We take reservations for
                            lunch, just check the availability of your table.</p>
                        <div class="grid grid-cols-12 gap-x-7 gap-y-7 relative z-[99999] ">
                            <div class="col-span-6">
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
                            <div class="col-span-6">
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
                            <div class="col-span-6">
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
                            <div class="col-span-6">
                                <div
                                    class="select bg-[#f6f6f6] h-[55px] border border-[#dbdbdb] rounded-[2px] px-[15px] w-full text-[#9b9b9b]">
                                    <input type="text" placeholder="Your Name"
                                        class="bg-transparent text-[14px] lg:text-[16px] w-full h-full focus:outline-0 text-[#9b9b9b] text-[13px]">
                                </div>
                            </div>
                            <div class="col-span-6">
                                <div
                                    class="select bg-[#f6f6f6] h-[55px] border border-[#dbdbdb] rounded-[2px] px-[15px] w-full text-[#9b9b9b]">
                                    <input type="text" placeholder="Email"
                                        class="bg-transparent text-[14px] lg:text-[16px] w-full h-full focus:outline-0 text-[#9b9b9b] text-[13px]">
                                </div>
                            </div>
                            <div class="col-span-6">
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
    <!-- registration end  -->

    <!-- Excellene start -->
    <section class="">
        <div class="discover-menu lg:py-[100px] py-10">
            <div class="max-w-6xl mx-auto 2xl:px-0 lg:px-4 px-3">
                <div class="">
                    <div class="">
                        <h3 class="lg:text-[50px] md:text-[35px] text-[30px] kristi mb-[8px] text-center text-[#d3a971]">
                            Excellene
                        </h3>
                        <h1 class="yeseva lg:text-[50px] sm:text-[37px] text-[25px] font-[400] mb-[10px] text-center leading-[1] text-[#282827]">
                            Our Awrads</h1>
                        <img src="{{url('public/frontend/img/heading-icon.png')}}" alt="" class="mx-auto mb-[20px]">
                        <p class="text-[14px] leading-[24px] font-[400] text-center text-[#9b9b9b] lg:w-6/12 w-full mx-auto">
                            Since our grand opening in May 1995, El Royale has won great awards from food critics and organizations all over the world.</p>
                    </div>
                </div>
            </div>
            <div class="max-w-3xl mx-auto lg:pt-12 pt-5">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="award-slider">
                            <div class="sm:mx-0 mx-2">
                                <img src="{{url('public/frontend/img/slider-6.png')}}" alt="" class="">
                            </div>
                            <div class="sm:mx-0 mx-2">
                                <img src="{{url('public/frontend/img/slider-5.png')}}" alt="" class="">
                            </div>
                            <div class="sm:mx-0 mx-2">
                                <img src="{{url('public/frontend/img/slider-4.png')}}" alt="" class="">
                            </div>
                            <div class="sm:mx-0 mx-2">
                                <img src="{{url('public/frontend/img/slider-3.png')}}" alt="" class="">
                            </div>
                            <div class="sm:mx-0 mx-2">
                                <img src="{{url('public/frontend/img/slider-1.png')}}" alt="" class="">
                            </div>
                            <div class="sm:mx-0 mx-2">
                                <img src="{{url('public/frontend/img/slider-2.png')}}" alt="" class="">
                            </div>
                            <div class="sm:mx-0 mx-2">
                                <img src="{{url('public/frontend/img/slider-6.png')}}" alt="" class="">
                            </div>
                            <div class="sm:mx-0 mx-2">
                                <img src="{{url('public/frontend/img/slider-4.png')}}" alt="" class="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex md:flex-row flex-col md:gap-x-14 justify-center lg:pt-12 pt-5 2xl:px-0 lg:px-4 px-3">
                <ul class=" md:text-right md:pb-0 pb-5">
                    <li class=" ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:right-[-17px] after:top-[22%] relative">
                        The Good Food Award, Gold Seal (2017)
                    </li>
                    <li class=" ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:right-[-17px] after:top-[22%] relative">
                        The Organic Food Award, Soil Association (2017)
                    </li>
                    <li class=" ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:right-[-17px] after:top-[22%] relative">
                        The Great British & Egyptian Food Award (2016)
                    </li>
                    <li class=" ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:right-[-17px] after:top-[22%] relative">
                        The Food Made Good Award (2015)
                    </li>
                    <li class=" ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:right-[-17px] after:top-[22%] relative">
                        The Great Food Taste Award (2014)
                    </li>
                    <li class=" ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:right-[-17px] after:top-[22%] relative">
                        The Food Award, Egypt (2014)
                    </li>
                </ul>
                <ul class="">
                    <li class="ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:left-[-17px] after:top-[22%] relative">
                        The Best Food Award, Egypt (2013)
                    </li>
                    <li class="ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:left-[-17px] after:top-[22%] relative">
                        The Best Chef in Egypt & Best Restaurant (2013)
                    </li>
                    <li class="ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:left-[-17px] after:top-[22%] relative">
                        The Best Emerging Egypt Cuisine (2012)
                    </li>
                    <li class="ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:left-[-17px] after:top-[22%] relative">
                        The Best Dining Experience (2011)
                    </li>
                    <li class="ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:left-[-17px] after:top-[22%] relative">
                        The Best Chef in Egypt (2010)
                    </li>
                    <li class="ml-5 sm:text-[14px] text-[12px] lg:text-[16px] font-[400] text-[#9b9b9b] mb-[7px] after:content-[''] after:absolute after:bg-[#d3a971] after:rounded-[50%] after:w-[8px] after:h-[8px] after:left-[-17px] after:top-[22%] relative">
                        The Egyptian Star (2009)
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Excellene end -->
@endsection
