<x-admin-layout>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <div class="p-8 rounded border border-gray-200 bg-white">
        <h1 class="font-medium text-3xl">Edit Facility</h1>
        <form action="{{ route('facility.update', ['facility' => $facility->facility_id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                <div> <label for="size" class="text-sm text-gray-700 block mb-1 font-medium">Size</label>

                    <input type="text" value="{{ isset($facility) ? $facility->size : old('code') }}" name="size"
                        id="size" lenght="3"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        placeholder="" />
                    @error('code')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="bed" class="text-sm text-gray-700 block mb-1 font-medium">Bed</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="bed" id="bed">
                        @if ($facility->bed == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('bed')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="" class="text-sm text-gray-700 block mb-1 font-medium">Cupboard</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="cupboard" id="cupboard">
                        @if ($facility->cupboard == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('cupboard')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="pillow" class="text-sm text-gray-700 block mb-1 font-medium">Pillow</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="pillow" id="pillow">
                        @if ($facility->pillow == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('pillow')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="mirror" class="text-sm text-gray-700 block mb-1 font-medium">Mirror</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="mirror" id="mirror">
                        @if ($facility->mirror == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('mirror')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="desk" class="text-sm text-gray-700 block mb-1 font-medium">Desk</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="desk" id="desk">
                        @if ($facility->desk == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('desk')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="chair" class="text-sm text-gray-700 block mb-1 font-medium">Chair</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="chair" id="chair">
                        @if ($facility->chair == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('chair')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="window" class="text-sm text-gray-700 block mb-1 font-medium">Window</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="window" id="window">
                        @if ($facility->window == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('window')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="toilet" class="text-sm text-gray-700 block mb-1 font-medium">Toilet</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="toilet" id="toilet">
                        @if ($facility->toilet == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('toilet')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="tub" class="text-sm text-gray-700 block mb-1 font-medium">Tub</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="tub" id="tub">
                        @if ($facility->tub == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('tub')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="shower" class="text-sm text-gray-700 block mb-1 font-medium">Shower</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="shower" id="shower">
                        @if ($facility->tub == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('shower')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="electricity"
                        class="text-sm text-gray-700 block mb-1 font-medium">Elictricity</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="electricity" id="electricity">
                        @if ($facility->electricity == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('electricity')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="water" class="text-sm text-gray-700 block mb-1 font-medium">Water</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="water" id="water">
                        @if ($facility->water == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('water')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>
                <div> <label for="ac" class="text-sm text-gray-700 block mb-1 font-medium">AC</label>
                    <select
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"
                        name="ac" id="ac">
                        @if ($facility->ac == 1)
                            <option value="1" selected>Included</option>
                            <option value="0">Not Included</option>
                        @else
                            <option value="1">Included</option>
                            <option value="0"selected>Not Included</option>
                        @endif
                    </select>


                    @error('ac')
                        <div class="text-xs text-red-800">Warning</div>
                    @enderror
                </div>



            </div>
            <div class="space-x-4 mt-8"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                <!-- Secondary --> <a href="{{ route('facility.index') }}"
                    class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</a>
            </div>
        </form>
        <!-- component -->



        {{-- <script>
    CKEDITOR.replace( 'desc' );
</script> --}}
    </div>
</x-admin-layout>
