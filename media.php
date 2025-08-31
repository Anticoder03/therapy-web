<?php
// Media Page - ALIGN PEAK PHYSIO
$page_title = "Media - ALIGN PEAK PHYSIO";
include 'includes/navbar.php';
?>

<!-- Book Appointment Modal -->
<dialog id="appointmentModal" class="rounded-lg shadow-lg w-full max-w-md p-0">
    <form id="appointmentForm" method="dialog" class="bg-white p-6 rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Book Appointment</h2>
            <button id="closeModalBtn" type="button" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" required class="w-full border rounded px-3 py-2" />
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Phone</label>
            <input type="tel" name="phone" required class="w-full border rounded px-3 py-2" />
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" required class="w-full border rounded px-3 py-2" />
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Date</label>
            <input type="date" name="date" required class="w-full border rounded px-3 py-2" />
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Submit</button>
    </form>
</dialog>
<script>
    // Modal open/close logic
    var modal = document.getElementById('appointmentModal');
    var openBtns = document.querySelectorAll('#openModalBtn, #openModalBtnMobile, #heroBookBtn');
    openBtns.forEach(function(btn) {
        if (btn) btn.onclick = function() { modal.showModal(); };
    });
    document.getElementById('closeModalBtn').onclick = function() { modal.close(); };
    document.getElementById('appointmentForm').onsubmit = function(e) {
        e.preventDefault();
        fetch('/lead', {
            method: 'POST',
            body: new FormData(this)
        }).then(function() {
            alert('Appointment request sent!');
            modal.close();
        });
    };
</script>
<!-- Hero Section -->
<section class="bg-blue-600 text-white py-20 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">WHERE CELEBRITIES & STARS HEAL</h1>
    <p class="mb-8 text-lg md:text-xl">India's Most Trusted Physiotherapy Clinic</p>
    <a href="#appointmentModal" id="heroBookBtn" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100 transition">Book Appointment</a>
</section>
<!-- Team Up With Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold text-center mb-8">Team up With</h2>
        <div class="swiper team-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center"><img src="/team1.png" alt="Team 1" class="h-16"></div>
                <div class="swiper-slide flex justify-center items-center"><img src="/team2.png" alt="Team 2" class="h-16"></div>
                <div class="swiper-slide flex justify-center items-center"><img src="/team3.png" alt="Team 3" class="h-16"></div>
                <div class="swiper-slide flex justify-center items-center"><img src="/team4.png" alt="Team 4" class="h-16"></div>
            </div>
        </div>
    </div>
</section>
<!-- Voices of the Stars Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold text-center mb-8">Voices of the Stars</h2>
        <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide p-6 bg-white rounded-lg shadow flex flex-col items-center">
                    <img src="/celeb1.jpg" alt="Celebrity 1" class="w-20 h-20 rounded-full mb-4">
                    <h3 class="font-bold text-lg">Virat Kohli</h3>
                    <p class="text-sm text-gray-500 mb-2">Cricketer</p>
                    <div class="flex mb-2">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                    <p class="text-center mb-2">"PhysioFirst helped me recover quickly and get back on the field!"</p>
                    <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs">Treatment</span>
                </div>
                <div class="swiper-slide p-6 bg-white rounded-lg shadow flex flex-col items-center">
                    <img src="/celeb2.jpg" alt="Celebrity 2" class="w-20 h-20 rounded-full mb-4">
                    <h3 class="font-bold text-lg">PV Sindhu</h3>
                    <p class="text-sm text-gray-500 mb-2">Badminton Player</p>
                    <div class="flex mb-2">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                    <p class="text-center mb-2">"The best physiotherapy experience I've ever had!"</p>
                    <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs">Treatment</span>
                </div>
                <div class="swiper-slide p-6 bg-white rounded-lg shadow flex flex-col items-center">
                    <img src="/celeb3.jpg" alt="Celebrity 3" class="w-20 h-20 rounded-full mb-4">
                    <h3 class="font-bold text-lg">Sunil Chhetri</h3>
                    <p class="text-sm text-gray-500 mb-2">Footballer</p>
                    <div class="flex mb-2">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                    <p class="text-center mb-2">"Highly recommend PhysioFirst for sports injuries."</p>
                    <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs">Treatment</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Success Stories Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold text-center mb-8">Success Stories</h2>
        <div class="swiper stories-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex flex-col items-center">
                    <img src="/story1.jpg" alt="Story 1" class="h-40 rounded mb-4">
                    <p class="text-center">"Recovered from a major injury with the help of PhysioFirst!"</p>
                </div>
                <div class="swiper-slide flex flex-col items-center">
                    <img src="/story2.jpg" alt="Story 2" class="h-40 rounded mb-4">
                    <p class="text-center">"Back to my best form thanks to the amazing team."</p>
                </div>
                <div class="swiper-slide flex flex-col items-center">
                    <img src="/story3.jpg" alt="Story 3" class="h-40 rounded mb-4">
                    <p class="text-center">"Professional and caring staff throughout my recovery."</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    // Swiper initialization
    new Swiper('.team-swiper', {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        autoplay: { delay: 2000 },
        breakpoints: {
            640: { slidesPerView: 3 },
            1024: { slidesPerView: 4 }
        }
    });
    new Swiper('.testimonial-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: { delay: 4000 },
        pagination: { el: '.swiper-pagination', clickable: true }
    });
    new Swiper('.stories-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: { delay: 3000 },
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
</script>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919999999999" class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition z-50" target="_blank" rel="noopener">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.52 3.48A12 12 0 0 0 3.48 20.52l-1.32 4.84a1 1 0 0 0 1.22 1.22l4.84-1.32A12 12 0 1 0 20.52 3.48zm-8.52 17a9 9 0 1 1 9-9 9 9 0 0 1-9 9zm4.29-6.71l-1.06-1.06a1 1 0 0 0-1.41 0l-.29.29a7.07 7.07 0 0 1-3.54-3.54l.29-.29a1 1 0 0 0 0-1.41l-1.06-1.06a1 1 0 0 0-1.41 0l-.71.71a2 2 0 0 0-.59 1.41c0 4.42 3.58 8 8 8a2 2 0 0 0 1.41-.59l.71-.71a1 1 0 0 0 0-1.41z"/></svg>
</a>

<?php include 'includes/footer.php'; ?>
