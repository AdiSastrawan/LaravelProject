<x-page-layout>
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="booking" class="items-center">
            <div class="items-center lg:pt-30 lg:m-auto">
                <div class="relative w-full pl-10">
                    <div class="pt-24">
                        <!--HEADER CONTENT-->
                        <div class="max-w-xl mx-auto text-center mb-16">
                            <h4 class="font-semibold text-lg text-primary mb-2">
                                HISTORY
                            </h4>
                            <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">
                                My Booking Room
                            </h2>
                        </div>
                    </div>
                    @foreach ($rents as $rent)
                        <div
                            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                {{ $rent->resident_name }}
                            </h5>
                            <p class="font-normal text-gray-700">Room-{{ $rent->rooms->room_number }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-page-layout>
