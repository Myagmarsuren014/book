<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="sm:col-span-3">
                <div class="pt-4 pb-6 px-6 bg-gray-50 rounded-md"> <!-- px-6 py-4 bg-white rounded-md -->
                    <div>
                        <div class="flex w-50 h-20 my-8 justify-center">
                            <img src="/migDaatgal.png" alt="migDaatgalLogo">
                        </div>
                        <form class="max-w-md mx-auto">
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="last_name"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Овог</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Утасны
                                        дугаар</label>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="first_name"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Нэр</label>
                                </div>
                                <div class="relative z-0 w-full mb-5 group">
                                    <input type="text" name="id_number"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required />
                                    <label
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Регистрийн
                                        дугаар</label>
                                </div>
                            </div>

                            <!-- This input now spans the full width of two columns -->
                            <div class="relative z-0 w-full mb-5 group col-span-2">
                                <input type="text" name="license_number"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Мэргэжлийн
                                    үнэмлэхний дугаар</label>
                            </div>
                        </form>
                        <h3 class="mb-5 text-2xl font-medium text-gray-900 text-center">Багц сонгох</h3>
                        <ul class="grid w-full gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                            <li>
                                <input type="radio" id="hosting-small" name="hosting" value="hosting-small"
                                    class="hidden peer" required />
                                <label for="hosting-small"
                                    class="radio-label">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">10,000,000 ₮</div>
                                        <div class="w-full">Хураамж 50,000 ₮</div>
                                    </div>
                                    <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M2 8l4 4L14 2" />
                                    </svg>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="hosting-big" name="hosting" value="hosting-big"
                                    class="hidden peer">
                                <label for="hosting-big"
                                    class="radio-label">
                                <div class="block">
                                        <div class="w-full text-lg font-semibold">20,000,000 ₮</div>
                                        <div class="w-full">Хураамж 90,000 ₮</div>
                                    </div>
                                    <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M2 8l4 4L14 2" />
                                    </svg>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="hosting-large" name="hosting" value="hosting-large"
                                    class="hidden peer">
                                <label for="hosting-large"
                                    class="radio-label">
                                <div class="block">
                                        <div class="w-full text-lg font-semibold">40,000,000 ₮</div>
                                        <div class="w-full">Хураамж 160,000 ₮</div>
                                    </div>
                                    <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M2 8l4 4L14 2" />
                                    </svg>
                                </label>
                            </li>
                        </ul>

                        <div class="flex justify-center items-center my-8">
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                class="btn-primary flex justify-center" type="button">
                                Дэлгэрэнгүй гэрээтэй танилцах
                            </button>
                        </div>
                        <div class="flex items-center justify-center my-8">
                            <input id="checked-checkbox" type="checkbox" value=""
                                class="w-4 h-4 bg-white border-2 border-gray-300 rounded focus:outline-none checked:bg-green-500 checked:border-green-500">
                            <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Гэрээтэй
                                уншиж танилцсан</label>
                        </div>
                        <button class="btn-submit">Төлөх</button>
                    </div>
                </div>
            </div>

            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-4xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-[#252A47]">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Гэрээний нөхцөл</h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            check
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                            <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-1 ">
                <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md ">
                    sidebar check
                </div>
            </div>
        </div>
    </div>
</x-main-layout>

<script>
    document.querySelectorAll('[data-modal-toggle]').forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex'); 
        });
    });

    document.querySelectorAll('[data-modal-hide]').forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.fixed');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    });
</script>
