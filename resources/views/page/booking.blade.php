<x-page-layout>
    <!--BOOKING SECTION START-->
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="booking" class="items-center">
            <!--NAVIGATION DETAILS-->

            <div class="relative w-full">
                <div class="pt-24">
                    <h4 class="ml-10 text-gray-500 font-semibold text-xl">
                        Packages
                        <span class="text-gray-400 font-semibold text-xl">
                            > Details > Cart > Data > Payment > Finish
                        </span>
                    </h4>
                </div>
                <br><br>
            </div>

            <div class="items-center lg:pt-30 lg:m-auto">

                <!--HEADER CONTENT-->
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">
                        TYPE OF PACKAGES
                    </h4>
                    <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">
                        Choose Your Packages
                    </h2>
                    <p class="font-medium text-md text-slate-800 md:text-lg">
                        There are 3 types of packages that you can choose according to the facilities and prices that
                        you think are
                        the most suitable
                    </p>
                </div>
            </div>
            <div class="lg:w-3/4 xl:w-2/4 lg:mx-auto space-y-5">
                <!--PACKAGE TEMPLATE-->
                @foreach ($rooms as $key=>$item)
                <div
                    class="group border-gray-300 relative -mx-4 sm:-mx-8 p-6 sm:p-8 rounded-2xl bg-slate-50 border border-transparent hover:border-gray-100 hover:bg-sky-50 shadow-2xl shadow-transparent hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300 hover:z-10">
                    <!--IMAGE-->
                    <div
                        class="sm:w-2/6 rounded-3xl overflow-hidden transition-all duration-500 group-hover:rounded-xl">
                        <img src="{{$item->packages->feature_img}}"
                            class="sm:h-full object-cover object-top transition duration-500 group-hover:scale-105" />
                    </div>
                    <!--CONTENT-->
                    <div class="sm:p-2 sm:pl-0 sm:w-4/6">
                        <span class="mt-4 mb-2 inline-block font-medium text-red-600 sm:mt-0">4 rooms left</span>
                        <span class="pl-28 mt-4 mb-2 inline-block font-medium text-gray-700 sm:mt-0">| Rooms no </span>
                        {{$item->room_number}}
                        <h3 class="text-2xl font-semibold text-primary">
                            {{$item->packages->package_name}}
                        </h3>
                        <p class="my-6 text-gray-600">
                            {{$item->packages->package_desc}}
                        </p>
                        <div class="flex flex-row space-x-3">
                            <div
                                class="bg-white px-3 py-1 rounded-xl border border-gray-300 text-sm font-medium text-gray-600 transition duration-300">
                                Rp {{$item->prices->monthly_price}}<span class="text-gray-400">/month</span>
                            </div>

                            <div
                                class="bg-white px-3 py-1 rounded-xl border border-gray-300 text-sm font-medium text-gray-600 transition duration-300">
                                max {{$item->max_resident}} person
                            </div>

                            <a href="{{ url('booking-details') }}"
                                class="bg-white px-3 py-1 rounded-xl border border-gray-300 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                                Details
                            </a>
                        </div>
                    </div>
                </div>   
                @endforeach
            </div>
        </section>
    </div>
    <!--BOOKING SECTION END-->
</x-page-layout>