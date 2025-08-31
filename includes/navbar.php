<?php
// Modular navbar component for ALIGN PEAK PHYSIO
// This file can be included in other PHP pages
?>
<!-- Top Purple Bar -->
<div class="w-full h-1 bg-purple-600"></div>

<!-- Main Header -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo Section -->
            <div class="flex items-center space-x-3">
                <!-- Logo Graphic -->
                <div class="logo-gradient w-12 h-12 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-xl">AP</span>
                </div>
                <!-- Logo Text -->
                <div class="flex flex-col">
                    <div class="flex items-center space-x-1">
                        <span class="text-black font-bold text-xl">ALIGN</span>
                        <span class="text-xs text-black">®</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-black font-bold text-xl">PEAK</span>
                    </div>
                    <div class="text-black text-sm">PHYSIO</div>
                    <div class="text-black text-xs">ISO: 9001:2015</div>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="text-black hover:text-gray-600 transition-colors">Home</a>
                <a href="about.php" class="text-black hover:text-gray-600 transition-colors">About us</a>
                <a href="blogs.php" class="text-black hover:text-gray-600 transition-colors">Blogs</a>
                <a href="gallery.php" class="text-black hover:text-gray-600 transition-colors">Gallery</a>
                <!-- <a href="media.php" class="text-black hover:text-gray-600 transition-colors">Media</a> -->
            </nav>

            <!-- Contact Us Button -->
            <a href="contact.php" class="bg-pink-600 text-white px-6 py-2 rounded-lg hover:bg-pink-700 transition-colors">
                Contact Us
            </a>
        </div>
    </div>
</header>

<!-- Contact Information Bar -->
<div class="gradient-bg text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center py-3 text-sm">
            <div class="mb-2 md:mb-0">
                <span>No: 21/1, Kellys Road, Chennai-600010</span>
            </div>
            <div class="mb-2 md:mb-0">
                <span>Email: alignpeakphysio@gmail.com</span>
            </div>
            <div>
                <span>Call: +91 91506 00006</span>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Menu Button (for responsive design) -->
<div class="md:hidden bg-white border-t">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <button id="mobile-menu-button" class="w-full py-3 text-left text-black hover:text-gray-600">
            <span class="block">☰ Menu</span>
        </button>
        <div id="mobile-menu" class="hidden pb-4">
            <a href="index.php" class="block py-2 text-black hover:text-gray-600">Home</a>
            <a href="about.php" class="block py-2 text-black hover:text-gray-600">About us</a>
            <a href="blogs.php" class="block py-2 text-black hover:text-gray-600">Blogs</a>
            <a href="gallery.php" class="block py-2 text-black hover:text-gray-600">Gallery</a>
            <a href="media.php" class="block py-2 text-black hover:text-gray-600">Media</a>
        </div>
    </div>
</div>
