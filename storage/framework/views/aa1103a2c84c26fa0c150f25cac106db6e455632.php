<section class="banner-sec md:mt-[-100px]">
    <div class="slider1 relative w-full z-0">
        <?php $__currentLoopData = $data['sliders']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="bg-[url('frontend/img/banner-bg.jpg')] bg-cover bg-center h-[100vh] relative z-[1] flex items-center justify-center">
                            <div class="pt-[60px] lg:pt-[90px]">
                                <div class="max-w-7xl mx-auto xl:px-0 lg:px-3 px-4">
                                    <div class="txt">
                                        <h2 class="text-[35px] md:text-[50px] xl:text-[85px] font-[400] text-white text-center yeseva lg:w-9/12 mx-auto leading-[1.2]">
                                            <?php echo e($slider->title); ?>

                                        </h2>
                                        <p class="text-[16px] sm:text-[25px] lg:text-[35px] xl:text-[50px] text-white mb-[30px] kristi text-center">
                                            <?php echo e($slider->sub_title); ?>

                                        </p>
                                    </div>
                                    <div class="btn flex flex-wrap items-center justify-center gap-y-4 gap-x-4">
                                        <a href="javascript:;"
                                            class="bg-[#d3a971] text-white shadow-md text-[16px] font-[700] min-w-[170px] h-[50px] leading-[48px] text-center px-[10px] rounded-[2px] tracking-[1.3] hover:bg-[#282828] pointer duration-[700] hover:duration-[700]">
                                            View Menu
                                        </a>
                                        <a href="javascript:;"
                                            class="bg-transparent border-4 border-white text-white shadow-md text-[16px] font-[700] rounded-[2px] min-w-[170px] h-[50px] leading-[48px] text-center px-[10px] tracking-[1.3] hover:border-[#d3a971] hover:bg-[#d3a971] pointer duration-[700] hover:duration-[700]">
                                            Book A Table
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\cajun-restaurant-live\resources\views/frontend/layouts/slider.blade.php ENDPATH**/ ?>