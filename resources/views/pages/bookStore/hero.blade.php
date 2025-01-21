<div id="default-carousel" class="relative w-full overflow-hidden">
    <!-- Carousel wrapper -->
    <div class="relative flex transition-transform duration-700 ease-in-out" data-carousel-items>
        <!-- Item 1 -->
        <div class="w-full flex-shrink-0 relative" data-carousel-item>
            <img src="/Glamourkbbanner.png" class="w-full h-full object-cover" alt="Image 1">
            <button class="absolute bottom-12 left-32 bg-green-500 hover:bg-green-700 ease-in duration-100 text-white px-6 py-3 rounded z-50 
                hidden sm:block">
                дэлгэрэнгүй
            </button>
        </div>
        <!-- Item 2 -->
        <div class="w-full flex-shrink-0 relative" data-carousel-item>
            <img src="/Glamourkbbanner.png" class="w-full h-full object-cover" alt="Image 2">
            <button class="absolute bottom-12 left-32 bg-green-500 hover:bg-green-700 ease-in duration-100 text-white px-6 py-3 rounded z-50 
                hidden sm:block">
                дэлгэрэнгүй
            </button>
        </div>
        <!-- Item 3 -->
        <div class="w-full flex-shrink-0 relative" data-carousel-item>
            <img src="/Glamourkbbanner.png" class="w-full h-full object-cover" alt="Image 3">
            <button class="absolute bottom-12 left-32 bg-green-500 hover:bg-green-700 ease-in duration-100 text-white px-6 py-3 rounded z-50 
                hidden sm:block">
                дэлгэрэнгүй
            </button>
        </div>
        <!-- Item 4 -->
        <div class="w-full flex-shrink-0 relative" data-carousel-item>
            <img src="/Glamourkbbanner.png" class="w-full h-full object-cover" alt="Image 4">
            <button class="absolute bottom-12 left-32 bg-green-500 hover:bg-green-700 ease-in duration-100 text-white px-6 py-3 rounded z-50 
                hidden sm:block">
                дэлгэрэнгүй
            </button>
        </div>
        <!-- Item 5 -->
        <div class="w-full flex-shrink-0 relative" data-carousel-item>
            <img src="/Glamourkbbanner.png" class="w-full h-full object-cover" alt="Image 5">
            <button class="absolute bottom-12 left-32 bg-green-500 hover:bg-green-700 ease-in duration-100 text-white px-6 py-3 rounded z-50 
                hidden sm:block">
                дэлгэрэнгүй
            </button>
        </div>
        
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex bottom-5 left-1/2 -translate-x-1/2 space-x-3">
        <button class="w-3 h-3 sm:w-2 sm:h-2 md:w-2.5 md:h-2.5 rounded-full bg-gray-400" aria-current="true" data-carousel-slide-to="0"></button>
        <button class="w-3 h-3 sm:w-2 sm:h-2 md:w-2.5 md:h-2.5 rounded-full bg-gray-400" data-carousel-slide-to="1"></button>
        <button class="w-3 h-3 sm:w-2 sm:h-2 md:w-2.5 md:h-2.5 rounded-full bg-gray-400" data-carousel-slide-to="2"></button>
        <button class="w-3 h-3 sm:w-2 sm:h-2 md:w-2.5 md:h-2.5 rounded-full bg-gray-400" data-carousel-slide-to="3"></button>
        <button class="w-3 h-3 sm:w-2 sm:h-2 md:w-2.5 md:h-2.5 rounded-full bg-gray-400" data-carousel-slide-to="4"></button>
    </div>
    
</div>

<script>
const carousel = document.querySelector('[data-carousel-items]');
const items = carousel.querySelectorAll('[data-carousel-item]');
const indicators = document.querySelectorAll('[data-carousel-slide-to]');
const totalItems = items.length;
let currentIndex = 0;

// Function to update the carousel's transform property
function updateCarousel(index) {
    carousel.style.transform = `translateX(-${index * 100}%)`;
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('bg-blue-500', i === index); // Highlight active indicator
        indicator.classList.toggle('bg-gray-400', i !== index);
    });
}

// Auto-slide every 5 seconds
setInterval(() => {
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel(currentIndex);
}, 5000);

// Manual indicator navigation
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        currentIndex = index;
        updateCarousel(currentIndex);
    });
});

// Initialize carousel
updateCarousel(currentIndex);
</script>