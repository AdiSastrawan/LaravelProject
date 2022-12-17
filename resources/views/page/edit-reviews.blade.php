<x-page-layout>
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <div class="relative w-full pt-6">
            <div class="max-w-3xl mx-auto my-12">
                <!--CREATE DATA START-->
                <h3 class="font-semibold text-lg text-primary mb-2 ml-2 pt-5">
                    Edit My Reviews
                </h3>
                <form action="{{route('edit-reviews.update', $reviews->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="w-full p-6 mb-4 border border-gray-200 rounded-lg bg-gray-50">
                        <!--FILL RATING START-->

                        <div class="flex mb-6">
                            <div class="flex-1">
                                <h4 class="p-2 font-medium text-gray-900 justify-items-center">
                                    Rating
                                </h4>
                            </div>

                            <ul
                                class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="rating" type="radio" value="1" name="rating" 
                                        @if ($reviews->rating=="1") checked @endif
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                        <label for="rating" class="py-3 ml-2 w-full text-sm font-medium text-gray-900">1
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="rating" type="radio" value="2" name="rating" 
                                        @if ($reviews->rating=="2") checked @endif
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                        <label for="rating"
                                            class="py-3 ml-2 w-full text-sm font-medium text-gray-900">2</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="rating-three" type="radio" value="3" name="rating" 
                                        @if ($reviews->rating=="3") checked @endif
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                        <label for="rating-three"
                                            class="py-3 ml-2 w-full text-sm font-medium text-gray-900">3</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="rating-four" type="radio" value="4" name="rating" 
                                        @if ($reviews->rating=="4") checked @endif
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                        <label for="rating-four"
                                            class="py-3 ml-2 w-full text-sm font-medium text-gray-900">4</label>
                                    </div>
                                </li>
                                <li class="w-full">
                                    <div class="flex items-center pl-3">
                                        <input id="rating-five" type="radio" value="5" name="rating"
                                        @if ($reviews->rating=="5") checked @endif
                                        class="w-4 h-4 text-primary bg-gray-100 border-gray-300 focus:ring-primary focus:ring-1">
                                        <label for="rating-five"
                                            class="py-3 ml-2 w-full text-sm font-medium text-gray-900">5</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--FILL RATING END-->

                        <!--FILL REVIEW START-->
                        <div class="px-4 py-2 bg-white rounded-t-lg">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                                Give a review
                            </label>
                            <textarea rows="3" name="description"
                                class="w-full px-0 text-sm text-gray-900 bg-white border-0 focus:ring-0"
                                placeholder="Write a review...">{{$reviews->description}}</textarea>
                        </div>
                        <!--FILL REVIEW START-->

                        <!--ACTION START-->
                        <div class="flex items-center justify-between px-3 py-2 border-t">
                            <!--ATTACHMENT-->
                            <div class="flex pl-0 sm:pl-2">
                                <button type="button"
                                    class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Attach file</span>
                                </button>
                                <button type="button"
                                    class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Set location</span>
                                </button>
                                <button type="button"
                                    class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Upload image</span>
                                </button>
                            </div>

                            <!--SUBMIT-->
                            <button type="submit"
                                class="inline-flex items-center py-2.5 px-4 text-xs font-semibold text-center text-white bg-primary rounded-lg focus:ring-primary hover:bg-sky-400">
                                Edit review
                            </button>
                        </div>
                    </div>
                </form>
                <!--CREATE DATA END-->
            </div>
        </div>
    </div>
</x-page-layout>