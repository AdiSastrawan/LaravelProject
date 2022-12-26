<x-admin-layout>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <div class="p-8 rounded border border-gray-200 bg-white">
        <h1 class="font-medium text-3xl">Create Package</h1>
        <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                <div class="w-full"> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Package
                        Code</label>
                    <input type="text" value="{{ isset($package) ? $package->package_code : old('code') }}"
                        name="code" id="code"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('code')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div class="w-full"> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Package
                        Name</label>
                    <input type="text" value="" name="name" id="name"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('name')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div class="w-full"> <label for="brithday"
                        class="text-sm text-gray-700 block mb-1 font-medium">Price</label>
                    <select type="text" name="price" id="price"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
                        @foreach ($price as $p)
                            <option value="{{ $p->price_id }}">{{ $p->monthly_price }}</option>
                        @endforeach
                    </select>
                    @error('price')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div class="w-full"> <label for="brithday"
                        class="text-sm text-gray-700 block mb-1 font-medium">Picture</label> <input type="file"
                        value="" name="img" id="image"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('img')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div class="w-full "> <label for="job"
                        class="text-sm text-gray-700 block mb-1 font-medium">Description</label>
                    <textarea
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="desc" id="desc" cols="60" rows="10"></textarea>
                    @error('desc')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div class="w-full "> <label for="job"
                        class="text-sm text-gray-700 block mb-1 font-medium">Facility</label>
                    <select name="facility" id="">
                        <option value="">Choose facility</option>
                        @foreach ($facility as $f)
                            <option value="{{ $f->facility_id }}">
                                Facility-{{ $f->facility_id }} :
                                {{ $f->size }}

                                @if ($f->bed != 1)
                                    , No Bed
                                @endif
                                @if ($f->cupboard != 1)
                                    , No Cupboard
                                @endif

                                @if ($f->pillow != 1)
                                    , No Pillow
                                @endif

                                @if ($f->mirror != 1)
                                    , No Mirror
                                @endif

                                @if ($f->desk != 1)
                                    , No Desk
                                @endif

                                @if ($f->chair != 1)
                                    , No Chair
                                @endif

                                @if ($f->window != 1)
                                    , No Window
                                @endif

                                @if ($f->toilet != 1)
                                    , No Toilet
                                @endif

                                @if ($f->tub != 1)
                                    , No Tub
                                @endif

                                @if ($f->shower != 1)
                                    , No Shower
                                @endif

                                @if ($f->electricity != 1)
                                    , No Electricity
                                @endif

                                @if ($f->water != 1)
                                    , No Water
                                @endif

                                @if ($f->ac != 1)
                                    , No AC
                                @endif


                            </option>
                        @endforeach
                    </select>
                    @error('desc')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>

            </div>
            <div class="space-x-4 mt-8"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                <!-- Secondary --> <a href="{{ route('package.index') }}"
                    class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</a>
            </div>
        </form>
        <!-- component -->



        {{-- <script>
            CKEDITOR.replace( 'desc' );
        </script> --}}
    </div>
</x-admin-layout>
