<x-admin-layout>
    <main class="w-full flex-grow p-6">
        <div class="flex justify-between w-full">

            <h1 class="text-3xl font-semibold text-black pb-6">Detail Facility-{{ $facility->facility_id }}</h1>
            <div class="w-fit">

                <a href="{{ route('facility.index') }}"
                    class="py-2 my-3 px-5 bg-white border text-lg border-gray-200 text-gray-600 rounded hover:bg-gray-300 active:bg-gray-200 disabled:opacity-50">Back</a>
            </div>
        </div>
        <!-- Statistics Cards -->
        <div class="flex flex-wrap mt-6">
            <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-plus mr-3"></i> Related Packages</>
                </p>
                <div class="p-6 bg-white rounded-md font-semibold">
                    <p class="">

                        Package Code : {{ $facility->packages['package_code'] }}
                    </p>
                    <p>

                        Package Name : {{ $facility->packages['package_name'] }}
                    </p>
                </div>
            </div>
            {{-- <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-check mr-3"></i> Resolved Reports
                </p>
                <div class="p-6 bg-white font-semibold">
                    {{ $facility->packages->rooms }}
                </div>
            </div> --}}
        </div>
        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Facility List
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Facility</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Included</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                        <tr class="">
                            <td class="w-1/3 text-left py-3 px-4">Bed</td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->bed == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>

                        <tr class="bg-gray-200">
                            <td class="w-1/3 text-left py-3 px-4"> Pillow </td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->pillow == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="">
                            <td class="w-1/3 text-left py-3 px-4">Mirror</td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->mirror == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="w-1/3 text-left py-3 px-4"> Desk </td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->desk == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="">
                            <td class="w-1/3 text-left py-3 px-4">Cupboard</td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->cupboard == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="w-1/3 text-left py-3 px-4">Chair</td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->chair == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="">
                            <td class="w-1/3 text-left py-3 px-4"> Window </td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->window == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="w-1/3 text-left py-3 px-4">Toilet</td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->toilet == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="">
                            <td class="w-1/3 text-left py-3 px-4"> Tub </td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->tub == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="w-1/3 text-left py-3 px-4">Shower</td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->bed == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="">
                            <td class="w-1/3 text-left py-3 px-4"> Electricity </td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->electricity == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="w-1/3 text-left py-3 px-4">Water</td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->water == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                        <tr class="">
                            <td class="w-1/3 text-left py-3 px-4"> AC </td>
                            <td class="w-1/3 text-left py-3 px-4">
                                @if ($facility->ac == 1)
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 36 36" aria-hidden="true"
                                        role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#77B255"
                                            d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                        <path fill="#FFF"
                                            d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="20px" viewBox="0 0 512 512" aria-hidden="true"
                                        role="img" class="iconify iconify--fxemoji"
                                        preserveAspectRatio="xMidYMid meet">
                                        <path fill="#FF473E"
                                            d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                    </svg>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </main>
</x-admin-layout>
