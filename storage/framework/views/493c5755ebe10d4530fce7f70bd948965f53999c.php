

<?php $__env->startSection('content'); ?>
    <!-- our gallery start -->
    <section class="md:mt-[-100px]">
        <div  class="bg-[url('frontend/img/gallery-bg.jpg')] bg-cover bg-center bg-no-repeat w-full md:pt-[287px] md:pb-[187px] lg:h-[100vh] before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#0000666] before:z-[0] relative pt-10 pb-10">
            <div class="txt relative z-[99999]">
            <h4 class="kristi text-center lg:text-[40px] md:text-[35px] text-[30px] text-[#f9f9f9] mb-3">
                Memories
            </h4>
            <h1 class="text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400]">
                Our Gallery
            </h1>
            </div>
        </div>
    </section>
    <!-- our gallery end -->

    <!-- tabs start -->
    <section class="">
        <div class="tabs lg:py-[100px] py-10">
            <div class="max-w-7xl mx-auto  2xl:px-0 lg:px-4 px-3">
                <div class="grid col-span-12">
                    <div class="txt text-center mb-[25px] lg:mb-[55px]">
                        <p class="text-[30px] lg:text-[40px] xl:text-[50px] text-[#d3a971] block mb-[8px] leading-[1] kristi">
                            Our
                            Favourites
                        </p>
                        <h2 class="text-[30px] lg:text-[45px] font-[400] mb-[10px] yeseva lg:w-9/12 mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                            Discover Our Menu
                        </h2>
                        <img src="<?php echo e(asset('frontend/img/shape2.png')); ?>" alt="Shape" class="mx-auto mb-[20px]">
                        <p class="text-[14px] md:text-[17px] lg:text-[19px] leading-[32px] mb-[15px] text-[#9b9b9b] lg:w-7/12 xl:pr-4 mx-auto">
                            Since our grand opening in May 1995, El Royale has won great awards from food
                            critics and organizations all over the world.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-12 items-center lg:gap-8 gap-5 lg:pt-8 pt-5" id="mobile" role="tab" aria-labelledby="mobile-tab">
                    <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="lg:col-span-4 sm:col-span-6 col-span-12">
                            <div class="relative group">
                                <a href="javascript:;" data-src="<?php echo e(url('frontend/img/plus-sign.png')); ?>" class="" data-fancybox="ad">
                                    <img src="<?php echo e(url('frontend/img/tab-1.jpg')); ?>" alt="" class="mx-auto group-hover:brightness-50 duration-700">
                                    <!-- <img src="<?php echo e(url('frontend/img/galleries')); ?>/<?php echo e($gallery->image); ?>" alt="" class="mx-auto group-hover:brightness-50 duration-700"> -->
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cajun-restaurant-live\resources\views/frontend/gallery.blade.php ENDPATH**/ ?>