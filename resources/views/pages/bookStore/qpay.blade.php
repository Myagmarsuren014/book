<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="sm:col-span-3">
                <div class="pt-4 pb-6 px-6 bg-gray-50 rounded-md">
                    <div class="bg-gray-50 py-8 flex justify-center items-center">
                        <div class="max-w-lg rounded-lg shadow-lg p-6 ">
                            <div class="border-b pb-4">
                                <h3 class="text-lg font-semibold text-gray-700"> Худалдан авалт
                                </h3>
                            </div>


                            <div>
                                <img src="https://miro.medium.com/v2/resize:fit:1400/format:webp/1*A9YcoX1YxBUsTg7p-P6GBQ.png"
                                    alt="Example QR Code">
                            </div>

                            <div class="mt-4">
                                <p class="text-gray-600 text-2xl font-semibold text-center">
                                    <span class="text-gray-800">Үнэ:</span> 160,00₮
                                </p>

                            </div>
                            <div class="mt-6 flex flex-col items-center space-y-4">
                                <button
                                    class="bg-blue-600 text-white font-medium  rounded-lg shadow hover:bg-blue-700 transition px-8 py-3 text-sm w-1/2 mx-auto">
                                    <a href="{{ route('bookStore.verified') }}">төлбөр баталгаажуулах</a>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-1">
                <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md">
                    sidebar
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
