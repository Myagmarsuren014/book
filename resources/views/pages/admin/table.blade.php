<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="sm:col-span-3">
                <div class="pt-4 pb-6 px-6 bg-white rounded-md shadow-lg">

                    {{-- dashboard --}}

                    <div class="flex flex-row gap-8 mx-auto justify-center mb-9">
                        <div class="bg-blue-50 p-4 rounded-lg shadow-md">
                            <h2 class="text-lg font-semibold text-gray-800">Нийт хэрэглэгчидийн тоо</h2>
                            <p class="mt-5 text-2xl text-gray-800">10</p>
                        </div>
                        <div class="bg-yellow-50 p-4 rounded-lg shadow-md">
                            <h2 class="text-lg font-semibold text-gray-800">Хүлээгдэж буй хэрэглэгчид</h2>
                            <p class="mt-5 text-2xl text-gray-800">5</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg shadow-md">
                            <h2 class="text-lg font-semibold text-gray-800">Баталгаажсан хэрэглэгчид</h2>
                            <p class="mt-5 text-2xl text-gray-800">5</p>
                        </div>
                    </div>

                    {{-- end dashboard --}}


                    {{-- table --}}

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white mt-10">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-600 dark:text-gray-300 ">
                            <thead class="text-xs text-black uppercase bg-gray-100 dark:bg-gray-800 ">
                                <tr class="bg-gray-50">

                                    <th scope="col" class="px-6 py-3">
                                        Хэрэглэгчийн нэр
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Төлөв
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Утасны дугаар
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Регистрийн дугаар
                                    </th scope="col" class="px-6 py-3">
                                    <th>
                                        Мэргэжлийн үнэмлэхний дугаар
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
                                <tr
                                    class="bg-gray-50  border-y-1 border-gray-500  dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-300">

                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap cursor-pointer">
                                        Ү.Тамир
                                    </th>
                                    <td class="px-6 py-4 text-orange-400 cursor-pointer">
                                        Хүлээгдэж буй
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer">
                                        89475188
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer">
                                        Uk123456
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer">
                                        1234567890
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Арилгах</a>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-gray-50   border-y-1 border-gray-500  dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-300">

                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap cursor-pointer">
                                        Н.Мягмарсүрэн
                                    </th>
                                    <td class="px-6 py-4 text-green-400 cursor-pointer">
                                        Баталгаажсан
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer">
                                        9876543
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer">
                                        Uk123456
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer">
                                        1234567890
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Арилгах</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- end table --}}

                </div>
            </div>
            <div class="sm:col-span-1">
                <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md shadow-md">
                    sidebar
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
