<x-admin-layout>
    <div class="p-8 rounded border border-gray-200 bg-white">
        <h1 class="font-medium text-3xl">Edit Package</h1>
        <form action="{{ route('package.update', ['package' => $package->package_id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Package Code</label>

                    <input type="text" value="{{ isset($package) ? $package->package_code : old('code') }}"
                        name="code" id="code"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('code')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Package Name</label>
                    <input type="text" value="{{ isset($package) ? $package->package_name : old('name') }}"
                        name="name" id="name"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('name')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">Description</label>
                    <input type="text" value="{{ isset($package) ? $package->package_desc : old('desc') }}"
                        name="desc" id="desc"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('desc')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Price</label> <input
                        type="text" value="{{ isset($package) ? $package->prices['monthly_price'] : old('price') }}"
                        name="price" id="price"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('price')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Picture</label> <input
                        type="file" value="{{ isset($package) ? $package->feature_img : old('image') }}" name="img"
                        id="image"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('img')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>

            </div>
            <div class="space-x-4 mt-8"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                <!-- Secondary --> <button
                    class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</button>
            </div>
        </form>
        <!-- component -->


        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

        <script>
            // CKEDITOR.replace( 'desc' );
        </script>
    </div>
</x-admin-layout>
