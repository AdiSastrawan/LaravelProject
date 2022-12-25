<x-admin-layout>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <div class="p-8 rounded border border-gray-200 bg-white">
        <h1 class="font-medium text-3xl">Edit Room</h1>
        <form action="{{ route('room.update', ['room' => $room->room_id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                <div> <label for="number" class="text-sm text-gray-700 block mb-1 font-medium">Room number</label>
                    <input type="text" value="{{ $room->room_number }}" name="number" id="number"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('number')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="resident" class="text-sm text-gray-700 block mb-1 font-medium">Max Resident</label>
                    <input type="text" value="{{ $room->max_resident }}" name="resident" id="resident"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('resident')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>

                <div> <label for="brithday" class="text-sm text-gray-700 block mb-1 font-medium">Package</label>
                    <select type="text" name="package" id="package"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full">
                        <option value="{{ $room->package_id }}" selected>
                            {{ $room->package_id }}-{{ $room->packages['package_name'] }}</option>
                        @foreach ($package as $p)
                            @if ($room->package_id != $p->package_id)
                                <option value="{{ $p->package_id }}">{{ $p->package_id }}-{{ $p->package_name }}
                                </option>
                            @endif
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
