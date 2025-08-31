<?php
// Hero Slider Component for ALIGN PEAK PHYSIO
// This component creates a responsive hero slider with overlay text and CTA buttons
?>

<!-- Hero Slider Section -->
<section class="relative h-screen overflow-hidden">
    <!-- Slider Container -->
    <div id="hero-slider" class="relative h-full">
        <!-- Slide 1 -->
        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <img src="img/hero1.png" alt="Physiotherapy Session" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white px-4 max-w-4xl">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">Your comeback starts today</h1>
                    <p class="text-xl md:text-2xl mb-8 leading-relaxed">
                        We blend advanced physiotherapy with holistic care to help you heal, move, and thrive. 
                        Chiropractic, strength & conditioning, nutrition, and more — all tailored to you.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-pink-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-pink-700 transition-colors">
                            Book Appointment
                        </button>
                        <button class="bg-white text-pink-600 border-2 border-pink-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-pink-50 transition-colors">
                            Explore more
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <img src="img/hero2.png" alt="Physiotherapy Treatment" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white px-4 max-w-4xl">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">Expert care for your recovery</h1>
                    <p class="text-xl md:text-2xl mb-8 leading-relaxed">
                        Our certified physiotherapists provide personalized treatment plans using 
                        state-of-the-art techniques and equipment to accelerate your healing journey.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-pink-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-pink-700 transition-colors">
                            Book Appointment
                        </button>
                        <button class="bg-white text-pink-600 border-2 border-pink-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-pink-50 transition-colors">
                            Explore more
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <img src="img/hero3.png" alt="Physiotherapy Consultation" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white px-4 max-w-4xl">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">Transform your health journey</h1>
                    <p class="text-xl md:text-2xl mb-8 leading-relaxed">
                        From injury rehabilitation to preventive care, we're here to support 
                        your physical wellness with comprehensive physiotherapy solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="bg-pink-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-pink-700 transition-colors">
                            Book Appointment
                        </button>
                        <button class="bg-white text-pink-600 border-2 border-pink-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-pink-50 transition-colors">
                            Explore more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Navigation -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3">
        <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300 active" data-slide="0"></button>
        <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-slide="1"></button>
        <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-slide="2"></button>
    </div>

    <!-- Previous/Next Buttons -->
    <button id="prev-slide" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-3 rounded-full transition-all duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button id="next-slide" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-3 rounded-full transition-all duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</section>

<script>
// Hero Slider JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.getElementById('prev-slide');
    const nextBtn = document.getElementById('next-slide');
    let currentSlide = 0;
    let slideInterval;

    // Function to show slide
    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => {
            slide.style.opacity = '0';
        });
        
        // Remove active class from all dots
        dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Show current slide
        slides[index].style.opacity = '1';
        dots[index].classList.add('active');
        
        currentSlide = index;
    }

    // Function to go to next slide
    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }

    // Function to go to previous slide
    function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev);
    }

    // Event listeners for navigation
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);

    // Event listeners for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
            resetInterval();
        });
    });

    // Auto-play functionality
    function startInterval() {
        slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }

    function resetInterval() {
        clearInterval(slideInterval);
        startInterval();
    }

    // Start auto-play
    startInterval();

    // Pause auto-play on hover
    const slider = document.getElementById('hero-slider');
    slider.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });

    slider.addEventListener('mouseleave', () => {
        startInterval();
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            resetInterval();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            resetInterval();
        }
    });
});
</script>
