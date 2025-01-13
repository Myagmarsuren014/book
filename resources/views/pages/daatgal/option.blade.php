<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <!-- Main Content Section -->
            <div class="sm:col-span-3 bg-white">
                <div class="mx-auto max-w-7xl px-4 my-8 bg-white">
                    <div class="flex flex-col items-center text-center space-y-4 p-6 rounded-lg">
                        <!-- Title -->
                        <p class="text-2xl font-bold">
                            Өмгөөлөгчийн хариуцлагын даатгал
                        </p>
                        <!-- Description -->
                        <p class="text-gray-700 text-sm">
                            хамгийн шилдэг сонголт.
                        </p>
                        <div class="w-full h-3x bg-white my-4"></div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 py-4 sm:grid-cols-2 lg:grid-cols-2">
                        <!-- Card 1 -->
                        <div class="border rounded-md bg-gray-100 p-4 flex flex-row sm:flex-row items-center gap-8">
                            <!-- Image Section -->
                            <div class="flex-shrink-0 w-1/3 h-1/3 sm:w-32 sm:h-32 bg-gray-300 flex items-center justify-center">
                                <a>
                                    <img src="/migLogo.png" alt="" class="rounded-md">
                                </a>
                            </div>
                            <!-- Description Section -->
                            <div class="text-center sm:text-left">
                                <h2 class="text-lg font-semibold text-gray-800">Description</h2>
                                <p class="text-gray-600">This is the description text. Add more details here.</p>
                                <a 
                                    class="my-3 inline-flex items-center text-gray-600 gap-2 font-bold hover:text-red-600 transition duration-200 ease-in group" 
                                    href="/daatgal/form">
                                    Даатгуулах   
                                </a>
                            </div>
                        </div>
            
                        <!-- Card 2 -->
                        <div class="border rounded-md bg-gray-100 p-4 flex flex-row sm:flex-row items-center gap-8">
                            <div class="flex-shrink-0 w-1/3 h-1/3 sm:w-32 sm:h-32 bg-gray-300 flex items-center justify-center">
                                <a>
                                    <img src="/mandalLogo.png" alt="" class="rounded-md">
                                </a>
                            </div>
                            <div class="text-center sm:text-left">
                                <h2 class="text-lg font-semibold text-gray-800">Description</h2>
                                <p class="text-gray-600">This is the description text. Add more details here.</p>
                                <a class="my-3  inline-flex text-gray-600 font-bold hover:text-red-600 hover:ease-in transition duration-200" 
                                href="/daatgal/form">Даатгуулах</a>
                            </div>
                        </div>
            
                        <!-- Card 3 -->
                        <div class="border rounded-md bg-gray-100 p-4 flex flex-row sm:flex-row items-center gap-8">
                            <div class="flex-shrink-0 w-1/3 h-1/3 sm:w-32 sm:h-32 bg-gray-300 flex items-center justify-center">
                                <a>
                                    <img src="/ubdaatgalLogo.png" alt="" class="rounded-md">
                                </a>
                            </div>
                            <div class="text-center sm:text-left">
                                <h2 class="text-lg font-semibold text-gray-800">Description</h2>
                                <p class="text-gray-600">This is the description text. Add more details here.</p>
                                <a class="my-3  inline-flex text-gray-600 font-bold hover:text-red-600 hover:ease-in transition duration-200" 
                                href="/daatgal/form">Даатгуулах</a>
                            </div>
                        </div>
            
                        <!-- Card 4 -->
                        <div class="border rounded-md bg-gray-100 p-4 flex flex-row sm:flex-row items-center gap-8">
                            <div class="flex-shrink-0 w-1/3 h-1/3 sm:w-32 sm:h-32 bg-gray-300 flex items-center justify-center">
                                <a>
                                    <img src="/bodiLogo.jpeg" alt="" class="rounded-md">
                                </a>
                            </div>
                            <div class="text-center sm:text-left">
                                <h2 class="text-lg font-semibold text-gray-800">Description</h2>
                                <p class="text-gray-600">This is the description text. Add more details here.</p>
                                <a class="my-3  inline-flex text-gray-600 font-bold hover:text-red-600 hover:ease-in transition duration-200" 
                                href="/daatgal/form">Даатгуулах</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Sidebar Section -->
            <div class="sm:col-span-1">
                <div class="pt-4 pb-6 px-4 bg-gray-50 rounded-md">
                    Sidebar
                </div>
            </div>
        </div>
    </div>
</x-main-layout>