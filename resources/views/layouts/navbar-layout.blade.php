<nav class="w-full fixed table-fixed z-[100] border-b bg-white">
    <!--NAVIGATION BAR START-->
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <div class="flex items-center justify-between">
            <!--LOGO-->
            <div class="relative z-20">
                <h1 class="ml-10 text-primary font-bold text-3xl">kos.kita</h1>
            </div>
            <!--NAVIGATION BAR-->
            <div class="flex items-center justify-end border-l lg:border-l-0">
                <!--HAMBURGER MENU-->
                <input type="checkbox" name="hamburger" id="hamburger" class="peer hidden">
                <label for="hamburger"
                    class="peer-checked:hamburger block relative z-20 p-6 -mr-6 cursor-pointer lg:hidden">
                    <div aria-hidden="true" class="m-auto h-0.5 w-6 rounded bg-sky-900 transition duration-300">
                    </div>
                    <div aria-hidden="true" class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 transition duration-300">
                    </div>
                </label>
                <!--SIDEBAR-->
                <div
                    class="peer-checked:translate-x-0 fixed inset-0 w-[calc(100%-4.5rem)] translate-x-[-100%] bg-white border-r shadow-xl transition duration-300 lg:border-r-0 lg:w-auto lg:static lg:shadow-none lg:translate-x-0">
                    <!--LIST MENU-->
                    <div class="flex flex-col h-full justify-between lg:items-center lg:flex-row">
                        <ul
                            class="px-6 pt-32 text-gray-700 space-y-8 md:px-12 lg:space-y-0 lg:flex lg:space-x-12 lg:pt-0">
                            <li>
                                <a href="{{ url('home') }}"
                                    class="relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                    <span class="relative text-sky-800">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('home#services') }}"
                                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                    <span class="relative group-hover:text-sky-800">Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('home#blogs') }}"
                                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                    <span class="relative group-hover:text-sky-800">Blogs</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('home#about_us') }}"
                                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                    <span class="relative group-hover:text-sky-800">Contact us</span>
                                </a>
                            </li>
                        </ul>
                        <div
                            class="border-t py-8 px-6 md:px-12 md:py-16 lg:border-t-0 lg:border-l lg:py-0 lg:pr-0 lg:pl-6">
                            <a href="{{ url('booking') }}"
                                class="group font-semibold block px-6 py-3 rounded-2xl bg-gradient-to-r from-sky-300 to-sky-500 text-center text-white transition duration-200 hover:shadow-2xl">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--NAVIGATION BAR END-->
</nav>