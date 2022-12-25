<x-admin-layout>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <div class="p-8 rounded border border-gray-200 bg-white">
        <h1 class="font-medium text-3xl">Create Room</h1>
        <form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                <div> <label for="number" class="text-sm text-gray-700 block mb-1 font-medium">Room number</label>
                    <input type="text" value="{{ $room_number->room_number + 1 }}" name="number" id="number"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('code')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="resident" class="text-sm text-gray-700 block mb-1 font-medium">Max Resident</label>
                    <input type="text" value="" name="resident" id="resident"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('resident')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>

                <div> <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Package</label>
                    <select type="text" name="package" id="package"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
                        <option value="" selected disabled>Choose Package Type</option>
                        @foreach ($package as $p)
                            <option value="{{ $p->package_id }}">{{ $p->package_id }}-{{ $p->package_name }}</option>
                        @endforeach
                    </select>
                    @error('package')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>


            </div>
            <div class="space-x-4 mt-8"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                <!-- Secondary --> <a href="{{ route('room.index') }}"
                    class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</a>
            </div>
        </form>
        <!-- component -->



        {{-- <script>
    CKEDITOR.replace( 'desc' );
</script> --}}
    </div>
</x-admin-layout>
