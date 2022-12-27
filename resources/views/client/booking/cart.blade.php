<x-page-layout>
    <!--CART SECTION START-->
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="cart" class="items-center">

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
                                    <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">
                                        Details
                                    </span>
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
                                    <a href="{{ url('cart') }}"
                                        class="ml-1 text-lg font-semibold text-gray-600 hover:text-gray-900 md:ml-2">
                                        Cart
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                </div>
                <br><br>
            </div>

            <!--CART-->
            <div class="relative max-w-4xl mx-auto text-center mb-16">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full justify-items-center text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 text-center uppercase bg-slate-50 border-b">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Resident Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Room Number
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Start Date
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    End Date
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Price
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $total = 0 @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $item)
                                    <tr data-id="{{ $item['room_id'] }}"
                                        class="bg-slate-100 border-b text-center hover:bg-gray-50">

                                        {{-- PACKAGE NAME --}}
                                        <td class="py-4 px-6 font-semibold text-gray-900 w-1/5 h-fit">
                                            {{ $item['resident_name'] }}
                                        </td>
                                        <td class="py-4 px-6 font-semibold text-gray-900 w-1/5 h-fit">
                                            Room-{{ $item['room'] }}
                                        </td>
                                        <td class="py-4 px-6 font-semibold text-gray-900 w-1/5 h-fit">
                                            {{ $item['start_date'] }}
                                        </td>
                                        <td class="py-4 px-6 font-semibold text-gray-900 w-1/5 h-fit">
                                            {{ $item['end_date'] }}
                                        </td>
                                        <td class="py-4 px-6 font-semibold text-gray-900 w-1/5 h-fit">
                                            {{ 'Rp ' . number_format($item['total'], 2, ',', '.') }}
                                            {{-- Rp {{ $item['total'] }} --}}
                                        </td>
                                        @php $total+=$item['total']@endphp
                                        <td class="py-4 px-6 w-1/5 h-fit">
                                            <div class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                                <button
                                                    class="btn btn-danger btn-sm cart-remove pl-4 text-sm font-medium text-red-500 hover:underline">
                                                    Remove
                                                </button>
                                            </div>
                                        </td>
                                        {{-- QTY BUTTON --}}

                                    </tr>
                                @endforeach
                            @endif
                        <tfoot>
                            <tr class="font-semibold text-gray-900">
                                <th scope="row" class="py-3 px-6 text-base">Totals</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="py-3 px-6 text-right w-fit">
                                    {{ 'Rp ' . number_format($total, 2, ',', '.') }}
                                </td>
                            </tr>
                        </tfoot>

                    </table>
                </div>
                <div class="pt-6 text-right">
                    <a href="{{ url('success') }}"
                        class="text-white bg-primary hover:bg-sky-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        <p onclick="confirmCheckout()">Checkout</p>
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script type="text/javascript">
        $(".cart-update").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update-cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        function confirmCheckout() {
            Swal.fire({
                title: 'Are you sure?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '<a href="{{ route('insert-cart') }}">Confirm</a>'
            }).then((result) => {
                // <a href="{{ url('success') }}"></a>
            })
        }
        $(".cart-remove").click(function(e) {
            e.preventDefault();

            var ele = $(this);

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
                    $.ajax({
                        url: "{{ route('remove-from-cart') }}",
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("data-id")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            })


        });
    </script>
</x-page-layout>
