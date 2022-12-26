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
                                <a href="{{ url('packages') }}" class="inline-flex items-center text-lg font-medium text-gray-500 hover:text-gray-900">
                                    Packages
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">
                                    Details
                                </span>
                                </div>
                            </li>
                            <li aria-current="page">
                                <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <a href="{{ url('cart') }}" class="ml-1 text-lg font-semibold text-gray-600 hover:text-gray-900 md:ml-2">
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
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Package
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Qty
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
                                @foreach (session('cart') as $package_id => $item)
                                    @php $total += $item['monthly_price'] * $item['qty'] @endphp
                                    <tr data-id="{{ $package_id }}" class="bg-slate-100 border-b text-center hover:bg-gray-50">
                                        {{-- PICTURE --}}
                                        <td class="p-4 justify-items-center w-1/5 h-fit">
                                            <img src="{{ asset('img/'.$item['feature_img'])}}" alt="" width="150" height="150" class="rounded-xl">
                                        </td>
                                        {{-- PACKAGE NAME --}}
                                        <td class="py-4 px-6 font-semibold text-gray-900 w-1/5 h-fit">
                                            {{ $item['package_name'] }}
                                        </td>
                                        {{-- QTY BUTTON --}}
                                        <td data-th="qty" class="py-4 px-6 items-center w-1/5 h-fit">
                                            <div class="flex items-center space-x-3">
                                                <button
                                                    class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200"
                                                    type="button">
                                                    <span class="sr-only">Quantity button</span>
                                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>

                                                <div>
                                                    <input type="number" value="{{ $item['qty']}}"
                                                        class="form-control quantity cart-update bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1" min="1">
                                                </div>

                                                <button
                                                    class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white rounded-full border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200"
                                                    type="button">
                                                    <span class="sr-only">Quantity button</span>
                                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                        {{-- MONTHLY PRICE --}}
                                        <td class="py-4 px-6 font-semibold text-gray-900 w-1/5 h-fit">
                                            {{"Rp " . number_format($item['monthly_price'],2,',','.');}}
                                        </td>
                                        
                                        {{-- MONTHLY PRICE * QTY
                                        <td class="py-4 px-6 font-semibold text-gray-900 w-1/5 h-fit">
                                            {{"Rp " . number_format($item['monthly_price'] * $item['qty'],2,',','.');}}
                                        </td> --}}

                                        {{-- REMOVE TO CART --}}
                                        <td class="py-4 px-6 w-1/5 h-fit">
                                                <div class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                                    <button
                                                        class="btn btn-danger btn-sm cart-remove pl-4 text-sm font-medium text-red-500 hover:underline">
                                                        Remove
                                                    </button>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr class="font-semibold text-gray-900">
                                <th scope="row" class="py-3 px-6 text-base">Totals</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="py-3 px-6 text-right w-fit" >
                                    {{"Rp " . number_format($total,2,',','.');}}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="pt-6 text-right">
                    <button type="button" class="text-white bg-primary hover:bg-sky-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        Continue
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
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

        $(".cart-remove").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure to remove this package?")) {
                $.ajax({
                    url: '{{ route('remove-from-cart') }}',
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
        });
    </script>
</x-page-layout>