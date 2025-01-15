<form action="" method="GET" class="relative w-full max-w-xs sm:max-w-sm md:max-w-lg lg:max-w-xl mx-auto px-2 sm:px-4 ">
    <div class="flex items-center bg-white shadow-md rounded-full overflow-hidden border border-gray-300">
      <!-- Category Selector -->
      <select name="category"
        class="border-r px-2 sm:px-3 py-1 text-xs w-1/2 sm:text-sm text-gray-600 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-l-full appearance-none"
        aria-label="Category Selector">
        <option value="all" selected>Бүх ангилал</option>
        <option value="fashion">Бэлэг дурсга</option>
        <option value="furniture">Furniture</option>
        <option value="beauty">Beauty</option>
        <option value="electronics">Electronics</option>
        <option value="sports">Sports</option>
        <option value="auto">Auto</option>
      </select>
  
      <!-- Search Input -->
      <input type="text" name="q" placeholder="хайлт"
        class="flex-grow px-2 sm:px-3 py-1 text-xs sm:text-sm w-3/4 text-gray-700 focus:outline-none"
        aria-label="Search Input" />
  
      <!-- Submit Button -->
      <button type="submit"
        class="px-2 sm:px-3 py-1 bg-blue-600 text-white font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 transition rounded-r-full"
        aria-label="Search Button">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
          class="w-4 h-4 sm:w-5 sm:h-5">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.35-4.35M17.5 10a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" />
        </svg>
      </button>
    </div>
  </form>
  