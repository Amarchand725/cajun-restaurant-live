<?php $__env->startSection('content'); ?>
    <!-- our menu start -->
    <section class="mt-[-100px]">
        <div
            class="bg-[url('public/frontend/img/product-bg.jpg')] bg-cover h-[100vh] bg-no-repeat before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00066] before:z-[0] relative w-full flex flex-col items-center justify-center py-10">
            <div class="txt">
            <h4 class="relative z-[999999] pt-[110px] kristi text-center lg:text-[45px] md:text-[35px] text-[30px] text-[#f9f9f9] mb-3">
            Products
            </h4>
            <h1
                class="relative z-[999999] text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400] ">
                Our Shop</h1>
            </div>

        </div>
    </section>
    <!-- our menu end -->

    <!-- tabs start -->
    <section class="">
        <div class="tabs lg:py-[100px] py-10">
            <div class="max-w-6xl mx-auto  2xl:px-0 lg:px-4 px-3">
                <div class="">
                    <ul class="flex flex-warp justify-center gap-x-3" id="myTab5" data-tabs-toggle="#meeTab3Content">
                        <li class="group">
                            <button href="javascript:;"
                                class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]"
                                id="mobile-tab" data-tabs-target="#mobile" type="button" role="tab"
                                aria-controls="mobile" aria-selected="true">ALL
                            </button>
                            <!-- <a href="javascript:;" class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]">ALL</a> -->
                        </li>
                        <li class="group">
                            <button href="javascript:;"
                                class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]"
                                id="non-tab" data-tabs-target="#non" type="button" role="tab" aria-controls="non"
                                aria-selected="false">Salads
                            </button>
                            <!-- <a href="javascript:;" class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]">Restaurant</a> -->
                        </li>
                        <li class="group">
                            <button href="javascript:;"
                                class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]"
                                id="biography-tab" data-tabs-target="#biography" type="button" role="tab"
                                aria-controls="biography" aria-selected="false">Soup</button>
                            <!-- <a href="javascript:;" class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]">staff</a> -->
                        </li>
                        <li class="group">
                            <button href="javascript:;"
                                class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]"
                                id="clients-tab" data-tabs-target="#clients" type="button" role="tab"
                                aria-controls="clients" aria-selected="false">Main</button>
                            <!-- <a href="javascript:;" class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]">staff</a> -->
                        </li>
                        <li class="group">
                            <button href="javascript:;"
                                class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]"
                                id="Desserts-tab" data-tabs-target="#Desserts" type="button" role="tab"
                                aria-controls="Desserts" aria-selected="false">Desserts</button>
                            <!-- <a href="javascript:;" class="text-[14px] font-[600] text-[#000] group-hover:text-[#d3a971] group-hover:border-b-[1px] border-[#d3a971]">staff</a> -->
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="mobile" role="tab"
                    aria-labelledby="mobile-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-1.jpg')); ?>" alt="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-2.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Low
                                    Carb -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$36.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-3.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    Seafood Paella</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-4.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Grilled
                                    -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Chicken
                                    Breast</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$28.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-5.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Low Carb -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roasted
                                    Steak Roulade</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$37.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-6.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-7.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Cannoli
                                    Cream Cheese</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$17.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-8.jpg')); ?>" alt="" class="w-full">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-6.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="flex flex-row gap-x-4 justify-center pt-5">
                            <div class="">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">1</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">2</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="non" role="tab"
                    aria-labelledby="non-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-9.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Spain
                                    Tapas</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$7.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-3.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    Seafood Paella</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-2.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Low
                                    Carb -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$36.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-1.jpg')); ?>" alt="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-4.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Grilled
                                    -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Chicken
                                    Breast</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$28.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-5.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Low Carb -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roasted
                                    Steak Roulade</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$37.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-6.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-7.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Cannoli
                                    Cream Cheese</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$17.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-8.jpg')); ?>" alt="" class="w-full">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="flex flex-row gap-x-4 justify-center pt-5">
                            <div class="">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">1</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">2</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="biography" role="tab"
                    aria-labelledby="biography-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-3.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    Seafood Paella</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-4.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Grilled
                                    -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Chicken
                                    Breast</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$28.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-5.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Low Carb -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roasted
                                    Steak Roulade</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$37.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-8.jpg')); ?>" alt="" class="w-full">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-1.jpg')); ?>" alt="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-2.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Low
                                    Carb -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$36.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-6.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-7.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Cannoli
                                    Cream Cheese</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$17.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-9.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Spain
                                    Tapas</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$7.99</p>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="flex flex-row gap-x-4 justify-center pt-5">
                            <div class="">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">1</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">2</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="clients" role="tab"
                    aria-labelledby="clients-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-4.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Grilled
                                    -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Chicken
                                    Breast</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$28.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-5.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Low Carb -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roasted
                                    Steak Roulade</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$37.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-6.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-7.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Cannoli
                                    Cream Cheese</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$17.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-3.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    Seafood Paella</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-1.jpg')); ?>" alt="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-2.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Low
                                    Carb -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$36.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-8.jpg')); ?>" alt="" class="w-full">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-9.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Spain
                                    Tapas</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$7.99</p>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="flex flex-row gap-x-4 justify-center pt-5">
                            <div class="">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">1</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">2</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="Desserts" role="tab"
                    aria-labelledby="Desserts-tab">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-6.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-8.jpg')); ?>" alt="" class="w-full">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-9.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Spain
                                    Tapas</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$7.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-7.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Cannoli
                                    Cream Cheese</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$17.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-1.jpg')); ?>" alt="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Mexican - Organic</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    American Fillet</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/shop-tab-2.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Low
                                    Carb -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roast
                                    Sea Trout</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$36.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-3.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Sweet
                                    -
                                    Nut Free</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Grilled
                                    Seafood Paella</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$18.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-4.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Grilled
                                    -
                                    Fresh</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Chicken
                                    Breast</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$28.99</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative group overflow-hidden">
                            <div class="mx-auto">
                                <img src="<?php echo e(url('public/frontend/img/tab-5.jpg')); ?>" alt="" class="">
                            </div>
                            <div
                                class="absolute bottom-[-50px] left-[100px] p-4 group-hover:opacity-100 opacity-0 group-hover:bottom-[-6%] w-full transition-all ease-in-out duration-700 ">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] px-8 py-3 text-[13px] font-[700] text-center leading-[48px]">Add
                                    To Cart</a>
                            </div>
                        </div>
                        <div class=" text-center pt-5">
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[#9b9b9b] text-[13px] font-[400] group-hover:text-[#d3a971] duration-700">Light
                                    - Low Carb -
                                    Mexican</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="text-[ss#222] text-[18px] font-[600] leading-[1.2] group-hover:text-[#d3a971] duration-700">Roasted
                                    Steak Roulade</a>
                            </div>
                            <p class="text-[16px] font-[600] text-[#d3a971]">$37.99</p>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="flex flex-row gap-x-4 justify-center pt-5">
                            <div class="">
                                <a href="javascript:;"
                                    class="bg-[#d3a971] text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">1</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">2</a>
                            </div>
                            <div class="group">
                                <a href="javascript:;"
                                    class="group-hover:bg-[#d3a971] bg-[#fff]  text-[#9b9b9b] group-hover:text-[#fff] font-[600] border border-[1px] border-[#d3a971] px-4 py-2 text-center">></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tabs end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\cajun-restaurant\resources\views/frontend/shop.blade.php ENDPATH**/ ?>