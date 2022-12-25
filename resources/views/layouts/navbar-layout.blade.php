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
                            class="pt-32 text-gray-700 space-y-8 md:px-4 lg:space-y-0 lg:flex lg:space-x-10 lg:pt-0">
                            <li>
                                <a href="{{ route('home') }}"
                                    class="relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                    <span class="relative text-sky-800">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="/#services"
                                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                    <span class="relative group-hover:text-sky-800">Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="/#packages"
                                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                    <span class="relative group-hover:text-sky-800">Packages</span>
                                </a>
                            </li>
                            <li>
                                <a href="/#about_us"
                                    class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2 before:origin-right before:scale-x-0 before:bg-blue-200 before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                                    <span class="relative group-hover:text-sky-800">Contact us</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('cart') }}" class="inline-flex relative items-center text-sm font-medium text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart hover:text-primary transition duration 150 ease-in-out -left-2" width="24" height="24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="6" cy="19" r="2"></circle>
                                        <circle cx="17" cy="19" r="2"></circle>
                                        <path d="M17 17h-11v-14h-2"></path>
                                        <path d="M6 5l14 1l-1 7h-13"></path>
                                    </svg>
                                    <span class="sr-only">Notifications</span>
                                    <div class="inline-flex absolute -right-5 justify-center items-center w-5 h-5 text-xs text-white bg-red-500 rounded-full border border-slate-50 dark:border-gray-900">{{ count((array) session('cart')) }}</div>
                                </a>
                            </li>
                        </ul>

                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6 lg:border-l pl-3">
                            <div class="">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                            @auth
                                            <div>{{ Auth::user()->name }}</div>
                                            @else
                                            {{ __('Login') }}
                                            @endauth

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Authentication -->
                                        @auth
                                        <x-dropdown-link :href="route('profile.edit')" class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="12" cy="12" r="9"></circle>
                                                <circle cx="12" cy="10" r="3"></circle>
                                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                            </svg>
                                            {{ __(' My Profile') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link href="{{ url('user-booking') }}" class="flex">
                                            <svg class=" mr-3 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                            {{ __(' My Booking') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')" class="flex" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                                                    </path>
                                                    <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                                                </svg>
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                        @else
                                        <x-dropdown-link :href="route('login')" class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-login" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                                <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                            </svg>
                                            {{ __('Login') }}
                                        </x-dropdown-link>
                                        <x-dropdown-link :href="route('register')" class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                <path d="M16 11h6m-3 -3v6"></path>
                                            </svg>
                                            {{ __('Register') }}
                                        </x-dropdown-link>
                                        @endauth
                                    </x-slot>

                                </x-dropdown>
                            </div>
                        </div>
                        {{-- <div
                            class="border-t py-8 px-6 md:px-12 md:py-16 lg:border-t-0 lg:border-l lg:py-0 lg:pr-0 lg:pl-6">
                            <a href="{{ url('login-acc') }}"
                                class="group font-semibold block px-6 py-3 rounded-2xl bg-gradient-to-r from-sky-300 to-sky-500 text-center text-white transition duration-200 hover:shadow-2xl">
                                Login
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--NAVIGATION BAR END-->
</nav>