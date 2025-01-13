<x-main-layout>
    <div class="mx-auto max-w-7xl px-4 my-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
            <div class="sm:col-span-3">
                <div class="pt-4 pb-6 px-6 bg-gray-50 rounded-md">
                    <div>
                        <div class="flex flex-col items-center text-center space-y-4 p-6 rounded-lg">
                            <!-- Logo -->
                            <div class="flex w-1/2 h-auto mx-auto my-8 items-center justify-center">
                                <img src="/migDaatgal.png" alt="migDaatgalLogo">
                            </div>
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
                        
                        <div class="space-y-4 p-4 ">
                            <!-- Accordion Card 1 -->
                            <div>
                                <button class="accord-btn" aria-expanded="false" data-accordion-target="#card1">
                                    <p class="mr-2">Даатгалын зүйлл</p>
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                    </svg>
                                </button>
                                <div id="card1" class=" bg-white p-4 shadow-md rounded-lg">
                                    <p class="text-gray-600">
                                        <ul>
                                            <li>
                                                Даатгалын зүйл нь даатгуулагч мэргэжлийн ажил үүргээ гүйцэтгэх явцдаа мэргэжлийн
                                                ур чадвар дутагдсанаас болон санамсар болгоомжгүйн улмаас үйлчлүүлэгчийн эд
                                                хөрөнгө, амь нас, эрүүл мэндэд хохирол учруулсан тохиолдолд хуулийн дагуу хүлээх
                                                хариуцлага байна.
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion Card 2 -->
                            <div>
                                <button class="accord-btn" aria-expanded="false" data-accordion-target="#card2">
                                    <p class="mr-2">Даатгалын үндсэн эрсдэл</p>
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                    </svg>
                                </button>
                                
                                <div id="card2" class="hidden bg-white p-4 shadow-md rounded-lg">
                                    <p class="text-gray-600">
                                        Даатгуулагчийн ажил мэргэжлийн алдаа, мэргэжлийн ур чадвар дутагдсанаас болон
                                        санамсар болгоомжгүйн улмаас өмгөөллийн үйл ажиллагаанд алдаа гаргах; Даатгуулагч
                                        үйлчлүүлэгчийнхээ гаргасан хүсэлтийг хуульд заасан журмын дагуу хангаж
                                        ажиллаагүйгээс учирсан хохирол, зардал; Даатгуулагч үйлчлүүлэгчдээ эрх зүйн буруу
                                        зөвлөгөө өгсний улмаас учирсан хохирол, зардал; Энэхүү даатгалын гэрээгээр Монгол
                                        Улсын нутаг дэвсгэрт Даатгуулагчийн гэрээнд заагдсан байр, ажил үүргээ гүйцэтгэж буй
                                        газарт үйлчилнэ;
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion Card 3 -->
                            <div>
                                <button class="accord-btn" aria-expanded="false" data-accordion-target="#card3">
                                    <p class="mr-2">Даатгалын үнэлгээ</p>
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                    </svg>
                                </button>
                                <div id="card3" class="hidden bg-white p-4 shadow-md rounded-lg">
                                    <p class="text-gray-600">
                                        Даатгалын үнэлгээг даатгуулагчийн ажил үүргийн онцлог, ажилласан жил, туршлага, цар
                                        хүрээ, үйлчилгээний чиглэлээс хамааруулан харилцан тохиролцож тогтооно.
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion Card 4 -->
                            <div>
                                <button class="accord-btn" aria-expanded="false" data-accordion-target="#card4">
                                    <p class="mr-2">Даатгалын хураамж</p>
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                    </svg>
                                </button>
                                <div id="card4" class="hidden bg-white p-4 shadow-md rounded-lg">
                                    <p class="text-gray-600 mt-4">0.3%-1.0%</p>
                                </div>
                            </div>

                            <!-- Accordion Card 5 -->
                            <div>
                                <button class="accord-btn" aria-expanded="false" data-accordion-target="#card5">
                                    <p class="mr-2">Нөхөн төлбөр олгох нөхцөл</p>
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                    </svg>
                                </button>
                                
                                <div id="card5" class="hidden bg-white p-4 shadow-md rounded-lg">
                                    <p class="text-gray-600 mt-4">
                                        Нөхөн төлбөрийн нэхэмжлэл; Даатгалын тохиолдол бий болсныг нотлох баримтууд, эд
                                        мөрийн баримтууд; Даатгалын тохиолдол бий болсон, нөхөн төлбөрийн хэмжээг тогтоосон
                                        шүүхийн шийдвэр; Шүүхээр шийдвэрлүүлэхтэй холбогдон гарсан зардлын баримт;
                                        Шаардлагатай тохиолдолд мэргэжлийн ёс зүйн хариуцлагын хорооны тодорхойлолт буюу
                                        дүгнэлт; Шаардлагатай бусад баримт, мэдээлэл;
                                    </p>
                                </div>
                            </div>

                            <!-- Accordion Card 6 -->
                            <div>
                                <button class="accord-btn" aria-expanded="false" data-accordion-target="#card6">
                                    <p class="mr-2">Нөхөн төлбөр олгохгүй нөхцөл</p>
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                    </svg>
                                </button>
                                <div id="card6" class="hidden bg-white p-4 shadow-md rounded-lg">
                                    <p class="text-gray-600 mt-4">
                                        Даатгуулагч санаатайгаар хохирол учруулсан буюу даатгалын тохиолдол бий болох
                                        нөхцөл, орчныг бүрдүүлсэн; Даатгуулагч даатгалын зүйлийн талаар даатгагчид худал
                                        мэдээлсэн, хуурамч бичиг баримт бүрдүүлсэн нь тогтоогдсон; Гарсан хохирлыг
                                        даатгуулагч буруутай этгээдээр нөхөн төлүүлсэн; Даатгалын гэрээнд заагдаагүй нөхцөл,
                                        эрсдэлийн улмаас гарсан хохирол; Хууль тогтоомжид заасан бусад үндэслэл;
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center w-50% mt-50">
                        <a href="{{ route('daatgal.next') }}" class="btn-primary mt-50">даатгал үүсгэх</a>
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const accordionButtons = document.querySelectorAll('[data-accordion-target]');
    
        accordionButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const targetId = button.getAttribute("data-accordion-target");
                const targetElement = document.querySelector(targetId);
                
                const isExpanded = button.getAttribute("aria-expanded") === "true";
                
                button.setAttribute("aria-expanded", !isExpanded);
                targetElement.classList.toggle("hidden");
            });
        });
    });

</script>