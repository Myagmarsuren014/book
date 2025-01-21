<nav x-data="{ open: false }" class="top-0">
    <nav class="bg-white antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-8">
                    <!-- Logo -->
                    <div class="shrink-0 px-4">
                        <a href="#" title="">
                            <img class="block w-auto h-10" src="/asset/LDLogo2.png" alt="logo">
                        </a>
                    </div>

                    <!-- Menu (Hidden on phones, visible on larger screens) -->
                    <ul
                        class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center text-black">
                        <li>
                            <a href="/bookStore/home" title=""
                                class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:hover:text-primary-500">
                                Нүүр
                            </a>
                        </li>
                        <li class="shrink-0">
                            <a href="#" title=""
                                class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:hover:text-primary-500">
                                Ангилал
                            </a>
                        </li>
                        <li class="shrink-0">
                            <a href="#" title=""
                                class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:hover:text-primary-500">
                                Бүтээлийн сан
                            </a>
                        </li>
                    </ul>

                    @include('partials.nav.search')
                </div>
                <div class="hidden sm:flex items-center lg:space-x-2">
                    <!-- Cart Button -->
                    <button id="CartButton" data-dropdown-toggle="myCartDropdown1" type="button"
                        class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-50 text-sm font-medium leading-none text-gray-900">
                        <span class="sr-only">Cart</span>
                        <svg class="w-5 h-5 lg:me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                        </svg>
                        <span class="hidden md:flex">Сагс</span>
                        <svg class="hidden md:flex w-4 h-4 text-gray-900 ms-1" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Cart Slider -->
                    <div id="CartSider"
                        class="s fixed top-0 right-0 w-1/2 z-10 h-full bg-gray-50 shadow-lg transform translate-x-full transition-transform duration-300 sm:z-50">
                        <!-- Cart Header -->
                        <div class="flex items-center justify-between p-4 border-b">
                            <h1 class="text-lg font-bold">Сагс</h1>
                            <button id="CloseCartSider" class="text-gray-600 hover:text-gray-800"
                                aria-label="Close Cart">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <path d="M14.5 9.5L9.5 14.5M9.5 9.5L14.5 14.5" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                        <!-- Cart Content -->
                        <div class="mt-4 space-y-4">
                            <!-- Item Template -->
                            <div class="mt-4 space-y-4">
                                <!-- Item Template -->
                                <div class="flex items-center bg-gray-100 p-4 rounded-lg gap-4">
                                    <!-- Image Section -->
                                    <div class="w-16 h-16 bg-gray-700 rounded-lg overflow-hidden">
                                        <img src="/test.png" alt="Apple iPhone 15" class="object-cover w-full h-full">
                                    </div>
                                    <!-- Item Details Section -->
                                    <div class="ml-4 flex-1">
                                        <h3 class="text-sm font-semibold">Нэр</h3>
                                        <div class="flex items-center space-x-2 mt-2">
                                            <button class="p-1 rounded text-black">-</button>
                                            <span class="px-2">2</span>
                                            <button class="p-1 rounded text-black">+</button>
                                            <span class="ml-4 text-gray-800 font-bold">Үнэ: </span>
                                            <span class="ml-auto text-gray-800 font-bold">19,000₮</span>
                                        </div>
                                        <div class="mt-2 text-sm text-gray-500">
                                            <button class="text-red-500 underline">
                                                Хасах
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add More Items Here -->
                        </div>

                        <!-- Summary -->
                        <div class="bg-gray-100 p-4 mt-4 rounded-lg">
                            <div class="mt-2 space-y-2">
                                <div class="flex justify-start gap-2 items-center text-black">
                                    <span class="font-medium">Нийт:</span>
                                    <span class="font-semibold">19,000 ₮</span>
                                </div>
                            </div>
                            <button
                                class="mt-4 w-full py-2 gap-2 text-center flex items-center justify-center gap-x-2 border rounded-lg bg-green-500 hover:bg-green-600 text-white font-medium">
                                <a href="{{ route('bookStore.purchase') }}"><span
                                        class="text-lg font-medium">Төлөх</span></a>
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" stroke="#FFFFFF" stroke-width="2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z"
                                        fill="#FFFFFF" />
                                </svg>
                            </button>
                        </div>

                    </div>




                    <div class="relative inline-block text-left">
                        <!-- Profile Button -->
                        <button id="profileButton" type="button"
                            class="inline-flex items-center rounded-full  p-2 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            aria-haspopup="true" aria-expanded="false">
                            <svg class="w-5 h-5 me-1" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            Бүртгэл
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="profileDropdown"
                            class="hidden absolute right-0 z-20 mt-2 w-48 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <ul class="py-1 text-sm text-gray-700" role="menu" aria-orientation="vertical"
                                aria-labelledby="profileButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">My Account</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Orders</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Favorites</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <!-- Mobile Menu Button -->
                <button id="menuButton" type="button" data-collapse-toggle="ecommerce-navbar-menu-1"
                    aria-controls="ecommerce-navbar-menu-1" aria-expanded="false"
                    class="inline-flex lg:hidden items-center justify-center hover:bg-gray-50 rounded-md p-2 text-gray-900">
                    <span class="sr-only">Open Menu</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>

                <div id="menuSider"
                    class="hidden fixed top-0 right-0 w-1/2 z-50 h-full bg-gray-50 shadow-lg transform translate-x-full transition-transform duration-300">
                    <!-- Menu Header -->
                    <div class="flex items-center justify-between p-4 border-b">
                        <h1 class="text-lg font-bold">Цэс</h1>
                        <button id="CloseMenuSider" class="text-gray-600 hover:text-gray-800"
                            aria-label="Close Cart">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="1.5" />
                                <path d="M14.5 9.5L9.5 14.5M9.5 9.5L14.5 14.5" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 bg-gray-50 rounded-lg mx-auto py-4">
                        <div class="space-y-4">
                            <button type="CartButton1" id="check"
                                class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button 1</button>
                            <button class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button
                                2</button>
                            <button class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button
                                3</button>
                            <button class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button
                                4</button>
                            <button class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button
                                5</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Profile Dropdown Logic
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        if (profileButton && profileDropdown) {
            // Toggle dropdown visibility
            profileButton.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevent click from propagating
                profileDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', () => {
                profileDropdown.classList.add('hidden');
            });

            // Close dropdown when pressing the Escape key
            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') {
                    profileDropdown.classList.add('hidden');
                }
            });
        } else {
            console.error("Profile button or dropdown not found.");
        }

        // Cart Slider Logic
        const cartButton = document.getElementById("CartButton");
        const cartSider = document.getElementById("CartSider");
        const closeCartSider = document.getElementById("CloseCartSider");
        const menuCartButton = document.getElementById("check");

        if (cartButton && cartSider && closeCartSider && menuCartButton) {
            menuCartButton.addEventListener("click", () => {
                cartSider.classList.remove("translate-x-full");
                cartSider.classList.remove("z-10");
                cartSider.classList.add("z-50");
                console.log("Cart slider opened via menu button.");
            });

            // Open cart slider
            cartButton.addEventListener("click", () => {
                cartSider.classList.remove("translate-x-full");
            });

            // Close cart slider
            closeCartSider.addEventListener("click", () => {
                cartSider.classList.add("translate-x-full");
            });
        } else {
            console.error("Cart button, slider, close button, or menu button not found.");
        }

        // Menu Sider Logic
        const menuButton = document.getElementById("menuButton");
        const menuSider = document.getElementById("menuSider");
        const closeMenuSider = document.getElementById("CloseMenuSider");

        if (menuButton && menuSider && closeMenuSider) {
            // Open menu slider
            menuButton.addEventListener("click", () => {
                menuSider.classList.remove("translate-x-full");
            });

            // Close menu slider
            closeMenuSider.addEventListener("click", () => {
                menuSider.classList.add("translate-x-full");
            });
        } else {
            console.error("Menu button, slider, or close button not found.");
        }
    });
</script>
