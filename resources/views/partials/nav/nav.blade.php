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
          <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center text-black">
            <li>
              <a href="#" title="" class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:hover:text-primary-500">
                Нүүр
              </a>
            </li>
            <li class="shrink-0">
              <a href="#" title="" class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:hover:text-primary-500">
                Ангилал
              </a>
            </li>
            <li class="shrink-0">
              <a href="#" title="" class="flex text-sm font-medium text-gray-900 hover:text-primary-700 dark:hover:text-primary-500">
                Бүтээлийн сан
              </a>
            </li>
          </ul>

          @include('partials.nav.search')
        </div>
        <div class="hidden sm:flex items-center lg:space-x-2">
          <!-- Cart Button -->
          <button id="CartButton" data-dropdown-toggle="myCartDropdown1" type="button" class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-50 text-sm font-medium leading-none text-gray-900">
            <span class="sr-only">Cart</span>
            <svg class="w-5 h-5 lg:me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
            </svg> 
            <span class="hidden md:flex">Сагс</span>
            <svg class="hidden md:flex w-4 h-4 text-gray-900 ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
            </svg>              
          </button>

          <!-- Cart Slider -->
          <div
            id="CartSider"
            class="s fixed top-0 right-0 w-1/2 z-10 h-full bg-gray-50 shadow-lg transform translate-x-full transition-transform duration-300 sm:z-50"
          >
           <!-- Cart Header -->
            <div class="flex items-center justify-between p-4 border-b">
              <h1 class="text-lg font-bold">Сагс</h1>
              <button
                id="CloseCartSider"
                class="text-gray-600 hover:text-gray-800"
                aria-label="Close Cart"
              >
                <svg
                  class="w-6 h-6"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                  <path
                    d="M14.5 9.5L9.5 14.5M9.5 9.5L14.5 14.5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                </svg>
              </button>
            </div>
            <!-- Cart Content -->
            <div class="p-4 bg-gray-200 rounded-lg shadow-lg mx-auto py-4">
              <div class="flex items-center space-x-4 gap-4">
                <!-- Product Image -->
                <div class="w-1/4">
                  <img src="/asset/LDLogo2.png" alt="product" class="h-10 w-auto rounded-lg">
                </div>
                
                <!-- Product Name and Description -->
                <div class="w-3/4">
                  <h3 class="text-xl font-semibold text-gray-900">Product Name</h3>
                  <p class="text-gray-700 mt-2">
                    This is a brief description of the product. It provides details about the features, benefits, or any other information.
                  </p>
                </div>
              </div>
            </div>
                    
          </div>

          

        
          <div class="relative inline-block text-left">
            <!-- Profile Button -->
            <button id="profileButton" type="button" 
              class="inline-flex items-center rounded-full  p-2 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
              aria-haspopup="true" aria-expanded="false">
              <svg class="w-5 h-5 me-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
              </svg>  
              Бүртгэл
            </button>
          
            <!-- Dropdown Menu -->
            <div id="profileDropdown" 
              class="hidden absolute right-0 z-20 mt-2 w-48 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
              <ul class="py-1 text-sm text-gray-700" role="menu" aria-orientation="vertical" aria-labelledby="profileButton">
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
          <button id="menuButton" type="button" data-collapse-toggle="ecommerce-navbar-menu-1" aria-controls="ecommerce-navbar-menu-1" aria-expanded="false" class="inline-flex lg:hidden items-center justify-center hover:bg-gray-50 rounded-md p-2 text-gray-900">
            <span class="sr-only">Open Menu</span>
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
            </svg>                
          </button>

          <div
            id="menuSider"
            class="hidden fixed top-0 right-0 w-1/2 z-50 h-full bg-gray-50 shadow-lg transform translate-x-full transition-transform duration-300"
          >
           <!-- Menu Header -->
            <div class="flex items-center justify-between p-4 border-b">
              <h1 class="text-lg font-bold">Цэс</h1>
              <button
                id="CloseMenuSider"
                class="text-gray-600 hover:text-gray-800"
                aria-label="Close Cart"
              >
                <svg
                  class="w-6 h-6"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                  <path
                    d="M14.5 9.5L9.5 14.5M9.5 9.5L14.5 14.5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                </svg>
              </button>
            </div>

            <div class="p-4 bg-gray-50 rounded-lg mx-auto py-4">
              <div class="space-y-4">
                <button type="CartButton1" id="check" class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button 1</button>
                <button class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button 2</button>
                <button class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button 3</button>
                <button class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button 4</button>
                <button class="w-full py-2 bg-blue-500 text-black font-semibold rounded-lg ">Button 5</button>
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
