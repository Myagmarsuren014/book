<div class="bg-gray-100 w-full py-5 mx-auto max-w-6xl rounded-lg px-4 lg:px-8">
    <div class="flex justify-center items-center mb-5">
        <h2 class="text-3xl font-semibold text-center border-b-2 border-blue-500">
            Шинээр нэмэгдсэн
        </h2>
    </div>


    <div class="relative">
        <!-- Navigation Buttons -->
        <button id="prev-btn"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-200 hover:bg-gray-400 text-gray-700 rounded-full p-2 z-10 ml-5">
            &#10094;
        </button>
        <button id="next-btn"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-200 hover:bg-gray-400 text-gray-700 rounded-full p-2 z-10 mr-5">
            &#10095;
        </button>

        <!-- Product Slider -->
        <div id="product-slider" class="product-slider flex gap-4 overflow-x-auto scrollbar-hide">
            <!-- Repeatable Product Cards -->
            <div class="single-slide bg-white p-2 rounded-lg shadow-lg">
                <div class="product-card flex flex-col items-center w-full md:w-[256px]">
                    <div class="card-image mb-4">
                        <a href="https://legaldata.mn/book/view/370">
                            <img src="https://legaldata.mn/storage/pictures/2780/01JHHDTA9PHDC7582DGBPHZ1R3.png"
                                alt="Эрүүгийн эрх зүйн хууль ёсны зарчим" class="object-cover rounded-md">
                        </a>
                    </div>
                    <div class="price-block text-center">
                        <span class="text-lg font-bold text-green-600">50,000₮</span>
                        <a href="{{route('bookStore.buySection')}}" wire:click.prevent="addToCart()"
                            class="block mt-2 text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-md">
                            Сагсанд хийх
                        </a>
                    </div>
                    <div class="product-header mt-3 text-center">
                        <h3 class="text-md font-semibold">
                            <a href="https://legaldata.mn/book/view/370">Эрүүгийн эрх зүйн хууль ёсны зарчим /Онол,
                                философи/</a>
                        </h3>
                        <a href="#" class="text-sm text-gray-600">Б.Мөнх-Эрдэнэ</a>
                    </div>
                </div>
            </div>
            <!-- Add more products here -->
        </div>

        <!-- Dots Navigation -->
        <div id="dots-container" class="flex justify-center mt-4 gap-2">
            <!-- Dots will be dynamically created -->
        </div>
    </div>
</div>

<style>
    /* Hide the scrollbar for better aesthetics */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #c0c0c0;
        cursor: pointer;
    }

    .dot.active {
        background-color: #007bff;
    }

    #prev-btn {
        margin-left: -3rem;
    }

    #next-btn {
        margin-right: -3rem;
    }

    /* Navigation button styling */
    #prev-btn,
    #next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: #f3f3f3;
        border-radius: 50%;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 12px;
        transition: background-color 0.3s ease;
        z-index: 10;
    }

    #prev-btn:hover,
    #next-btn:hover {
        background-color: #d1d1d1;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slider = document.getElementById("product-slider");
        const nextBtn = document.getElementById("next-btn");
        const prevBtn = document.getElementById("prev-btn");
        const dotsContainer = document.getElementById("dots-container");
        const slides = document.querySelectorAll(".single-slide");
        let currentIndex = 0;
        let autoSlide;

        const getCardsPerSlide = () => {
            if (window.innerWidth >= 1024) {
                return 4; // Desktop
            } else if (window.innerWidth >= 768) {
                return 3; // Tablet
            } else {
                return 1; // Mobile
            }
        };

        let cardsPerSlide = getCardsPerSlide();
        const totalSlides = Math.ceil(slides.length / cardsPerSlide);

        // Initialize Dots
        const initializeDots = () => {
            dotsContainer.innerHTML = "";
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement("div");
                dot.classList.add("dot");
                if (i === 0) dot.classList.add("active");
                dot.addEventListener("click", () => moveToSlide(i));
                dotsContainer.appendChild(dot);
            }
        };

        // Navigation Button Handlers
        nextBtn.addEventListener("click", () => moveToSlide(currentIndex + 1));
        prevBtn.addEventListener("click", () => moveToSlide(currentIndex - 1));

        // Move to Slide Function
        const moveToSlide = (index) => {
            if (index < 0) {
                currentIndex = totalSlides - 1;
            } else if (index >= totalSlides) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }
            slider.scrollTo({
                left: slider.offsetWidth * currentIndex,
                behavior: "smooth",
            });
            updateDots();
        };

        // Update Active Dot
        const updateDots = () => {
            document.querySelectorAll(".dot").forEach((dot, index) => {
                dot.classList.toggle("active", index === currentIndex);
            });
        };

        // Auto Slide
        const startAutoSlide = () => {
            autoSlide = setInterval(() => {
                moveToSlide(currentIndex + 1);
            }, 3000);
        };

        const stopAutoSlide = () => clearInterval(autoSlide);

        // Responsive Handling
        const handleResize = () => {
            cardsPerSlide = getCardsPerSlide();
            initializeDots();
            currentIndex = 0;
            moveToSlide(0);
        };

        window.addEventListener("resize", handleResize);

        // Initialize on Load
        handleResize();
        startAutoSlide();

        slider.addEventListener("mouseover", stopAutoSlide);
        slider.addEventListener("mouseout", startAutoSlide);
    });
</script>
