<x-main-layout>

    <div class="container mx-auto flex justify-center py-4 ">
        <div class="w-full max-w-5xl bg-white rounded-lg">
            <nav class="mb-4 text-gray-600 my-4">
                <a href="#" class="hover:underline px-4">Нүүр хуудас</a> &gt; 
                <span>Номын дэлгэрэнгүй мэдээлэл</span>
            </nav>

            <div class="flex flex-col md:flex-row gap-6 ">
                <div class="max-w-xs">
                    <img src="/test.png" alt="Book Cover" class="w-full">
                </div>

                <div class="max-w-lg">
                    <h1 class="text-xl font-bold mb-2">Эрүүгийн эрх зүйн хууль ёсны зарчим /Онол, философи/</h1>
                    <p class="text-gray-700 mb-4">Б.Мөнх-Эрдэнэ</p>
                    <p class="text-green-600 text-lg font-semibold mb-4">50,000₮ / зөөлөн хавтастай</p>

                    <table class="w-full text-sm text-gray-700 mb-6">
                        <tr class="border-b">
                            <td class="py-2 font-medium">Хэвлэгдсэн он:</td>
                            <td class="py-2">2024</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 font-medium">Хуудасны тоо:</td>
                            <td class="py-2">361</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 font-medium">Ангилал:</td>
                            <td class="py-2">Хууль, эрх зүй</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 font-medium">ISBN дугаар:</td>
                            <td class="py-2">9-789919-039912</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 font-medium">Хэл:</td>
                            <td class="py-2">Монгол</td>
                        </tr>
                        <tr>
                            <td class="py-2 font-medium">Хэмжээ (мм):</td>
                            <td class="py-2">210 x 147 x 25</td>
                        </tr>
                    </table>

                    <h3 class="font-bold">Танилцуулга</h3>
                    <p class="my-4 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt praesentium fugit pariatur esse, blanditiis, ratione atque obcaecati culpa veniam at necessitatibus molestias eum veritatis sequi voluptatem fugiat alias tempore. Consectetur?</p>
                    <div class="flex items-center gap-4">
                        <select class="border border-gray-300 rounded px-3 py-2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <button class="bg-green-500 text-white text-xs px-4 py-2 rounded hover:bg-green-600">САГСАНД НЭМЭХ</button>
                        <button class="bg-green-500 text-white text-xs px-4 py-2 rounded hover:bg-green-600">ХУДАЛДАЖ АВАХ</button>
                    </div>
                    
                </div>
            </div>
            <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
                <h2 style="text-align: center;" class="text-3xl font-semibold">Сэтгэгдэл</h2>
                <ul style="list-style: none; padding: 0;">
                    <!-- Example comment -->
                    <li
                        style="display: flex; align-items: center; margin-bottom: 15px; text-align: left; background: #f9f9f9; border-radius: 10px; padding: 10px;">
                        <img src="/souvner.jpg" alt="Profile Picture"
                            style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                        <div>
                            <p style="margin: 0; font-weight: bold;">John Doe</p>
                            <p style="margin: 5px 0; color: #555;">This is a great article! Very informative.</p>
                            <div>
                                <span style="color: gold; font-size: 18px;">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                            </div>
                        </div>
                    </li>
                    <!-- Add more comments similarly -->
                </ul>
            </div>
        </div>
    </div>    @include('pages.bookStore.slider')

</x-main-layout>

@vite('resources/js/app.js')
