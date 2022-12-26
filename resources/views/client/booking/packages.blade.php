<x-page-layout>
    <!--BOOKING SECTION START-->
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="packages" class="items-center">

            <!--NAVIGATION DETAILS-->
            <div class="relative w-full pl-10">
                <div class="pt-24">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="{{ url('packages') }}" class="inline-flex items-center text-lg font-semibold text-gray-600 hover:text-gray-900">
                                    Packages
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">
                                    Details
                                </span>
                                </div>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <a href="{{ url('cart') }}" class="ml-1 text-lg font-medium text-gray-500 md:ml-2">
                                    Cart
                                </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <br><br>
            </div>            
            <!--NAVIGATION DETAILS-->

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
                @foreach ($packages as $key=>$item)
                <div
                    class="group border-gray-300 relative -mx-4 sm:-mx-8 p-6 sm:p-8 rounded-2xl bg-slate-50 border border-transparent hover:border-gray-100 hover:bg-sky-50 shadow-2xl shadow-transparent hover:shadow-gray-600/10 sm:gap-8 sm:flex transition duration-300 hover:z-10">
                    <!--IMAGE-->
                    <div
                        class="sm:w-2/6 rounded-3xl overflow-hidden transition-all duration-500 group-hover:rounded-xl">
                        <img src="{{ asset('img/' . $item->feature_img) }}""
                            class="sm:h-full object-cover object-top transition duration-500 group-hover:scale-105" />
                    </div>
                    <!--CONTENT-->
                    <div class="sm:p-2 sm:pl-0 sm:w-4/6">
                        <span class="mt-4 mb-2 inline-block font-medium text-red-600 sm:mt-0">4 rooms left</span>
                        {{-- <span class="pl-28 mt-4 mb-2 inline-block font-medium text-gray-700 sm:mt-0">| Rooms no </span> --}}
                        
                        <h3 class="text-2xl font-semibold text-primary">
                            {{$item->package_name}}
                        </h3>
                        <p class="my-6 text-gray-600">
                            {{$item->package_desc}}
                        </p>
                        <div class="flex flex-row space-x-3">
                            <div
                                class="bg-white px-3 py-1 rounded-xl border border-gray-300 text-sm font-medium text-gray-600 transition duration-300">
                                {{"Rp " . number_format($item->prices['monthly_price'],2,',','.');}}<span class="text-gray-400">/month</span>
                            </div>

                            {{-- <div
                                class="bg-white px-3 py-1 rounded-xl border border-gray-300 text-sm font-medium text-gray-600 transition duration-300">
                                max  person
                            </div> --}}

                            <a href="details/{{ $item['package_id'] }}"
                                class="bg-white px-3 py-1 rounded-xl border border-gray-300 text-sm font-medium text-gray-600 transition duration-300 hover:border-transparent">
                                Details
                            </a>

                            <div class="flex flex-row space-x-4 mt-4 lg:mt-0 md:mt-0">
                                <a href="{{ route('add-to-cart', $item->package_id) }}">
                                    <button
                                        class="h-5 items-center justify-center  rounded-full text-primary bg-violet-50 hover:text-red-500 transition duration 150 ease-in-out"
                                        type="button" aria-label="Cart" id="cart">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" fill="currentColor" class="bi bi-cart3"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </button>
                                </a>
                                <button
                                    class="h-5 items-center justify-center  rounded-full text-primary bg-violet-50 hover:text-red-500 transition duration 150 ease-in-out"
                                    type="button" aria-label="Like">
                                    <svg width="20" height="20" fill="currentColor"
                                        ariahidden="true">
                                        <path fill-rule="evenodd" cliprule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>   
                @endforeach
            </div>
        </section>
    </div>
    <!--BOOKING SECTION END-->
</x-page-layout>