<x-admin-layout>
    <!-- component -->
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Residents</h2>
            </div>
            <div class="my-2 flex flex-wrap md:flex-nowrap w-fit  ">
                <a class="hover:bg-green-800 py-2 px-3 mx-2   rounded-l border block  w-20 border-white text-white leading-tight bg-green-500 rounded-md "
                    href="{{ route('resident.create') }}">Create</a>
                <form action="{{ route('resident.index') }}" class="flex" method="get">

                    <select name="filter"
                        class=" h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                        <option value="">All</option>
                        <option value="1">Booked Room</option>
                        <option value="0">Unbooked Room</option>
                    </select>
                    <button type="submit"
                        class="flex items-center px-1 w-14 justify-center hover:bg-gray-200 bg-white border border-gray-400">Filter</button>
                </form>
                <form action="" class="flex px-2 my-2 md:my-0" method="get">

                    <div class="block relative">
                        <input placeholder="Search" name="search"
                            class="appearance-none  rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-2 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                    </div>
                    <button
                        class="flex items-center px-1 w-10 justify-center hover:bg-gray-200 bg-white border border-gray-400">

                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    User Name
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Resident Name
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Phone Number
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Room Number
                                </th>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Additional
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Date Started
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Date Ended
                                </th>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-center text-gray-600 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rent as $r)
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $r->users['name'] }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Adi Sastrawan
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    089685756351
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $r->rooms['room_number'] }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm font-semibold">
                                    <p class="flex">
                                        @if ($r->laundry == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px"
                                                viewBox="0 0 36 36" aria-hidden="true" role="img"
                                                class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                                <path fill="#77B255"
                                                    d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                                <path fill="#FFF"
                                                    d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px"
                                                viewBox="0 0 512 512" aria-hidden="true" role="img"
                                                class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                                <path fill="#FF473E"
                                                    d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                            </svg>
                                        @endif
                                        Laundry
                                    </p>
                                    <p class="flex ">

                                        @if ($r->trash_bank == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px"
                                                viewBox="0 0 36 36" aria-hidden="true" role="img"
                                                class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet">
                                                <path fill="#77B255"
                                                    d="M36 32a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v28z" />
                                                <path fill="#FFF"
                                                    d="M29.28 6.362a2.502 2.502 0 0 0-3.458.736L14.936 23.877l-5.029-4.65a2.5 2.5 0 1 0-3.394 3.671l7.209 6.666c.48.445 1.09.665 1.696.665c.673 0 1.534-.282 2.099-1.139c.332-.506 12.5-19.27 12.5-19.27a2.5 2.5 0 0 0-.737-3.458z" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px"
                                                viewBox="0 0 512 512" aria-hidden="true" role="img"
                                                class="iconify iconify--fxemoji" preserveAspectRatio="xMidYMid meet">
                                                <path fill="#FF473E"
                                                    d="M330.443 256l136.765-136.765c14.058-14.058 14.058-36.85 0-50.908l-23.535-23.535c-14.058-14.058-36.85-14.058-50.908 0L256 181.557L119.235 44.792c-14.058-14.058-36.85-14.058-50.908 0L44.792 68.327c-14.058 14.058-14.058 36.85 0 50.908L181.557 256L44.792 392.765c-14.058 14.058-14.058 36.85 0 50.908l23.535 23.535c14.058 14.058 36.85 14.058 50.908 0L256 330.443l136.765 136.765c14.058 14.058 36.85 14.058 50.908 0l23.535-23.535c14.058-14.058 14.058-36.85 0-50.908L330.443 256z" />
                                            </svg>
                                        @endif
                                        Trash Bank

                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $r->date_started }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $r->date_ended }}
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex md:flex-nowrap justify-center sm:flex-wrap lg:flex-wrap space-x-2">

                                        <a class="hover:bg-blue-800 py-2 px-3 my-2 border-white text-white bg-blue-500 rounded-md "
                                            href="{{ route('resident.show', ['resident' => $r->rent_id]) }}">detail</a>
                                        <a class="hover:bg-blue-800 py-2 px-3 my-2 border-white text-white bg-blue-500 rounded-md "
                                            href="{{ route('resident.edit', ['resident' => $r->rent_id]) }}">edit</a>
                                        <form action="{{ route('resident.destroy', ['resident' => $r->rent_id]) }}"
                                            class="py-2 my-2" id="delete"method="post">
                                            @csrf
                                            @method('delete')
                                            <a type="" onclick="deleteConfirm()" name="deleteConfirm"
                                                class="hover:bg-red-800 py-2 px-3 border-white text-white m-2 bg-red-500 rounded-md cursor-pointer">delete</a>
                                </td>
                                </form>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- <div
                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                        <span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
                        <div class="inline-flex mt-2 xs:mt-0">
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
                            <button
                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteConfirm() {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete').submit();
                }
            })
        }
    </script>
</x-admin-layout>
