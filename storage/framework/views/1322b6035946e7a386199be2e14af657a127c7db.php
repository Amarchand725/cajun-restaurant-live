<footer class="bg-[#222] py-[100px]">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-12 items-center">
            <div class="col-span-4">
                <?php
                    $logo = asset('public/company/logos/default.png');
                ?>
                <?php if(!empty(companyProfile()) && companyProfile()->logo): ?>
                    <?php
                        $logo = asset('public/company/logos').'/'.companyProfile()->logo;
                    ?>
                <?php endif; ?>
                <div class="txt text-center">
                    <h6 class="text-white text-[14px] lg:text-[16px] font-[700] leading-[1.2] ">Our Address</h6>
                    <p class="mb-[25px] mt-[14px] text-[14px] sm:text-[17px] leading-[27px] mb-[15px] text-[#9b9b9b]">
                        <?php if(!empty(companyProfile()) && companyProfile()->full_address): ?>
                            <?php echo e(companyProfile()->full_address); ?>

                        <?php endif; ?>
                    </p>
                    <a href="javascript:;"
                        class="m text-[#d3a971] text-[16px] font-[700] leading-[1] pb-[5px] underline decoration-2 underline-offset-8 tracking-[1.3]">
                        View On Map
                    </a>
                </div>
            </div>
            <div class="col-span-4">
                <div class="txt text-center">
                    <img src="<?php echo e($logo); ?>" alt="LOGO" class="mx-auto mb-6 w-4/12" />
                    <p class="mx-3 mb-[25px] mt-[14px] text-[14px] sm:text-[17px] leading-[27px] mb-[15px] text-[#9b9b9b]">
                        <?php if(!empty(aboutUs()) && aboutUs()): ?>
                            <?php echo e(aboutUs()->short_description??''); ?>

                        <?php endif; ?>
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
                                <?php if(!empty(companyProfile()) && companyProfile()->email): ?>
                                    <?php echo e(companyProfile()->email); ?>

                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="phone">
                            <span class="text-[#9b9b9b] text-[14px] lg:text-[16px] font-[400]">Phone:</span>
                            <a href="tel:;" class="text-[#9b9b9b] text-[14px] lg:text-[16px] font-[400] hover:text-[#d3a971]">
                                <?php if(!empty(companyProfile()) && companyProfile()->phone): ?>
                                    <?php echo e(companyProfile()->phone); ?>

                                <?php endif; ?>
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
<?php /**PATH C:\wamp64\www\cajun-restaurant\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>