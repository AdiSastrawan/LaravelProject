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



                        <div class="">
                            <div class="container m-auto space-y-8 px-6">
                                @foreach ($rents as $rent)
                                <div class="mt-16 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                                    <div
                                        class="py-12 sm:p-12 rounded-3xl bg-white border border-gray-100 bg-opacity-80 shadow-2xl shadow-gray-600/10">
                                        <div class="space-y-16">
                                            <div class="space-y-2">
                                                <h3 class="text-2xl font-semibold text-gray-800 transition">
                                                    Room Number {{ $rent->rooms->room_number }}

                                                </h3>
                                                <p class="text-gray-600 text-base">
                                                    Resident name: {{ $rent->resident_name }}
                                                </p>
                                                <p class="text-gray-600 text-base">
                                                    Reservation name: {{ $rent->users->name }}
                                                </p>
                                                <p class="text-gray-600 text-base">
                                                    Start Date: {{ $rent->date_started }}
                                                </p>
                                                <p class="text-gray-600 text-base">
                                                    End Date: {{ $rent->date_ended }}
                                                </p>
                                                <p class="text-gray-600 text-base">
                                                    Total Price: {{ 'Rp ' . number_format($rent['total_price'], 2, ',','.') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</x-page-layout>