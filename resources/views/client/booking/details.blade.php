<x-page-layout>
    <!--DETAILS SECTION START-->
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="details" class="items-center">

            <!--NAVIGATION DETAILS-->
            <div class="relative w-full pl-10">
                <div class="pt-24">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="{{ url('packages') }}"
                                    class="inline-flex items-center text-lg font-medium text-gray-500 hover:text-gray-900">
                                    Packages
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <a href=""
                                        class="ml-1 text-lg font-semibold text-gray-600 hover:text-gray-900 md:ml-2">
                                        Details
                                    </a>
                                </div>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">
                                        Cart
                                    </span>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <br><br>
                <div class="max-w-xl mx-auto text-center my-5">
                    <h4 class="font-semibold text-lg text-primary mb-2">
                        DETAILS OF PACKAGES
                    </h4>
                    <h2 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">
                        {{ $package['package_name'] }}
                    </h2>
                    <p class="font-medium text-md text-slate-800 md:text-lg">
                        In {{ $package['package_name'] }} you will get the following facilities and services
                        which will be explained at the bottom
                    </p>
                </div>
            </div>


            <!--PACKAGE ROOM DETAILS-->
            <div class="md:px-12 lg:px-24">
                <div class="overflow-x-hidden -mx-4 md:mx-0">
                    <div class="container m-auto py-4 overflow-x-auto">
                        <div
                            class="h-[60vh] w-[130vh] md:h-full md:w-full grid grid-cols-12 grid-rows-4 pl-8 pr-4 md:pl-0 md:pr-0 divide-x gap-4">
                            <!--IMAGES GRID-->
                            <div
                                class="col-span-4 row-span-4 md:col-span-8 lg:col-span-6 md:h-[25rem] lg:h-[31rem] px-2 py-6">
                                <img src="{{ asset('img') }}/{{ $package->feature_img }}"
                                    class="h-full w-full rounded-xl object-cover">
                            </div>
                            <div class="col-span-4 row-span-2 lg:col-span-3 lg:h-60 p-2 pt-6 rounded-bl-xl">
                                <img src="{{ asset('img') }}/{{ $package->feature_img }}"
                                    class="h-full w-full rounded-xl object-cover">
                            </div>
                            <div
                                class="col-span-4 row-span-2 lg:col-span-3 lg:h-60 p-2 pt-6 md:pt-2 lg:pt-6 rounded-bl-xl md:rounded-tl-xl">
                                <img src="{{ asset('img') }}/{{ $package->feature_img }}"
                                    class="h-full w-full rounded-xl object-cover">
                            </div>
                            <div
                                class="col-span-5 row-span-2 md:col-span-7 lg:col-span-4 lg:h-60 p-2 pb-6 rounded-tl-xl">
                                <img src="{{ asset('img') }}/{{ $package->feature_img }}"
                                    class="h-full w-full rounded-xl object-cover">
                            </div>
                            <div
                                class="col-span-3 row-span-2 md:col-span-5 lg:col-span-2 lg:h-60 p-2 pb-6 rounded-tl-xl">
                                <img src="{{ asset('img') }}/{{ $package->feature_img }}"
                                    class="h-full w-full rounded-xl object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--ROOM DETAILS-->
            <div class="container px-6 max-w-md mx-auto sm:max-w-xl md:max-w-5xl lg:flex">
                <div class="lg:w-1/2">
                    <div class="p-3">
                        <h3 class="font-semibold text-lg text-primary mb-2">
                            Spesifikasi Tipe Kamar
                        </h3>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Size {{ $package->facilities->size }}
                        </p>
                    </div>

                    <div class="p-3">
                        <h3 class="font-semibold text-lg text-primary mb-2">
                            Fasilitas Kamar
                        </h3>
                        @if ($package->facilities->bed == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Bed
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Bed
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->pillow == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Pillow
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Pillow
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->desk == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Desk
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Desk
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->chair == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Chair
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Chair
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->cupboard == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Cupboard
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Cupboard
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->mirror == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Mirror
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Mirror
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->window == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Window
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Window
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->ac == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            AC
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            AC
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>

                    <div class=" p-3">
                        <h3 class="font-semibold text-lg text-primary mb-2">
                            Fasilitas Kamar Mandi
                        </h3>
                        @if ($package->facilities->toilet == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Toilet
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Toilet
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->tub == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Tub
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Tub
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>

                        @if ($package->facilities->shower == 1)
                        <ul class="py-1">
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 36 36" aria-hidden="true" role="img"
                                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#77B255"
                                                d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                            <path fill="#FFF"
                                                d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                        </svg>
                                        <div class="pl-4">
                                            Shower
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="list-none">
                                <div class="block pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                                    <div class="inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px"
                                            viewBox="0 0 512 512" aria-hidden="true" role="img"
                                            class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                            <path fill="#FF473E"
                                                d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                        </svg>
                                        <div class="pl-4">
                                            Shower
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>

                    <div class=" p-3">
                        <h3 class="font-semibold text-lg text-primary mb-2">
                            Fasilitas Umum
                        </h3>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            WiFi
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Garage
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Boarding House Keeper
                        </p>
                    </div>

                    <div class="  p-3">
                        <h3 class="font-semibold text-lg text-primary mb-2">
                            Peraturan
                        </h3>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            24 Hours Access
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Fines for damage to goods
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            It is forbidden to bring animals
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Rooms are for tenants only
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Max. 1 person/room
                        </p>
                    </div>

                    <div class=" p-3">
                        <h3 class="font-semibold text-lg text-primary mb-2">
                            Lokasi dan lingkungan sekitar
                        </h3>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Circle K - 826 m
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Universitas Pendidikan Ganesha - 1.2 km
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            RS Umum Jaya - 1.6 km
                        </p>
                    </div>

                    <div class=" p-3">
                        <h3 class="font-semibold text-lg text-primary mb-2">
                            Ketentuan Pengajuan Sewa
                        </h3>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Calon penyewa wajib sertakan KTP
                        </p>
                        <p class="pb-2 pl-2 font-medium text-md text-slate-800 md:text-lg">
                            Pembayaran uang sewa dilakukan setiap bulannya
                        </p>
                    </div>
                </div>

                <!--FILL IN DATA-->
                <div class="lg:w-1/2 space-y-5">
                    <form action="{{ route('add-to-cart') }}" method="POST">
                        @csrf
                        <div class="bg-slate-50 p-6 mb-9 rounded-xl">
                            <h3 class="font-semibold text-2xl text-gray-700 mb-2">
                                {{ 'Rp ' . number_format($package->prices['monthly_price'], 2, ',', '.') }}<span
                                    class="text-gray-400">/month</span>
                            </h3>

                            <div class="flex bg-white rounded-xl space-x-0 mb-6 items-center">
                                <div class="w-1/2">
                                    <button class="py-15 relative group overflow-hidden pl-6 h-12 flex items-center">
                                        <span class="relative font-semibold text-gray-500 ">Start Date</span>
                                </div>
                                <div class="w-1/2">
                                    <input type="date" id="start_date" name="start_date"
                                        class="justify-center hover:bg-gray-100 border-none" required>
                                </div>
                            </div>

                            <div class="flex bg-white rounded-xl space-x-0 mb-6 items-center">
                                <div class="w-1/2">
                                    <button class="py-15 relative group overflow-hidden pl-6 h-12 flex items-center">
                                        <span class="relative font-semibold text-gray-500 ">End Date</span>
                                </div>
                                <div class="w-1/2">
                                    <input type="date" id="end_date" name="end_date" readonly
                                        class="justify-center hover:bg-gray-100 border-none" required>
                                </div>
                            </div>

                            <div class="flex bg-white rounded-xl space-x-0 mb-6">
                                <div class="w-1/2">
                                    <label class="py-4 relative group overflow-hidden pl-6 h-12 flex items-center">
                                        <span class="relative font-semibold text-gray-500 ">Room</span>
                                </div>
                                <div class="w-1/2 pl-4 items-center">
                                    <select name="room" class="justify-center border-none hover:bg-gray-100" required>
                                        @foreach ($rooms as $room)
                                        <option value="{{ $room->room_id }}">Room {{ $room->room_number }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="bg-slate-50 mt-6 pb-14 rounded-xl justify-items-center">
                                <h3 class="font-semibold text-2xl text-gray-700 pb-4">
                                    Fill the Resident Data
                                </h3>
                                <!--FULL NAME-->
                                <div class="pb-5 h-14 items-center mb-6">
                                    <label id="name" class="text-base text-primary font-bold pb-4">
                                        Full Name
                                    </label>
                                    <input type="text" id="name" name="name" placeholder="type your name" required
                                        class="w-full border-none bg-white text-gray-600 p-3 rounded-2xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">
                                </div>

                                <!--GENDER-->
                                <div class="py-2 h-14 items-center mb-6">
                                    <label id="gender" class="text-base text-primary font-bold">
                                        Gender
                                    </label>
                                    <div class="flex p-2">
                                        <div class="w-1/2">
                                            <label class="cursor-pointer">
                                                <input type="radio" class="peer sr-only" id="gender" name="gender"
                                                    value="1" required />
                                                <div
                                                    class="w-32 rounded-2xl bg-white p-3 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-primary peer-checked:ring-primary peer-checked:ring-offset-2">
                                                    <div class="flex flex-col gap-1">
                                                        <div class="flex items-center justify-between">
                                                            <p class="text-sm font-semibold text-gray-500">Male</p>
                                                            <div>
                                                                <svg width="24" height="24" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-end justify-between"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="w-1/2">
                                            <label class="cursor-pointer">
                                                <input type="radio" class="peer sr-only" id="gender" name="gender"
                                                    value="0" required />
                                                <div
                                                    class="w-32 rounded-2xl bg-white p-3 text-gray-600 ring-2 ring-transparent transition-all hover:shadow peer-checked:text-primary peer-checked:ring-primary peer-checked:ring-offset-2">
                                                    <div class="flex flex-col gap-1">
                                                        <div class="flex items-center justify-between">
                                                            <p class="text-sm font-semibold text-gray-500">Female
                                                            </p>
                                                            <div>
                                                                <svg width="24" height="24" viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="m10.6 13.8l-2.175-2.175q-.275-.275-.675-.275t-.7.3q-.275.275-.275.7q0 .425.275.7L9.9 15.9q.275.275.7.275q.425 0 .7-.275l5.675-5.675q.275-.275.275-.675t-.3-.7q-.275-.275-.7-.275q-.425 0-.7.275ZM12 22q-2.075 0-3.9-.788q-1.825-.787-3.175-2.137q-1.35-1.35-2.137-3.175Q2 14.075 2 12t.788-3.9q.787-1.825 2.137-3.175q1.35-1.35 3.175-2.138Q9.925 2 12 2t3.9.787q1.825.788 3.175 2.138q1.35 1.35 2.137 3.175Q22 9.925 22 12t-.788 3.9q-.787 1.825-2.137 3.175q-1.35 1.35-3.175 2.137Q14.075 22 12 22Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-end justify-between"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                {{-- TELPHONE --}}
                                <div class="pt-4 pb-8 h-14 items-center mb-6">
                                    <div class="py-4">
                                        <label id="term1" class="text-base text-primary font-bold">
                                            Telephone
                                        </label>
                                        <input type="number" name="number" value="" placeholder="type your number phone"
                                            required
                                            class="w-full border-none bg-white text-gray-600 p-3 rounded-2xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">
                                    </div>
                                </div>

                                {{-- EMAIL --}}
                                <div class="pt-2">
                                    <div class="py-4 h-14 items-center">
                                        <div class="py-4">
                                            <label id="email" class="text-base text-primary font-bold ">
                                                Email
                                            </label>
                                            <input type="email" name="email" value="" placeholder="example@gmail.com"
                                                required
                                                class="w-full border-none bg-white text-gray-600 p-3 rounded-2xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">
                                        </div>
                                    </div>
                                </div>

                                {{-- FILE ID CARD --}}
                                {{-- <div class="pt-8">
                                    <div class="py-4 h-14 items-center">
                                        <div class="py-4">
                                            <label id="file" class="text-base text-primary font-bold">
                                                Scan Identity Card
                                            </label>
                                            <input type="file" id="file" name="file" required
                                                class="w-full bg-white text-gray-600 p-3 rounded-2xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">
                                        </div>
                                    </div>
                                </div> --}}

                            </div>

                            <div class="bg-slate-50 mt-3 pt-3 pb-14 rounded-xl justify-items-center">
                                <h3 class="font-semibold text-2xl text-gray-700">
                                    Optional Additional Features
                                </h3>

                                <div class="pb-8 h-14 items-center pt-4">
                                    <div class="flex items-center pl-4 rounded-xl bg-white">
                                        <div class="flex items-center h-5">
                                            <input id="trash" aria-describedby="helper-checkbox-text" name="trash"
                                                value="1" type="checkbox"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        </div>
                                        <div class="ml-2 text-sm p-2">
                                            <label for="helper-checkbox" class="font-medium text-gray-900">Trash
                                                Bank</label>
                                            <p id="trash_cost" class="text-xs font-medium text-gray-500">Rp
                                                25.000,00</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="pb-8 h-14 items-center pt-8">
                                    <div class="flex items-center pl-4 rounded-xl bg-white">
                                        <div class="flex items-center h-5">
                                            <input id="laundry" aria-describedby="helper-checkbox-text" type="checkbox"
                                                name="laundry" value="1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        </div>
                                        <div class="ml-2 text-sm p-2">
                                            <label for="helper-checkbox"
                                                class="font-medium text-gray-900">Laundry</label>
                                            <p id="laundry_cost" class="text-xs font-medium text-gray-500">
                                                Rp.50.000,00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-slate-50 rounded-xl justify-items-center">
                                <h3 class="font-semibold text-2xl text-gray-700">
                                    Total
                                </h3>
                                {{-- FILE ID CARD --}}
                                <div class="pb-3 h-14 items-center">
                                    Rp.<input id="total" name="total" value="{{ $package->prices['monthly_price'] }}"
                                        readonly>
                                </div>
                            </div>

                            <!--BUTTON SUBMIT-->
                            <div class="py-4 text-right">
                                <button type="submit"
                                    class="text-white bg-primary hover:bg-sky-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                    Add to cart
                                    <div class="pl-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--REVIEW DETAILS-->
            <div class="relative w-full pt-6">
                <div class="max-w-3xl mx-auto my-12">
                    <h3 class="font-semibold text-2xl text-primary mb-6 text-center">
                        REVIEWS
                    </h3>

                    <!--REVIEW FROM OTHER PEOPLE START-->
                    <h3 class="font-semibold text-lg text-primary mb-2 ml-2">
                        All Reviews
                    </h3>

                    <div class="m-2 p-5 border border-slate-300 bg-slate-50 rounded-xl">
                        <!--PROFILE-->
                        <div class="mb-4 flex items-center space-x-4">
                            <img class="h-7 w-7 rounded-full" src="/img/product-owner.png" alt="" />
                            <div class="space-y-1 font-medium text-slate-700">
                                <p>Hermione Granger</p>
                            </div>
                        </div>

                        <!--RATING-->
                        <div class="mb-1 flex items-center">
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <p class="ml-2 text-sm font-medium text-gray-500">5 out of 5</p>
                            </div>
                        </div>

                        <!--DATE REVIEWED-->
                        <div class="mb-5 text-sm text-gray-500">
                            <p>Reviewed on 2022-08-04 13:00:00</p>
                        </div>

                        <!--REVIEW TEXT-->
                        <p class="mb-2 font-light text-gray-500">
                            The room is very clean and tidy. I am very comfortable living here. The price offered is
                            students friendly.
                        </p>

                        <!--ADDITIONAL-->
                        <aside>
                            <p class="mt-1 text-xs text-gray-500">19 people found this helpful</p>
                            <div class="mt-3 flex items-center space-x-3 divide-x divide-gray-200">
                                <a href="#"
                                    class="rounded-lg border border-gray-300 bg-white px-2 py-1.5 text-xs font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200">
                                    Helpful
                                </a>
                                <a href="#" class="pl-4 text-sm font-medium text-blue-600 hover:underline">
                                    Report abuse
                                </a>
                            </div>
                        </aside>
                    </div>
                    <!--REVIEW FROM OTHER PEOPLE END-->

                    <!--REVIEW FROM MY ACCOUNT START-->
                    @if($reviews != null)
                    @foreach ($reviews as $item)
                    <div class="m-2 p-5 border border-slate-300 bg-slate-50 rounded-xl">
                        <!--PROFILE-->
                        <div class="mb-4 flex items-center space-x-4">
                            <img class="h-7 w-7 rounded-full" src="/img/product-owner.png" alt="" />
                            <div class="space-y-1 font-medium text-slate-700">
                                {{ $item->users->name }}
                            </div>
                        </div>

                        <!--RATING-->
                        <div class="mb-1 flex items-center">
                            <div class="flex items-center">
                                <svg aria-hidden="true" class="h-5 w-5 text-yellow-400" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <p class="ml-2 text-sm font-medium text-gray-500">{{ $item->rating }} out of 5</p>
                            </div>
                        </div>

                        <!--DATE REVIEWED-->
                        <div class="mb-5 text-sm text-gray-500">
                            <p>Reviewed on {{ $item->created_at }}</p>
                        </div>

                        <!--REVIEW TEXT-->
                        <p class="mb-2 font-light text-gray-500">
                            {{ $item->description }}
                        </p>

                        <!--ADDITIONAL-->
                        <aside>
                            <form action="{{ route('edit-reviews.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <p class="mt-1 text-xs text-gray-500">5 people found this helpful</p>
                                <div class="mt-3 flex items-center space-x-3 divide-x divide-gray-200">
                                    <a href="{{ route('edit-reviews.edit', $item->id) }}"
                                        class="rounded-lg border border-gray-300 bg-white px-2 py-1.5 text-xs font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200">
                                        Edit
                                    </a>
                                    <button class="pl-4 text-sm font-medium text-red-500 hover:underline">
                                        Delete
                                    </button>
                                </div>
                            </form>
                        </aside>
                    </div>
                    @endforeach
                    @endif
                    <!--REVIEW FROM MY ACCOUNT END-->

                    <!--CREATE DATA START-->
                    <h3 class="font-semibold text-lg text-primary mb-2 ml-2 pt-5">
                        Add My Reviews
                    </h3>

                    <form action="{{ route('edit-reviews.store', ['edit-reviews'=>$package->package_id]) }}"
                        method="POST">
                        @csrf
                        <div class="w-full p-6 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                            <!--FILL RATING START-->
                            <div class="flex mb-6">
                                <div class="flex-1">
                                    <h4 class="p-2 font-medium text-gray-900 justify-items-center">
                                        Rating
                                    </h4>
                                </div>

                                <ul
                                    class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex">
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                        <div class="flex items-center pl-3">
                                            <input id="rating" type="radio" value="1" name="rating"
                                                class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                            <label for="rating"
                                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900">1
                                            </label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                        <div class="flex items-center pl-3">
                                            <input id="rating" type="radio" value="2" name="rating"
                                                class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                            <label for="rating"
                                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900">2</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                        <div class="flex items-center pl-3">
                                            <input id="rating-three" type="radio" value="3" name="rating"
                                                class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                            <label for="rating-three"
                                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900">3</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                        <div class="flex items-center pl-3">
                                            <input id="rating-four" type="radio" value="4" name="rating"
                                                class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                            <label for="rating-four"
                                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900">4</label>
                                        </div>
                                    </li>
                                    <li class="w-full">
                                        <div class="flex items-center pl-3">
                                            <input id="rating-five" type="radio" value="5" name="rating"
                                                class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                            <label for="rating-five"
                                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900">5</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--FILL RATING END-->

                            <!--FILL REVIEW START-->
                            <div class="px-4 py-2 bg-white rounded-t-lg">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                                    Give a review
                                </label>
                                <textarea rows="3" name="description"
                                    class="w-full px-0 text-sm text-gray-900 bg-white border-0 focus:ring-0"
                                    placeholder="Write a review..."></textarea>
                            </div>
                            <!--FILL REVIEW START-->

                            <!--ACTION START-->
                            <div class="flex items-center justify-between px-3 py-2 border-t">
                                <!--ATTACHMENT-->
                                <div class="flex pl-0 sm:pl-2">
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Attach file</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Set location</span>
                                    </button>
                                    <button type="button"
                                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Upload image</span>
                                    </button>
                                </div>

                                <!--SUBMIT-->
                                <button type="submit"
                                    class="inline-flex items-center py-2.5 px-4 text-xs font-semibold text-center text-white bg-primary rounded-lg focus:ring-primary hover:bg-sky-400">
                                    Post review
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--CREATE DATA END-->
                </div>
            </div>
        </section>
    </div>
</x-page-layout>