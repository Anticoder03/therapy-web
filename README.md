
# ALIGN PEAK PHYSIO - PHP Website

This is a responsive PHP website for ALIGN PEAK PHYSIO, featuring a modern navbar and hero slider, styled with Tailwind CSS.  

🔗 **Live Preview:** [https://therapy-web.kesug.com/](https://therapy-web.kesug.com/)

## Features

- **Responsive Design**: Works on desktop and mobile devices
- **Modern UI**: Clean design with gradient backgrounds
- **Interactive Elements**: Hover effects and mobile menu toggle
- **Hero Slider**: Auto-playing slider with navigation controls
- **Modular Structure**: Easy to include in any PHP page
- **Tailwind CSS**: Modern utility-first CSS framework

## File Structure

```

├── navbar.php              # Complete standalone navbar page
├── slider-demo.php         # Demo page showcasing the hero slider
├── index.php               # Main homepage with navbar and slider
├── img/
│   ├── hero1.png           # Hero slider image 1
│   ├── hero2.png           # Hero slider image 2
│   └── hero3.png           # Hero slider image 3
├── includes/
│   ├── header.php          # HTML head section with styles
│   ├── navbar.php          # Modular navbar component
│   ├── hero-slider.php     # Hero slider component
│   └── footer.php          # HTML closing tags and scripts
└── README.md               # This file

````

## Usage

### Method 1: Complete Homepage
Use `index.php` for the complete homepage with navbar and hero slider.

### Method 2: Slider Demo
Use `slider-demo.php` to see the hero slider in action with feature explanations.

### Method 3: Modular Inclusion
Include components in your PHP pages using the modular approach:

```php
<?php
$page_title = "Your Page Title";
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/hero-slider.php'; // Optional
?>

<!-- Your page content here -->

<?php include 'includes/footer.php'; ?>
````

## Hero Slider Features

The hero slider includes:

* **Auto-play**: Slides change automatically every 5 seconds
* **Navigation Dots**: Click to jump to specific slides
* **Arrow Controls**: Previous/Next buttons with hover effects
* **Keyboard Navigation**: Use arrow keys to navigate
* **Hover Pause**: Auto-play pauses when hovering over the slider
* **Responsive Design**: Works perfectly on all screen sizes
* **Smooth Transitions**: Fade transitions between slides

### Slider Content

Each slide features:

* Background image from your img folder
* Dark overlay for text readability
* Compelling headline and description
* Two call-to-action buttons (Book Appointment & Explore more)
* Consistent branding with ALIGN PEAK PHYSIO colors

## Customization

### Colors

The website uses custom CSS classes for gradients:

* `.gradient-bg`: Orange to pink gradient for the contact bar
* `.logo-gradient`: Pink to orange gradient for the logo

### Navigation Links

Update the navigation links in `includes/navbar.php`:

```php
<a href="your-page.php" class="text-black hover:text-gray-600 transition-colors">Your Link</a>
```

### Hero Slider Content

Modify the slider content in `includes/hero-slider.php`:

* Change headlines and descriptions for each slide
* Update button text and links
* Add or remove slides as needed

## Browser Support

* Modern browsers (Chrome, Firefox, Safari, Edge)
* Mobile browsers
* Requires JavaScript for mobile menu and slider functionality

## Dependencies

* Tailwind CSS (loaded via CDN)
* PHP 7.0 or higher
* JavaScript enabled for interactive features

## Setup

1. Place all files in your web server directory
2. Ensure PHP is installed and configured
3. Make sure your hero images (hero1.png, hero2.png, hero3.png) are in the `img/` folder
4. Access `index.php` through your web server
5. The website will display with full navbar and slider functionality

## Notes

* The navbar is fully responsive and includes a mobile menu
* The hero slider automatically adapts to different screen sizes
* All styling is done with Tailwind CSS utility classes
* The design matches the ALIGN PEAK PHYSIO branding
* Includes proper accessibility features and hover states
* The slider uses your existing hero images from the img folder

---

## License & Copyright

© 2025 **Anticode03**. All rights reserved.

⚠️ **Warning:** This project is proprietary.
You are **not allowed** to use, copy, modify, or distribute this project in any form without prior written **permission** from the author.
Unauthorized use may result in legal action.

