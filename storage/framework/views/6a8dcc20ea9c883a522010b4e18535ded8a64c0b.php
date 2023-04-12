

<?php $__env->startSection('content'); ?>
    <!-- banner start -->
    <section class="md:mt-[-100px]">
        <div
            class="banner bg-[url('frontend/img/about-banner.jpg')] bg-cover bg-center bg-no-repeat w-full lg:pt-80 pt-10 pb-3">
            <h3 class="text-[#f9f9f9] text-center lg:text-[40px] md:text-[35px] text-[30px] kristi mb-[3px]">
                All About Us</h3>
            <h1 class="text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400]">
                Our Story</h1>
            <div class="">
                <ul class="flex flex-warp items-center justify-center gap-x-3 lg:mt-[143px] mt-5">
                    <li class="">
                        <a href="javascript:;" class="flex flex-warp gap-x-2 items-center justify-center group">
                            <div class="">
                                <p class="text-[14px] font-[400] text-[#fff] text-center group-hover:text-[#d3a971] duration-700">
                                    HOME
                                </p>
                            </div>
                            <div class="text-[#fff] font-[400] text-center">
                                >
                            </div>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;" class="flex flex-warp gap-x-2 items-center justify-center group">
                            <div class="">
                                <p class="text-[14px] font-[400] text-[#fff] text-center group-hover:text-[#d3a971] duration-700">
                                    About</p>
                            </div>
                            <div class="text-[#fff] font-[400] text-center">
                                >
                            </div>
                        </a>
                    </li>
                    <li>
                        <p class="text-[14px] font-[400] text-center text-[#d3a971] duration-700">our story</p>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <!-- banner end -->

    <!-- welcome to the start -->
    <section class="">
        <div class="welcome-to-the lg:py-[100px] py-10">
            <div class="max-w-6xl mx-auto 2xl:px-0 lg:px-4 px-3">
                <div class="">
                    <h3 class="lg:text-[40px] md:text-[35px] text-[30px] kristi mb-[8px] text-center text-[#d3a971] mt-5">
                        Welcome To The El Royale
                    </h3>
                    <h1 class="yeseva sm:text-[37px] text-[25px] font-[400] mb-[10px] mx-auto text-center lg:w-5/12 w-full leading-[1.2] text-[#282827]">
                    <?php echo e($about_us->title); ?>

                    </h1>
                    <img src="<?php echo e(url('frontend/img/heading-icon.png')); ?>" alt="" class="mx-auto mb-5">
                </div>
                <div class="grid grid-cols-12 items-center pt-5 lg:gap-0 gap-5">
                    <div class="lg:col-span-4 col-span-12 lg:pt-10 pt-0">
                        <div class="">
                            <!-- <?php if(!empty($about_us->short_description_logo)): ?>
                                <img src="<?php echo e(url('public/admin/images/aboutuses')); ?>/<?php echo e($about_us->short_description_logo); ?>" alt="" class="mx-auto">
                            <?php endif; ?> -->
                            <img src="<?php echo e(url('frontend/img/cajun-logo.png')); ?>" alt="" class="mx-auto w-5/12 mb-5">
                            <p class="text-center mx-auto text-[14px] font-[700] leading-[24px] mb-[15px] text-[#9b9b9b] lg:w-10/12 w-full">
                                <?php echo e($about_us->short_description); ?>

                            </p>
                            <!-- <?php if(!empty($about_us->signature)): ?>
                                <img src="<?php echo e(url('public/admin/images/aboutuses')); ?>/<?php echo e($about_us->signature); ?>" alt="" class="mx-auto">
                            <?php endif; ?> -->
                            <img src="<?php echo e(url('frontend/img/signature.png')); ?>" alt="" class="mx-auto">
                        </div>
                    </div>
                    <div class="lg:col-span-4 col-span-12">
                        <div class="bg-[url('frontend/img/menu-card.jpg')] bg-cover bg-center bg-no-repeat w-full">
                            <div class="pt-[55px] md:pt-[75px] pb-[40px] md:pb-[60px] px-[30px] md:px-[50px] text-center">
                                <h4 class="kristi text-[25px] md:text-[30px] text-[#d3a971]">Check Availability</h4>
                                <h2 class="yeseva text-[22px] md:text-[27px] text-[#fff] mb-[6px] font-[600]">Opening Times</h2>
                                <ul class="text-[14px] font-[400] text-[#9b9b9b]">
                                    <li class="flex flex-warp justify-between items-center border-dashed border-b-[1px]">
                                        <span class="leading-[40px]">Week days</span>
                                        <span><?php echo e($about_us->week_days_timing); ?></span>
                                    </li>
                                    <li class="flex flex-warp justify-between items-center border-dashed border-b-[1px]">
                                        <span class="leading-[40px]">Saturday</span>
                                        <span><?php echo e($about_us->saturday_timing); ?></span>
                                    </li>
                                    <li class="flex flex-warp justify-between items-center">
                                        <span class="leading-[40px]">Saturday</span>
                                        <span><?php echo e($about_us->sunday_timing); ?></span>
                                    </li>
                                </ul>
                                <div class="">
                                    <h3 class="kristi text-[25px] md:text-[30px] text-[#d3a971]">Call Us Now</h3>
                                    <a class="yeseva text-[22px] md:text-[27px] text-[#fff] mb-[6px]" href="tel:0201023456789"><?php echo e($about_us->call_now); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-4 col-span-12 lg:ml-[40px] ml-0 lg:pt-10 pt-0">
                        <div class="">
                            <p class="text-[14px] mb-[20px] leading-[24px] font-[400] text-[#9b9b9b] lg:w-[95%] w-full">
                                <?php echo e($about_us->about_us); ?>

                            </p>
                            <div class="group">
                                <a href="javascript:;" class=" bg-[#d3a971] text-[#fff] border border-[1px] border-[#d3a971] shadow-xl text-[13px] px-10 py-4 rounded-[1px] font-[700] group-hover:bg-[#282828] duration-700">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- welcome to the end -->

    <!-- take a taste start -->
    <section class="">
        <div class="take-a-taste">
            <div
                class="bg-[url('/frontend/img/take-a-taste-image.jpg')] bg-cover bg-center bg-no-repeat w-full lg:py-[105px] py-10 ">
                <h4 class="kristi lg:text-[40px] md:text-[35px] text-[30px] mb-[10px] text-[#fff] text-center">
                    We Create Delicious Memories
                </h4>
                <h2
                    class="text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400]">
                    Take A Taste & Come Join Us</h2>
            </div>
        </div>
    </section>
    <!-- take a taste end -->

    <!-- event start -->
    <section class="py-[40px] lg:py-[100px]">
        <div class="max-w-7xl mx-auto xl:px-0 lg:px-3 px-4">
            <div class="grid grid-cols-12 lg:gap-x-7 items-center">
                <div class="col-span-12 lg:col-span-8">
                    <div class="img flex items-center md:gap-x-2 xl:gap-x-10">
                        <img src="<?php echo e(url('frontend/img/event-1.jpg')); ?>" alt="" class="h-full w-full">
                        <img src="<?php echo e(url('frontend/img/event-2.jpg')); ?>" alt="" class="h-full md:block hidden w-full lg:mt-16">
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="txt text-center mt-8 lg:mt-0">
                        <p class="text-[30px] md:text-[40px] xl:text-[50px] text-[#d3a971] block mb-[8px] leading-[1] kristi">Host Your
                            Event</p>
                        <h2 class="text-[35px] md:text-[40px] font-[400] mb-[10px] yeseva mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                            A warm & Friendly Atmosphere </h2>
                        <!-- <img src="<?php echo e(url('frontend')); ?>/img/shape2.png" alt="Shape" class="mx-auto mb-[20px]"> -->
                        <img src="<?php echo e(url('frontend/img/shape2.png')); ?>" alt="Shape" class="mx-auto mb-[20px]">
                        <p
                            class="text-[14px] sm:text-[17px] lg:text-[18px] leading-[25px] sm:leading-[32px] mb-[15px] text-[#9b9b9b] mb-[30px]">
                            Allow us to make your next special event extra special. We cater for all sized
                            functions, ideal for your intimate gathering, our team can curate a menu to suit your taste.</p>
                        <a href="javascript:;"
                            class="m text-[#222] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                            Explore Events
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event end  -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cajun-restaurant-live\resources\views/frontend/about.blade.php ENDPATH**/ ?>