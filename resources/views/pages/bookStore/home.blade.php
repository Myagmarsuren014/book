<x-main-layout>
    <div class="bg-white">
        @include('pages.bookStore.hero')
        @include('pages.bookStore.delivery')
        @include('pages.bookStore.slider')
        @include('pages.bookStore.bestSeller')
        <div class="bg-white w-full py-5 mx-auto rounded-lg px-4 lg:px-8">
            <div class="flex justify-center items-center mb-5">
                <h2 class="text-3xl font-semibold text-center border-b-2 border-blue-500">
                    Бүх бараанууд
                </h2>
            </div>

            <div class="mx-auto max-w-7xl px-4 my-8">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                    <!-- Sidebar -->
                    <div class="sm:col-span-1">
                        <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md">
                            <h3 class="font-bold text-lg mb-4">Ангиллууд</h3>
                            <div x-data="{ open: [1] }">
                                <div class="border-b mb-2">
                                    <button class="w-full text-left font-medium text-gray-700 py-2"
                                        @click="open.includes(1) ? open = open.filter(id => id !== 1) : open.push(1)">
                                        Номын ангилал</button>
                                    <div x-show="open.includes(1)" class="pl-4 py-2">
                                        <ul class="text-sm text-gray-600">
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Хууль,
                                                    эрх
                                                    зүй</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Хууль,
                                                    эрх
                                                    зүйн
                                                    сэтгүүл</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Эрх зүйн
                                                    акт,
                                                    эмхэтгэл, орчуулга</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Өгүүлэл,
                                                    илтгэлийн эмхэтгэл</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Эрх зүйн
                                                    боловсрол</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Хуулийн
                                                    ховор,
                                                    хуучин ном</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Хуулийн
                                                    тайлбар,
                                                    толь</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Нийгэм,
                                                    улс
                                                    төр</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Эдийн
                                                    засаг,
                                                    бизнесс</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Шинжлэх
                                                    ухаан,
                                                    танин мэдэхүй</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Шашин,
                                                    философи</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Өөртөө
                                                    туслах,
                                                    хувь хүний хөгжил</a></li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Хүүхдийн
                                                    ном</a>
                                            </li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Уран
                                                    зохиол,
                                                    яруу
                                                    найраг</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="border-b mb-2">
                                    <button class="w-full text-left font-medium text-gray-700 py-2"
                                        @click="open.includes(3) ? open = open.filter(id => id !== 3) : open.push(3)">
                                        Бэлэг дурсгал </button>
                                    <div x-show="open.includes(3)" class="pl-4 py-2">
                                        <ul class="text-sm text-gray-600">
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a
                                                    href="#">Алчуур</a>
                                            </li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a
                                                    href="#">Зангиа</a>
                                            </li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">Даавуун
                                                    уут</a>
                                            </li>
                                            <li class="hover:bg-gray-200 cursor-pointer py-2"><a href="#">
                                                    Энгэрийн
                                                    тэмдэг</a></li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="sm:col-span-3">
                        <div class="pt-4 pb-6 px-6 bg-gray-50 rounded-md">
                            <!-- Product listing or other content -->
                            <div>
                                <div class="flex justify-center items-center mb-5">
                                    <h2 class="text-3xl font-semibold text-center border-b-2 border-blue-500">
                                        Хүүхдийн ном
                                    </h2>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                    <div class="bg-white shadow-md rounded-md p-4 group relative">
                                        <div class="relative overflow-hidden rounded-md">
                                            <img src="/test.png" alt="Book Title"
                                                class="w-full h-30 object-cover mb-4 group-hover:scale-125 transition-all duration-300 ease-out">
                                            <div
                                                class="absolute bottom-0 left-0 w-full h-1/2 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                                                <button
                                                    class="text-white font-semibold py-2 px-4 bg-blue-500 rounded-md hover:bg-blue-600 transition-colors duration-300">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold mt-4">Book Title</h3>
                                        <p class="text-gray-600">Author Name</p>
                                        <p class="text-blue-500 font-semibold">₮ Price</p>
                                    </div>
                                    <!-- Repeat similar blocks for other products -->
                                </div>
                            </div>





                            {{-- Уран зохиол, яруу найраг --}}
                            <div>
                                <div class="flex justify-center items-center mb-5">
                                    <h2 class="text-3xl font-semibold text-center border-b-2 border-blue-500">
                                        Уран зохиол, яруу найраг </h2>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                    <div class="bg-white shadow-md rounded-md p-4 group relative">
                                        <div class="relative overflow-hidden rounded-md">
                                            <img src="/test.png" alt="Book Title"
                                                class="w-full h-30 object-cover mb-4 group-hover:scale-125 transition-all duration-300 ease-out">
                                            <div
                                                class="absolute bottom-0 left-0 w-full h-1/2 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                                                <button
                                                    class="text-white font-semibold py-2 px-4 bg-blue-500 rounded-md hover:bg-blue-600 transition-colors duration-300">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold mt-4">Book Title</h3>
                                        <p class="text-gray-600">Author Name</p>
                                        <p class="text-blue-500 font-semibold">₮ Price</p>
                                    </div>
                                    <!-- Repeat similar blocks for other products -->
                                </div>
                            </div>

                            {{-- Бэлэг дурсгал  --}}
                            <div>
                                <div class="flex justify-center items-center mb-5">
                                    <h2 class="text-3xl font-semibold text-center border-b-2 border-blue-500">
                                        Бэлэг дурсгал </h2>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                    <div class="bg-white shadow-md rounded-md p-4 group relative">
                                        <div class="relative overflow-hidden rounded-md">
                                            <img src="/test.png" alt="Book Title"
                                                class="w-full h-30 object-cover mb-4 group-hover:scale-125 transition-all duration-300 ease-out">
                                            <div
                                                class="absolute bottom-0 left-0 w-full h-1/2 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                                                <button
                                                    class="text-white font-semibold py-2 px-4 bg-blue-500 rounded-md hover:bg-blue-600 transition-colors duration-300">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold mt-4">Book Title</h3>
                                        <p class="text-gray-600">Author Name</p>
                                        <p class="text-blue-500 font-semibold">₮ Price</p>
                                    </div>
                                    <!-- Repeat similar blocks for other products -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
{{-- <script src="{{ mix('/js/app.js') }}"></script> --}}
@vite('resources/js/app.js')
