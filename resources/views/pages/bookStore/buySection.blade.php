<x-main-layout>

    <div class="container mx-auto flex justify-center py-4">
        <div class="w-full max-w-4xl">
            <nav class="mb-4 text-gray-600">
                <a href="#" class="hover:underline">Нүүр хуудас</a> &gt; 
                <span>Номын дэлгэрэнгүй мэдээлэл</span>
            </nav>

            <div class="flex flex-col md:flex-row gap-6">
                <div class="max-w-xs">
                    <img src="/test.png" alt="Book Cover" class="w-full border border-gray-300">
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

                    <div class="flex items-center gap-4">
                        <select class="border border-gray-300 rounded px-3 py-2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">САГСАНД НЭМЭХ</button>
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">ХУДАЛДАЖ АВАХ</button>
                    </div>
                </div>
                
            </div>
            <div class="py-4 text-center">
                <h1 class="font-bold py-4 text-green-500">Танилцуулга</h1>
                <ul class="list-disc list-inside text-left">
                    <li>Энэхүү ном нь эрүүгийн эрх зүйн үндсэн зарчмуудыг танилцуулна.</li>
                    <li>Онол болон философийн талаарх ойлголтуудыг багтаасан.</li>
                    <li>Хууль эрх зүйн чиглэлээр суралцагчдад зориулсан гарын авлага.</li>
                    <li>Зохиогчийн олон жилийн судалгааны үр дүнг агуулсан.</li>
                    <li>Хууль эрх зүйн практик үйл ажиллагаанд ашиглах боломжтой.</li>
                    <li>Хялбар уншигдахаар бүтэцлэгдсэн.</li>
                </ul>
            </div>
        </div>
    </div>    @include('pages.bookStore.slider')

</x-main-layout>

@vite('resources/js/app.js')
