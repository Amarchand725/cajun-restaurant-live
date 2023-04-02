<section class="favourite-sec py-[100px]">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="txt text-center mb-[25px] lg:mb-[55px]">
                            <p class="text-[40px] xl:text-[50px] text-[#d3a971] block mb-[8px] leading-[1] kristi">Our
                                Favourites</p>
                            <h2
                                class="text-[45px] font-[400] mb-[10px] yeseva lg:w-9/12 mx-auto leading-[1.2] text-[#282828] mb-[30px]">
                                Discover Our Menu</h2>
                            <img src="{{ asset('/public/frontend/img/shape2.png') }}" alt="Shape" class="mx-auto mb-[20px]">
                            <p
                                class="text-[14px] sm:text-[17px] lg:text-[19px] leading-[32px] mb-[15px] text-[#9b9b9b] w-7/12 xl:pr-4 mx-auto">
                                Since our grand opening in May 1995, El Royale has won great awards from food
                                critics and organizations all over the world.</p>
                        </div>
                        <div class="col-span-12 mt-6">
                            <ul class="justify-center block gap-2 sm:flex sm:flex-row  lg:gap-3 xl:mb-10  items-center rounded-[20px] sm:py-0 py-4 sm:text-center text-start mx-auto"
                                id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                                <li class="relative group cursor-pointer inline-block lg:mb-0 mb-2 lg:mx-0 mx-1"
                                    role="presentation">
                                    <button
                                        class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222]"
                                        id="lunch-tab" data-tabs-target="#lunch" type="button" role="tab" aria-controls="lunch"
                                        aria-selected="true">
                                        Lunch
                                    </button>
                                </li>
                                <li class="relative group cursor-pointer inline-block lg:mb-0 mb-2 lg:mx-0 mx-1"
                                    role="presentation">
                                    <button
                                        class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222]"
                                        id="auto-tab" data-tabs-target="#dinner" type="button" role="tab" aria-controls="dinner"
                                        aria-selected="false">
                                        Dinner
                                    </button>
                                </li>
                                <li class="relative group cursor-pointer inline-block lg:mb-0 mb-2 lg:mx-0 mx-1"
                                    role="presentation">
                                    <button
                                        class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222]"
                                        id="dessert-tab" data-tabs-target="#dessert" type="button" role="tab"
                                        aria-controls="dessert" aria-selected="false">
                                        Dessert
                                    </button>
                                </li>
                                <li class="relative group cursor-pointer inline-block lg:mb-0 mb-2 lg:mx-0 mx-1"
                                    role="presentation">
                                    <button
                                        class="inline-block px-3 sm:py-2 py-3 text-[13px] lg:text-[16px] w-full relative aria-selected:border-b-2 aria-selected:border-b-[#d3a971] aria-selected:text-[#d3a971] font-[700] text-[#222]"
                                        id="drinks-tab" data-tabs-target="#drinks" type="button" role="tab"
                                        aria-controls="drinks" aria-selected="false">
                                        Drinks
                                    </button>
                                </li>
                            </ul>
                            <div id="myTabContent" class="my-tabed mt-5 sm:mt-14">
                                <div class="" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                                    <div class="grid grid-cols-12 gap-x-8">
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[-3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971] ">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Salmon,
                                                        butter, lemon juice, onion, garlic & salad.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs</h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Eggs,
                                                        bacon and cherry-tomatoes with bread.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971]">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Salmon, butter, lemon juice, onion, garlic & salad.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Eggs, bacon and cherry-tomatoes with bread.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="dinner" role="tabpanel" aria-labelledby="auto-tab">
                                    <div class="grid grid-cols-12 gap-x-8">
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971]">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Salmon, butter, lemon juice, onion, garlic & salad.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Eggs, bacon and cherry-tomatoes with bread.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[-3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971] ">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Salmon,
                                                        butter, lemon juice, onion, garlic & salad.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs</h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Eggs,
                                                        bacon and cherry-tomatoes with bread.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="dessert" role="tabpanel" aria-labelledby="dessert-tab">
                                    <div class="grid grid-cols-12 gap-x-8">
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[-3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971] ">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Salmon,
                                                        butter, lemon juice, onion, garlic & salad.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs</h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Eggs,
                                                        bacon and cherry-tomatoes with bread.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971]">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Salmon, butter, lemon juice, onion, garlic & salad.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Eggs, bacon and cherry-tomatoes with bread.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
                                    <div class="grid grid-cols-12 gap-x-8">
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[-3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971] ">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Salmon,
                                                        butter, lemon juice, onion, garlic & salad.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs</h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Eggs,
                                                        bacon and cherry-tomatoes with bread.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971]">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Salmon, butter, lemon juice, onion, garlic & salad.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Eggs, bacon and cherry-tomatoes with bread.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="food" role="tabpanel" aria-labelledby="food-tab">
                                    <div class="grid grid-cols-12 gap-x-8">
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[-3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971] ">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Salmon,
                                                        butter, lemon juice, onion, garlic & salad.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs</h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Eggs,
                                                        bacon and cherry-tomatoes with bread.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971]">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Salmon, butter, lemon juice, onion, garlic & salad.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Eggs, bacon and cherry-tomatoes with bread.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                                    <div class="grid grid-cols-12 gap-x-8">
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[-3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971] ">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Salmon,
                                                        butter, lemon juice, onion, garlic & salad.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs</h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Eggs,
                                                        bacon and cherry-tomatoes with bread.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971]">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Salmon, butter, lemon juice, onion, garlic & salad.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Eggs, bacon and cherry-tomatoes with bread.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                    <div class="grid grid-cols-12 gap-x-8">
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971]">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Salmon, butter, lemon juice, onion, garlic & salad.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Eggs, bacon and cherry-tomatoes with bread.
                                                    </p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich
                                                    </h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-6">
                                            <div
                                                class="card border border-[#d3a971] relative pt-[50px] px-[50px] pb-[20px] mb-[30px] lg:mb-[50px] rounded-[2px] before:content-[''] before:absolute before:top-[-4px] before:right-[2px] before:left-[-3px] before:bottom-0 before:h-full before:block before:rounded-[2px] before:border before:border-[#d3a971] ">
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Salmon Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$15.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Salmon,
                                                        butter, lemon juice, onion, garlic & salad.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[5px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Pan Of Fried Eggs</h4>
                                                    <span
                                                        class="relative inline-block bg-[#d3a971] text-white text-[12px] lg:text-[15px] leading-[30px] mb-[7px] px-[10px] rounded-[3px]">Recommended</span>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$13.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">Eggs,
                                                        bacon and cherry-tomatoes with bread.</p>
                                                </div>
                                                <div
                                                    class="content relative border-b border-dashed border-[#dbdbdb] pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>
                                                <div class="content relative pb-[16px] mb-[20px]">
                                                    <h4
                                                        class="inline-block mr-[10px] text-[18px] lg:text-[21px] mb-[7px] text-[#282828] font-[600] leading-[1.2]">
                                                        Smoked Meat Sandwich</h4>
                                                    <span
                                                        class="absolute top-0 right-0 block min-w-[50px] text-right text-[30px] lg:text-[40px] kristi text-[#d3a971] leading-[1]">$12.95</span>
                                                    <p class="text-[14px] lg:text-[18px] text-[#9b9b9b] leading-[24px]">
                                                        Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                                                </div>

                                            </div>
                                        </div>

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
