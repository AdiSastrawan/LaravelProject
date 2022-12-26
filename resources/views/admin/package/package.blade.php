<x-admin-layout>
    <!-- component -->
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">Packages</h2>
            </div>

            <div class="my-2 flex sm:flex-row flex-wrap md:flex-nowrap  w-fit">
                <a class="hover:bg-green-800 py-2 px-3 mx-2   rounded-l border block  w-20 border-white text-white leading-tight bg-green-500 rounded-md "
                    href="{{ route('package.create') }}">Create</a>
                {{-- <form action="" class="flex" method="get">

                    <select name="filter"
                        class="  h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-40 bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                        <option value="">All</option>
                        <option value="available">Available</option>
                        <option value="unvailable">Unavailable</option>
                    </select>
                    <button type="submit"
                        class="flex items-center px-1 w-14 justify-center hover:bg-gray-200 bg-white border border-gray-400">Filter</button>
                </form> --}}
                <form action="" class="flex px-2 my-2 md:my-0" method="get">

                    <div class="block relative">
                        <input placeholder="Search" name="search" value="{{ $search }}"
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
                                    Package Code
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Package Name
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Description
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Facility Type
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Price
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Image
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        @if ($package == null)
                            <div>
                                <h2 class="text-2xl font-semibold leading-tight">No Data</h2>
                            </div>
                        @else
                            <tbody>
                                @foreach ($package as $p)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            {{ $p->package_code }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            {{ $p->package_name }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            {{ $p->package_desc }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            Facility-{{ $p->facility_id }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            {{ 'Rp ' . number_format($p->prices['monthly_price'], 2, ',', '.') }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <img class="w-40 h-40 bg-cover"
                                                src="{{ asset('img') }}/{{ $p->feature_img }}" alt="">
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex md:flex-nowrap justify-center sm:flex-wrap lg:flex-wrap ">

                                                <a class="hover:bg-blue-800 py-2 px-3 m-2 border-white text-white bg-blue-500 rounded-md "
                                                    href="{{ route('package.edit', ['package' => $p->package_id]) }}">edit</a>
                                                <form
                                                    action="{{ route('package.destroy', ['package' => $p->package_id]) }}"
                                                    class="py-2 px-3 my-2" id="delete"method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a type="" onclick="deleteConfirm()" name="deleteConfirm"
                                                        class="hover:bg-red-800 py-2 px-3 border-white text-white m-2 bg-red-500 rounded-md cursor-pointer">delete</a>
                                        </td>
                                        </form>
                </div>
                </td>

                </tr>
                @endforeach
                </tbody>
                @endif
                </table>
                {{ $package->links() }}
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
