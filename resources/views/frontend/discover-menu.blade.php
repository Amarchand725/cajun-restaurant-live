@extends('frontend.layouts.app')

@section('content')
    <!-- our menu start -->
    <section class="mt-[-100px]">
        <div
            class="bg-[url('public/frontend/img/our-menu-bg.jpg')] bg-cover h-[100vh] bg-no-repeat before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#0000666] before:z-[0] relative w-full flex flex-col items-center justify-center py-10">
            <div class="txt">
            <h4 class="relative z-[999999] pt-[110px] kristi text-center lg:text-[45px] md:text-[35px] text-[30px] text-[#f9f9f9] mb-3">
                Discover
            </h4>
            <h1
                class="relative z-[999999] text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400] ">
                Our Menu</h1>
            </div>

        </div>
    </section>
    <!-- our menu end -->

    <!-- discover menu start -->
    <section class="">
        <div class="discover-menu lg:py-[100px] py-10">
            <div class="max-w-8xl mx-auto 2xl:px-0 lg:px-4 px-3">
                <div class="">
                      <h3
                            class="lg:text-[45px] md:text-[35px] text-[30px] kristi mb-[8px] text-center text-[#d3a971]">
                            Taste The Best
                        </h3>
                        <h1
                            class="yeseva sm:text-[37px] text-[25px] font-[400] mb-[10px] text-center leadin g-[1.2] text-[#282827]">
                            Discover Our Menu</h1>
                        <img src="{{url('public/frontend/img/heading-icon.png')}}" alt="" class="mx-auto mb-[20px]">
                        <p
                            class="text-[14px] leading-[24px] font-[400] text-center text-[#9b9b9b] lg:w-6/12 w-full mx-auto">
                            Even if you're not a great chef, there's nothing to stop you understanding the
                            difference between what tastes good and what doesn't.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discover menu end -->

    <!-- breakfast menu start -->
    <section class="">
        <div class="breakfast-menu">
            <div
                class="bg-[url('public/frontend/img/break-fast-bg.jpg')] h-[70vh] bg-cover bg-center bg-fixed bg-no-repeat w-full lg:pt-[125px] lg:pb-[105] py-10 before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[0] relative">
                <div class="txt text-center relative z-[99999]">
                <h4 class="kristi lg:text-[40px] md:text-[35px] text-[30px] mb-[10px] text-[#fff] text-center">
                    Starts At 11:00 am
                </h4>
                <h2
                    class="text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px] font-[400]">
                    Breakfast Menu</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- breakfast menu end -->

    <!-- chicken breast start -->
    <section class="">
        <div class="chicken-breast">
            <div class="max-w-7xl mx-auto lg:pt-[100px] lg:pb-[80px] py-10 2xl:px-0 lg:px-4 px-3">
                <div class="grid grid-cols-12 lg:gap-x-9 gap-5">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $33.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken
                                Breast</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Paupiette of chicken,
                                blue cheese, rosemary.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $41.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                Steak</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                juice, onion, garlic & salad.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $33.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken
                                Crispy</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Smoked quail, crispy
                                egg, spelt, girolles, parsley.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $26.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Grilled
                                Fillet</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Pork fillet, ginger,
                                garlic, honey, pepper & oil.</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $27.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                Steak</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                juice, onion, garlic & salad.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $12.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Smoked
                                Meat Sandwich</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Baguette, basil,
                                arugula, olives, cherry-tomatoes.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $15.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                Sandwich</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                juice, onion, garlic & salad</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $13.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Pan Of
                                Fried Eggs</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Eggs, bacon and
                                cherry-tomatoes with bread.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $20.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Breakfast Set</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Croissants with
                                strawberries, mascarpone, honey.</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $18.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Healthy
                                Breakfast</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Oat granola with fresh
                                blueberries, almond.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $8.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Traditional Pancakes</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Paupiette of chicken,
                                blue cheese, rosemary.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $14.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">American
                                Brunch</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Applewood smoked bacon,
                                tomatoes</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $15.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Cannoli
                                With Cream Cheese</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Cheese, eggs,
                                strawberries, butter & maple</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $9.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Chocolate Cherry Cake</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Vanilla, milk, dark
                                chocolate, cherries</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $3.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Pain Au
                                Chocolat</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Homemade croissant
                                contain a bar of</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chicken breast end -->

    <!-- lunch menu start -->
    <section class="">
        <div class="breakfast-menu">
            <div
                class="bg-[url('public/frontend/img/lunch-menu.jpg')] h-[70vh] bg-cover bg-center bg-fixed bg-no-repeat w-full lg:pt-[125px] lg:pb-[105] py-10 before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[0] relative">
                <div class="txt text-center relative z-[99999]">
                <h4 class="relative z-[999999] kristi lg:text-[45px] md:text-[35px] text-[30px] mb-[10px] text-[#fff] text-center">
                    Starts At 2:00 pm
                </h4>
                <h2
                    class="relative z-[999999] text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px]  font-[400]">
                    Lunch Menu</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- lunch  menu end -->

    <!-- smoke meat start -->
    <section class="">
        <div class="chicken-breast">
                <div class="max-w-7xl mx-auto lg:pt-[100px] lg:pb-[80px] py-10 2xl:px-0 lg:px-4 px-3">
                    <div class="grid grid-cols-12 lg:gap-x-9 gap-5">
                        <div class="lg:col-span-4 md:col-span-6 col-span-12">
                            <div class="">
                                <img src="{{url('public/frontend/img/smoke-meat.jpg')}}" alt="" class="pb-[40px]">
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $12.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Smoked
                                    Meat Sandwich</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Baguette, basil,
                                    arugula, olives, cherry-tomatoes.</p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $15.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                    Sandwich</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                    juice, onion, garlic & salad.</p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $13.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Pan Of
                                    Fried Eggs</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Eggs, bacon and
                                    cherry-tomatoes with bread.</p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $20.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                    Breakfast Set</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Croissants with
                                    strawberries, mascarpone, honey.</p>
                            </div>
                            <div class="relative pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $18.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Healthy
                                    Breakfast</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Oat granola with fresh
                                    blueberries, almond.</p>
                            </div>
                        </div>
                        <div class="lg:col-span-4 md:col-span-6 col-span-12">
                            <div class="">
                                <img src="{{url('public/frontend/img/traditional.jpg')}}" alt="" class="pb-[40px]">
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $8.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                    Traditional Pancakes</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Paupiette of chicken,
                                    blue cheese, rosemary.</p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $14.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">American
                                    Brunch</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Spplewood smoked bacon,
                                    tomatoes</p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $15.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Cannoli
                                    With Cream Cheese</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Cheese, eggs,
                                    strawberries, butter & maple </p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $9.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                    Chocolate Cherry Cake</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Vanilla, milk, dark
                                    chocolate, cherries</p>
                            </div>
                            <div class="relative pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $3.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Pain Au
                                    Chocolat</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Homemade croissant
                                    contain a bar of</p>
                            </div>
                        </div>
                        <div class="lg:col-span-4 md:col-span-6 col-span-12">
                            <div class="">
                                <img src="{{url('public/frontend/img/chicken-breast.jpg')}}" alt="" class="pb-[40px]">
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $33.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken
                                    Breast</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Paupiette of chicken,
                                    blue cheese, rosemary.</p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $41.95</p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                    Steak</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                    juice, onion, garlic & salad. </p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $33.95 </p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken
                                    Crispy</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Smoked quail, crispy
                                    egg, spelt, girolles, parsley. </p>
                            </div>
                            <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $26.95 </p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Grilled
                                    Fillet</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Pork fillet, ginger,
                                    garlic, honey, pepper & oil. </p>
                            </div>
                            <div class="relative pb-[11px] mb-5">
                                <p
                                    class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                    $27.95 </p>
                                <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                    Steak</h3>
                                <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                    juice, onion, garlic & salad. </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- smoke meat end -->

    <!-- dinner menu start -->
    <section class="">
        <div class="breakfast-menu">
            <div
                class="bg-[url('public/frontend/img/dinner-menu.jpg')] h-[70vh] bg-cover bg-center bg-fixed bg-no-repeat w-full lg:pt-[125px] lg:pb-[105] py-10 before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[0] relative">
                <div class="txt text-center relative z-[99999]">
                <h4 class="relative z-[999999] kristi lg:text-[45px] md:text-[35px] text-[30px] mb-[10px] text-[#fff] text-center">
                    Starts At 7:00 pm
                </h4>
                <h2
                    class="relative z-[999999] text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px]  font-[400]">
                    Dinner Menu</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- dinner menu end -->

    <!-- chicken breast start -->
    <section class="">
        <div class="chicken-breast">
            <div class="max-w-7xl mx-auto lg:pt-[100px] lg:pb-[80px] py-10 2xl:px-0 lg:px-4 px-3">
                <div class="grid grid-cols-12 lg:gap-x-9 gap-5">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $33.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken
                                Breast</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Paupiette of chicken,
                                blue cheese, rosemary.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $41.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                Steak</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                juice, onion, garlic & salad.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $33.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken
                                Crispy</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Smoked quail, crispy
                                egg, spelt, girolles, parsley.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $26.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Grilled
                                Fillet</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Pork fillet, ginger,
                                garlic, honey, pepper & oil.</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $27.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                Steak</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                juice, onion, garlic & salad.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $12.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Smoked
                                Meat Sandwich</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Baguette, basil,
                                arugula, olives, cherry-tomatoes.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $15.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                Sandwich</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                juice, onion, garlic & salad</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $13.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Pan Of
                                Fried Eggs</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Eggs, bacon and
                                cherry-tomatoes with bread.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $20.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Breakfast Set</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Croissants with
                                strawberries, mascarpone, honey.</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $18.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Healthy
                                Breakfast</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Oat granola with fresh
                                blueberries, almond.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $8.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Traditional Pancakes</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Paupiette of chicken,
                                blue cheese, rosemary.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $14.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">American
                                Brunch</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Applewood smoked bacon,
                                tomatoes</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $15.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Cannoli
                                With Cream Cheese</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Cheese, eggs,
                                strawberries, butter & maple</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $9.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Chocolate Cherry Cake</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Vanilla, milk, dark
                                chocolate, cherries</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $3.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Pain Au
                                Chocolat</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Homemade croissant
                                contain a bar of</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chicken breast end -->

    <!-- dinner menu start -->
    <section class="">
        <div class="breakfast-menu">
            <div
                class="bg-[url('public/frontend/img/desert-menu.jpg')] h-[70vh] bg-cover bg-center bg-fixed bg-no-repeat w-full lg:pt-[125px] lg:pb-[105] py-10 before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[0] relative">
                <div class="txt text-center relative z-[99999]">
                <h4 class="relative z-[999999] kristi lg:text-[45px] md:text-[35px] text-[30px] mb-[10px] text-[#fff] text-center">
                    Don’t Miss
                </h4>
                <h2
                    class="relative z-[999999] text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px]  font-[400]">
                    Dessert Menu</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- dinner menu end -->

    <!-- chicken breast start -->
    <section class="">
        <div class="chicken-breast">
            <div class="max-w-7xl mx-auto lg:pt-[100px] lg:pb-[80px] py-10 2xl:px-0 lg:px-4 px-3">
                <div class="grid grid-cols-12 lg:gap-x-9 gap-5">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $33.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken
                                Breast</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Paupiette of chicken,
                                blue cheese, rosemary.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $41.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                Steak</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                juice, onion, garlic & salad.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $33.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken
                                Crispy</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Smoked quail, crispy
                                egg, spelt, girolles, parsley.</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $26.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Grilled
                                Fillet</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Pork fillet, ginger,
                                garlic, honey, pepper & oil.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $12.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Smoked
                                Meat Sandwich</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Baguette, basil,
                                arugula, olives, cherry-tomatoes.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $15.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Salmon
                                Sandwich</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Salmon, butter, lemon
                                juice, onion, garlic & salad</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $13.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Pan Of
                                Fried Eggs</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Eggs, bacon and
                                cherry-tomatoes with bread.</p>
                        </div>
                        <div class="relative  pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $20.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Breakfast Set</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Croissants with
                                strawberries, mascarpone, honey.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $8.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Traditional Pancakes</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Paupiette of chicken,
                                blue cheese, rosemary.</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $14.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">American
                                Brunch</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Applewood smoked bacon,
                                tomatoes</p>
                        </div>
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $15.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Cannoli
                                With Cream Cheese</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Cheese, eggs,
                                strawberries, butter & maple</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $9.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Chocolate Cherry Cake</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Vanilla, milk, dark
                                chocolate, cherries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chicken breast end -->

    <!-- drink menu start -->
    <section class="">
        <div class="breakfast-menu">
            <div
                class="bg-[url('public/frontend/img/drinks-img.jpg')] h-[70vh] bg-cover bg-center bg-fixed bg-no-repeat w-full lg:pt-[125px] lg:pb-[105] py-10 before:content-[''] before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-[#00000066] before:z-[0] relative">
                <div class="txt text-center relative z-[99999]">
                <h4 class="relative z-[999999] kristi lg:text-[45px] md:text-[35px] text-[30px] mb-[10px] text-[#fff] text-center">
                    Don’t Miss
                </h4>
                <h2
                    class="relative z-[999999] text-[#fff] text-center lg:text-[55px] md:text-[45px] sm:text-[35px] yeseva text-[28px]  font-[400]">
                    Drinks Menu</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- drink menu end -->

    <!-- drink set start -->
    <section class="">
        <div class="chicken-breast">
            <div class="max-w-7xl mx-auto lg:pt-[100px] lg:pb-[80px] py-10 2xl:px-0 lg:px-4 px-3">
                <div class="grid grid-cols-12 lg:gap-x-9 gap-5">
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $20.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Drinks Set</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Croissants with strawberries, mascarpone, honey.</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $18.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Healthy Breakfast</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Oat granola with fresh blueberries, yogurt.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $33.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chicken Crispy</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Smoked quail, crispy egg, spelt, girolles, parsley.</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $26.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Grilled Fillet</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Pork fillet, ginger, garlic, honey & canola oil.</p>
                        </div>
                    </div>
                    <div class="lg:col-span-4 md:col-span-6 col-span-12">
                        <div class="relative border-dashed border-b-[1px] border-[#dbdbdb] pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $15.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">
                                Cannoli With Cream Cheese</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Cheese, eggs, strawberries, butter & maple</p>
                        </div>
                        <div class="relative pb-[11px] mb-5">
                            <p
                                class="absolute top-0 right-0 block lg:min-w-[50px] w-full text-right text-[#d3a971] kristi text-[30px] lg:text-[35px] leading-[1]">
                                $9.95</p>
                            <h3 class="capitalize text-[16px] lg:text-[21px] font-[600] leading-[1.2] mb-[7px] text-[#282828]">Chocolate Cherry Cake</h3>
                            <p class="text-[14px] lg:text-[16px] leading-[24px] font-[#9b9b9b] text-[#9b9b9b]">Vanilla, milk, dark chocolate, cherries</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- drink set end -->
@endsection
