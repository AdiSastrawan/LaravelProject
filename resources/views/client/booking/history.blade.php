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
                                <div class="mt-16 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                                    @foreach ($rents as $rent)
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
                                                    Total Price:
                                                    {{ 'Rp ' . number_format($rent['total_price'], 2, ',', '.') }}
                                                </p>
                                                @if ( $rent->validation == 1 )
                                                <ul class="py-1">
                                                    <li class="list-none">
                                                        <div
                                                            class="block pb-2 pl-2 text-gray-600 text-base">
                                                            <div class="inline-flex items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="20px" height="20px" viewBox="0 0 36 36"
                                                                    aria-hidden="true" role="img"
                                                                    class="iconify iconify--twemoji"
                                                                    preserveAspectRatio="xMidYMid meet">
                                                                    <path fill="#77B255"
                                                                        d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                                                    <path fill="#FFF"
                                                                        d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                                                </svg>
                                                                <div class="pl-4">
                                                                    Room is ready to use
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @else
                                                    <li class="list-none">
                                                        <div
                                                            class="block pb-2 pl-2 text-gray-600 text-base">
                                                            <div class="inline-flex items-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="30px" height="30px" viewBox="0 0 512 512"
                                                                    aria-hidden="true" role="img"
                                                                    class="iconify iconify--fxemoji"
                                                                    preserveAspectRatio="xMidYMid meet">
                                                                    <path fill="#FF473E"
                                                                        d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                                                </svg>
                                                                <div class="pl-4">
                                                                    Room can't be use, waiting for validation
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</x-page-layout>