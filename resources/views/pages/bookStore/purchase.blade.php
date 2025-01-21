<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <!-- Main Purchase Section -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-4">
            <!-- Product Details Section -->
            <div class="sm:col-span-3">
                <div class="pt-6 pb-8 px-8 bg-white shadow-md rounded-lg">
                    <h1 class="text-3xl font-extrabold mb-6">Монгол Фемида" улаан хүрэн алчуур /limited edition/</h1>
                    <div class="flex items-center">
                        <img src="/souvner.jpg" alt="Product image" class="w-1/3 h-auto object-cover rounded-lg mb-6">
                        <p class="text-gray-600 mb-6 leading-relaxed ml-4">Here you can add a detailed description of the
                            product.
                            Highlight its features, benefits, and unique selling points to captivate the user's interest
                            and
                            drive conversions.</p>
                    </div>

                    <div class="flex items-center mb-8 pl-1/3">
                        <p class="text-4xl font-bold mr-5">Үнэ:</p><span class="text-4xl font-bold  mr-4">69,000₮</span>
                    </div>

                    <div class="flex justify-center">
                        <button
                            class="bg-blue-600 text-white font-medium px-8 py-3 rounded-lg shadow hover:bg-blue-700 transition"><a
                                href="{{ route('bookStore.qpay') }}">ХУДАЛДАЖ
                                АВАХ</a></button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Section -->
            <div class="sm:col-span-1">
                <div class="pt-6 pb-8 px-6 bg-white shadow-md rounded-lg">
                    <h2 class="text-2xl font-bold mb-6">Related Products</h2>
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="block text-blue-600 font-medium hover:underline">Product 1</a>
                        </li>
                        <li>
                            <a href="#" class="block text-blue-600 font-medium hover:underline">Product 2</a>
                        </li>
                        <li>
                            <a href="#" class="block text-blue-600 font-medium hover:underline">Product 3</a>
                        </li>
                    </ul>

                    <h2 class="text-2xl font-bold mt-8 mb-6">Special Offers</h2>
                    <p class="text-gray-600">Discover our latest discounts and promotions to save big on your favorite
                        items.</p>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
