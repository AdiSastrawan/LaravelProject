<x-page-layout>
    <div class="md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="cart" class="items-center">

            <!--NAVIGATION DETAILS-->
            <div class="relative w-full pl-10">
                <div class="pt-8">
                    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden sm:py-12">
                        <div
                            class="absolute inset-0  bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]">
                        </div>
                        <div
                            class="relative bg-white px-6 pt-5 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
                            <div class="mx-auto max-w-md">
                                <div class="divide-y divide-gray-300/50 text-center">
                                    <div class="text-base text-gray-600">
                                        <div class="pl-6">
                                            <img src="/img/Success2.png" class="" width="350" height="250" />
                                        </div>
                                        <p class="font-semibold text-base">
                                            Your payment is successful and the room is successfully booked.
                                            Thank you and have a nice day!
                                        </p>
                                    </div>
                                    <div class="pt-8 text-base font-medium">
                                        <p class="text-gray-900 pb-4">Check in "My Booking" menu to see more details</p>
                                        <div class="text-center">
                                            <button
                                                class=" text-white bg-primary hover:bg-sky-600 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2focus:outline-none items-center">
                                                <a href="{{ url('history') }}">My Booking</a>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-page-layout>