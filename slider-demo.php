<?php
$page_title = "Hero Slider Demo - ALIGN PEAK PHYSIO";
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/hero-slider.php';
?>

<!-- Additional Content for Demo -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Hero Slider Features</h2>
            <p class="text-lg text-gray-600">Interactive slider with multiple navigation options</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2">Auto-Play</h3>
                <p class="text-sm text-gray-600">Slides automatically change every 5 seconds</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2">Navigation Dots</h3>
                <p class="text-sm text-gray-600">Click dots to jump to specific slides</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2">Arrow Controls</h3>
                <p class="text-sm text-gray-600">Use arrow buttons or keyboard arrows</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold mb-2">Hover Pause</h3>
                <p class="text-sm text-gray-600">Auto-play pauses when hovering over slider</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
