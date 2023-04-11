

<?php $__env->startSection('content'); ?>
    <!-- slider section start -->
    <?php echo $__env->make('frontend.layouts.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- slider section end  -->

    <!-- welcome start -->
    <section class="welcome-sec py-[40px] lg:py-[100px]">
        <div class="max-w-7xl mx-auto xl:px-0 lg:px-3 px-4">
            <div class="grid grid-cols-12 md:gap-x-10">
                <div class="col-span-12">
                    <div class="txt text-center mb-20">
                        <p class="text-[30px] md:text-[40px] xl:text-[50px] text-[#d3a971] block mb-[8px] leading-[1] kristi">
                            Welcome To The El Royale
                        </p>
                        <h1 class="text-[35px] md:text-[45px] font-[400] mb-[10px] yeseva lg:w-9/12 mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                            Delicious Food, Friendly Staff, Cozy Atmosphere & Positive Emotions!
                        </h1>
                        <img src="<?php echo e(url('/frontend')); ?>/img/shape2.png" alt="Shape" class="mx-auto">
                    </div>
                </div>

                <?php $__currentLoopData = $data['food_services']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-span-12 md:col-span-4 mb-[30px]">
                        <div class="card relative overflow-hidden z-0 group">
                            <div class="img before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[1]">
                                <!-- <img src="<?php echo e(asset('frontend/img/foodservices')); ?>/<?php echo e($food_service->image); ?>" alt="Card" class="group-hover:scale-[1.1] duration-700 group-hover:duration-700"> -->
                                <img src="<?php echo e(url('frontend/img/card1.jpg')); ?>" alt="Card"
                            class="group-hover:scale-[1.1] duration-700 group-hover:duration-700">
                            </div>
                            <div class="txt">
                                <p class="text-white text-[35px] xl:text-[45px] font-[400] absolute bottom-[30px] left-0 w-full text-center z-[3] kristi">
                                    <?php echo e($food_service->title); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="col-span-12">
                    <div class="txt text-center">
                        <p class="text-[14px] sm:text-[17px] lg:text-[19px] leading-[32px] mb-[15px] text-[#9b9b9b] lg:w-7/12 xl:pr-4 mx-auto">
                            El Royale was the first restaurant to open in Egypt, the resturant designed with the history in
                            mind
                            we have created a soft industrial dining room.
                        </p>
                        <a href="javascript:;"
                            class="text-[#222] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                            Discover Our Story
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- welcome end -->

    <!-- delicious start-->
    <section
        class="delicious-sec relative z-[3] bg-[url('frontend/img/delicious-bg.jpg')] bg-cover bg-center bg-fixed py-[100px] before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[0]">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="txt text-center relative z-[9999]">
                        <p class="text-white text-[40px] xl:text-[50px] kristi">We Create Delicious Memories</p>
                        <h2
                            class="text-[30px] sm:text-[40px] lg:text-[60px] xl:text-[90px] font-[400] text-white yeseva mb-[11px] leading-[1.2] lg:w-10/12 mx-auto">
                            Pull Up A Chair. Take
                            A Taste & Come Join Us</h2>
                        <p class="text-[16px] md:text-[18px] xl:text-[20px] text-white font-[600] mb-[32px] leading-[24px]">
                            We have awesome recipes and the most talented chefs in town!</p>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-x-4 relative z-[99999]">
                        <img src="<?php echo e(url('frontend')); ?>/img/signature2.png" alt="Signature" class="">
                        <div class="btn">
                            <a href="javascript:;"
                                class="bg-white block text-[#282828] shadow-md text-[13px] sm:text-[16px] font-[700] min-w-[190px] sm:min-w-[200px] h-[50px] sm:h-[60px] leading-[50px] sm:leading-[58px] text-center px-[10px] rounded-[2px] tracking-[1.3] hover:bg-[#d3a971] hover:text-white pointer duration-[700] hover:duration-[700]"
                                tabindex="0">
                                Book a Table
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- delicious end -->

    <!-- Favourites start -->
    <?php echo $__env->make('frontend.layouts.discover-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Favourites end -->

    <!-- People talk start-->
    
    <!-- People talk end-->

    <section class="py-[40px] lg:py-[100px]">
        <div class="max-w-7xl mx-auto xl:px-0 lg:px-3 px-4">
            <div class="grid grid-cols-12 lg:gap-x-7 items-center">
                <div class="col-span-12 gap-y-5 lg:col-span-8">
                    <div class="img flex items-center sm:gap-x-3 lg:gap-x-10">
                        <img src="<?php echo e(asset('frontend')); ?>/img/event-1.jpg" alt="" class="h-full w-full sm:w-[50%] lg:w-full">
                        <img src="<?php echo e(asset('frontend')); ?>/img/event-2.jpg" alt="" class="sm:block hidden w-[50%] h-full lg:w-full lg:mt-16">
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="txt text-center mt-8 lg:mt-0">
                        <p class="text-[30px] md:text-[40px] xl:text-[50px] text-[#d3a971] block mb-[8px] leading-[1] kristi">Host Your
                            Event</p>
                        <h2 class="text-[35px] md:text-[40px] font-[400] mb-[10px] yeseva mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                            A warm & Friendly Atmosphere </h2>
                        <!-- <img src="<?php echo e(asset('/public/frontend/img/shape2.png')); ?>" alt="Shape" class="mx-auto mb-[20px]"> -->
                        <img src="<?php echo e(url('frontend/img/shape2.png')); ?>" alt="Shape" class="mx-auto mb-[20px]">
                        <p
                            class="text-[14px] sm:text-[17px] lg:text-[18px] leading-[28px] sm:leading-[32px] mb-[15px] text-[#9b9b9b] mb-[30px]">
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

    <!-- availibility start -->
    <?php echo $__env->make('frontend.layouts.availability', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- availibility end -->

    <!-- News Events -->
    <?php echo $__env->make('frontend.layouts.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- event end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cajun-restaurant-live\resources\views/frontend/index.blade.php ENDPATH**/ ?>