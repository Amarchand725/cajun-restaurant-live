<footer class="bg-[#222] py-[100px]">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-4">
                @php
                    $logo = asset('public/company/logos/default.png');
                @endphp
                @if(!empty(companyProfile()) && companyProfile()->logo)
                    @php
                        $logo = asset('public/company/logos').'/'.companyProfile()->logo;
                    @endphp
                @endif
                <div class="txt text-center">
                    <h6 class="text-white text-[14px] lg:text-[16px] font-[700] leading-[1.2] ">Our Address</h6>
                    <p class="mb-[25px] mt-[14px] text-[14px] sm:text-[17px] leading-[27px] mb-[15px] text-[#9b9b9b]">
                        @if(!empty(companyProfile()) && companyProfile()->full_address)
                            {{ companyProfile()->full_address }}
                        @endif
                    </p>
                    <a href="javascript:;"
                        class="m text-[#d3a971] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                        View On Map
                    </a>
                </div>
            </div>
            <div class="col-span-4">
                <div class="txt text-center">
                    <img src="{{ $logo }}" alt="LOGO" class="mx-auto mb-6 w-4/12" />
                    <p class="mx-3 mb-[25px] mt-[14px] text-[14px] sm:text-[17px] leading-[27px] mb-[15px] text-[#9b9b9b]">
                        @if(!empty(aboutUs()) && aboutUs())
                            {{ aboutUs()->short_description??'' }}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-span-4">
                <div class="txt text-center">
                    <h6 class="text-white text-[14px] lg:text-[16px] font-[700] leading-[1.2] mb-[20px]">Private Dinning
                    </h6>
                    <div class="mb-[26px]">
                        <div class="email">
                            <span class="text-[#9b9b9b] text-[14px] lg:text-[16px] font-[400]">Main Email:</span>
                            <a href="mailto:;" class="text-[#9b9b9b] text-[14px] lg:text-[16px] font-[400] hover:text-[#d3a971]">
                                @if(!empty(companyProfile()) && companyProfile()->email)
                                    {{ companyProfile()->email }}
                                @endif
                            </a>
                        </div>
                        <div class="phone">
                            <span class="text-[#9b9b9b] text-[14px] lg:text-[16px] font-[400]">Phone:</span>
                            <a href="tel:;" class="text-[#9b9b9b] text-[14px] lg:text-[16px] font-[400] hover:text-[#d3a971]">
                                @if(!empty(companyProfile()) && companyProfile()->phone)
                                    {{ companyProfile()->phone }}
                                @endif
                            </a>
                        </div>

                    </div>
                    <a href="javascript:;"
                        class="m text-[#d3a971] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                        Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
