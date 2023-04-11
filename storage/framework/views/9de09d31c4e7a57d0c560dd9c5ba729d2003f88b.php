<section class="favourite-sec py-[40px] lg:py-[100px]">
    <div class="max-w-7xl mx-auto xl:px-0 lg:px-3 px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="txt text-center mb-[25px] lg:mb-[55px]">
                    <p class="text-[40px] xl:text-[50px] text-[#d3a971] block mb-[8px] leading-[1] kristi">Our
                        Favourites</p>
                    <h2
                        class="text-[45px] font-[400] mb-[10px] yeseva lg:w-9/12 mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                        Discover Our Menu</h2>
                    <img src="<?php echo e(url('frontend/img/shape2.png')); ?>" alt="Shape" class="mx-auto mb-[20px]">
                    <p
                        class="text-[14px] sm:text-[17px] lg:text-[19px] leading-[25px] sm:leading-[32px] mb-[15px] text-[#9b9b9b] lg:w-7/12 xl:pr-4 mx-auto">
                        Since our grand opening in May 1995, El Royale has won great awards from food
                        critics and organizations all over the world.</p>
                </div>
                <div class="col-span-12 mt-6">
                    
                    <div id="myTabContent" class="my-tabed mt-5 sm:mt-14">
                        <div class="" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                            <div class="grid grid-cols-12 gap-x-3 lg:gap-x-8">
                                <?php $bool = true; ?>
                                <?php $__currentLoopData = $data['menu_categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($bool): ?>
                                        <?php $bool = false; ?>
                                        <div class="col-span-12 md:col-span-6">
                                            <div class="card border border-[#d3a971] relative pt-[50px] px-[30px] sm:px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[-3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971] ">
                                                <?php $__currentLoopData = $menu_category->haveOurMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $our_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                        <h4 class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                            <?php echo e($our_menu->title); ?>

                                                        </h4>
                                                        <span class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">
                                                            $<?php echo e($our_menu->price); ?>

                                                        </span>
                                                        <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                            <?php echo e($our_menu->description); ?>

                                                        </p>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <?php $bool = true; ?>
                                        <div class="col-span-12 md:col-span-6">
                                            <div class="card border border-[#d3a971] relative pt-[50px] px-[30px] sm:px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971]">
                                                <?php $__currentLoopData = $menu_category->haveOurMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $our_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                        <h4 class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                            <?php echo e($our_menu->title); ?>

                                                        </h4>
                                                        <span class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">
                                                            $<?php echo e($our_menu->price); ?>

                                                        </span>
                                                        <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                            <?php echo e($our_menu->description); ?>

                                                        </p>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12">
                <div class="txt text-center">
                    <a href="javascript:;"
                        class="m text-[#222] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                        Explore Full Menu
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\cajun-restaurant-live\resources\views/frontend/layouts/discover-menu.blade.php ENDPATH**/ ?>