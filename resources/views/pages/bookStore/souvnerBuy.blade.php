<x-main-layout>

    <div class="container mx-auto flex justify-center py-4 ">
        <div class="w-full max-w-5xl mb-10 rounded-lg bg-white ">
            <nav class="mb-4 text-gray-600 my-4">
                <a href="#" class="hover:underline px-4">Нүүр хуудас</a> &gt;
                <span>Бүтээгдэхүүний дэлгэрэнгүй мэдээлэл</span>
            </nav>

            <div class="flex flex-col md:flex-row gap-6 ">
                <div class="max-w-xs">
                    <img src="/souvner.jpg" alt="Book Cover" class="w-full">
                </div>

                <div class="max-w-lg">
                    <h1 class="text-xl font-bold mb-2">"Монгол Фемида" улаан хүрэн алчуур /limited edition/
                    </h1>

                    <table class="w-full text-sm text-gray-700 mb-6">
                        <tr class="border-b">
                            <td class="py-2 font-medium">Үйлвэрлэгдсэн он:</td>
                            <td class="py-2">2025</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 font-medium">Ангилал:</td>
                            <td class="py-2">Алчуур</td>
                        </tr>
                        <tr>
                            <td class="py-2 font-medium">Хэмжээ (мм):</td>
                            <td class="py-2">55 х 55</td>
                        </tr>
                    </table>
                    <h3 class="font-bold">Танилцуулга</h3>
                    <p class="my-4 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt
                        praesentium fugit pariatur esse, blanditiis, ratione atque obcaecati culpa veniam at
                        necessitatibus molestias eum veritatis sequi voluptatem fugiat alias tempore. Consectetur?</p>

                    <div class="flex items-center gap-4">
                        <select class="border border-gray-300 rounded px-3 py-2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">САГСАНД
                            НЭМЭХ</button>
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">ХУДАЛДАЖ
                            АВАХ</button>
                    </div>

                </div>

            </div>
            <div class="flex items-center justify-center gap-4 mx-auto my-10">

                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600"
                    onclick="showPopup1()">Үнэлгээ өгөх</button>
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





            <div id="popup-container1"tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 bg-gray-800 bg-opacity-50  items-center justify-center z-50">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Сэтгэгдэл </h3>
                            <button type="button" onclick="closePopup1()"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Сэтгэгдэл</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5">
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="price"
                                        class="block mb-2 text-sm font-medium text-gray-900">Нэр</label>
                                    <input type="text" name="price" id="price"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Нэр" required="">
                                </div>

                                <div class="col-span-2">
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900">Сэтгэгдэл</label>
                                    <textarea id="description" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Сэтгэгдэл"></textarea>
                                </div>

                                <div class="col-span-2">
                                    <label for="rating"
                                        class="block mb-2 text-sm font-medium text-gray-900">Үнэлгээ</label>
                                    <div class="flex items-center">
                                        <!-- Star Icons -->
                                        <div class="flex gap-1">
                                            <!-- Repeated Star for 5 levels -->
                                            <button type="button" aria-label="1 star" class="star" data-value="1">
                                                <svg class="w-8 h-8 text-gray-400 hover:text-yellow-500 transition"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                            </button>
                                            <button type="button" aria-label="2 stars" class="star" data-value="2">
                                                <svg class="w-8 h-8 text-gray-400 hover:text-yellow-500 transition"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                            </button>
                                            <button type="button" aria-label="3 stars" class="star"
                                                data-value="3">
                                                <svg class="w-8 h-8 text-gray-400 hover:text-yellow-500 transition"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                            </button>
                                            <button type="button" aria-label="4 stars" class="star"
                                                data-value="4">
                                                <svg class="w-8 h-8 text-gray-400 hover:text-yellow-500 transition"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                            </button>
                                            <button type="button" aria-label="5 stars" class="star"
                                                data-value="5">
                                                <svg class="w-8 h-8 text-gray-400 hover:text-yellow-500 transition"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Selected Value -->
                                        <span id="rating-value" class="ml-4 text-sm text-gray-700"></span>
                                        <input type="hidden" id="selected-rating" name="rating">
                                    </div>
                                </div>

                            </div>
                            <button type="submit"
                                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>

                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('pages.bookStore.slider');


</x-main-layout>


<script>
    // Function to show the popup
    function showPopup() {
        const popupContainer = document.getElementById('popup-container');
        popupContainer.classList.remove('hidden');
        popupContainer.classList.add('flex');
        document.addEventListener('keydown', handleEscape);
    }

    function showPopup1() {
        const popupContainer = document.getElementById('popup-container1');
        popupContainer.classList.remove('hidden');
        popupContainer.classList.add('flex');
        document.addEventListener('keydown', handleEscape);
    }

    function closePopup1() {
        const popupContainer = document.getElementById('popup-container1');
        popupContainer.classList.add('hidden');
        popupContainer.classList.remove('flex');
        document.removeEventListener('keydown', handleEscape);
    }


    // Function to close the popup
    function closePopup() {
        const popupContainer = document.getElementById('popup-container');
        popupContainer.classList.add('hidden');
        popupContainer.classList.remove('flex');
        document.removeEventListener('keydown', handleEscape);
    }

    // Close popup on Esc key press
    function handleEscape(event) {
        if (event.key === 'Escape') {
            closePopup();
        }
    }

    document.querySelectorAll('.star').forEach((star) => {
        star.addEventListener('mouseover', handleHover);
        star.addEventListener('click', handleClick);
        star.addEventListener('mouseleave', resetStars);
    });

    function handleHover(event) {
        const value = event.currentTarget.getAttribute('data-value');
        highlightStars(value);
    }

    function handleClick(event) {
        const value = event.currentTarget.getAttribute('data-value');
        document.getElementById('selected-rating').value = value;
    }

    function resetStars() {
        const selectedValue = document.getElementById('selected-rating').value || 0;
        highlightStars(selectedValue);
    }

    function highlightStars(value) {
        document.querySelectorAll('.star').forEach((star) => {
            const starValue = star.getAttribute('data-value');
            const svg = star.querySelector('svg');
            svg.classList.toggle('text-yellow-500', starValue <= value);
            svg.classList.toggle('text-gray-400', starValue > value);
        });
    }
</script>
