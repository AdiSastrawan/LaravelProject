<x-admin-layout>
    <!-- component -->
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Rooms</h2>
            </div>
            <div class="my-2 flex flex-wrap md:flex-nowrap w-fit  ">
                <a class="hover:bg-green-800 py-2 px-3 mx-2   rounded-l border block  w-20 border-white text-white leading-tight bg-green-500 rounded-md "
                    href="{{ route('room.create') }}">Create</a>
                <form action="{{ route('room.index') }}" class="flex" method="get">

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
                                    Room Number
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Package Code
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Package Name
                                </th>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Maximun Residence
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Room Booked
                                </th>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($room as $r)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $r->room_number }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $r->packages['package_code'] }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $r->packages['package_name'] }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $r->max_resident }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        @if ($r->room_booked == true)
                                            <p class="text-green-500 font-semibold">
                                                Booked
                                            </p>
                                        @else
                                            <p class="text-red-500 font-semibold">
                                                Not Booked
                                            </p>
                                        @endif

                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex md:flex-nowrap justify-center sm:flex-wrap lg:flex-wrap ">

                                            <a class="hover:bg-blue-800 py-2 px-3 my-2 border-white text-white bg-blue-500 rounded-md "
                                                href="{{ route('room.edit', ['room' => $r->room_id]) }}">edit</a>
                                            <form action="{{ route('room.destroy', ['room' => $r->room_id]) }}"
                                                class="py-2 px-3 my-2" id="delete"method="post">
                                                @csrf
                                                @method('delete')
                                                <a type="" onclick="deleteConfirm()" name="deleteConfirm"
                                                    class="hover:bg-red-800 py-2 px-3 border-white text-white m-2 bg-red-500 rounded-md cursor-pointer">delete</a>
                                    </td>
                                    </form>

                                </tr>
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
