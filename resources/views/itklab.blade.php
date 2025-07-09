<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITK Lab - Laboratorium Infrastruktur dan Tata Kelola Sistem Informasi</title>
    <meta name="description" content="Laboratorium Infrastruktur dan Tata Kelola Sistem Informasi - Membangun Fondasi Digital yang Tangguh dan Terkelola">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Heroicons -->
    <script src="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/24/outline/index.js"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-white text-gray-900 antialiased">
    
    <!-- Navigation -->
    @include('components.navigation')
    
    <!-- Hero Section -->
    @include('components.hero')
    
    <!-- About Section -->
    @include('components.about')
    
    <!-- Activities & Research Section -->
    @include('components.activities')
    
    <!-- Facilities Section -->
    @include('components.facilities')
    
    <!-- Publications Section -->
    @include('components.publications')
    
    <!-- Gallery Section -->
    @include('components.gallery')
    
    <!-- Contact Section -->
    @include('components.contact')
    
    <!-- Footer -->
    @include('components.footer')
    
    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="fixed bottom-6 right-6 bg-green-600 hover:bg-green-700 text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>
    
    <script>
        // Smooth scroll and scroll-to-top functionality
        document.addEventListener('DOMContentLoaded', function() {
            const scrollTopButton = document.getElementById('scrollTop');
            
            // Show/hide scroll to top button
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollTopButton.classList.remove('opacity-0', 'invisible');
                } else {
                    scrollTopButton.classList.add('opacity-0', 'invisible');
                }
            });
            
            // Scroll to top functionality
            scrollTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileMenu = document.getElementById('mobileMenu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
