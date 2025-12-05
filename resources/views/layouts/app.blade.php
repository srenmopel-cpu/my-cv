<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/css/navbar.css', 'resources/css/education.css',
    'resources/css/experience.css', 'resources/css/skills.css', 'resources/css/contact.css',
    'resources/css/services.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>
    <nav class="futuristic-navbar">
        <div class="navbar-container">
            <div class="logo">Mopel</div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#education" class="nav-link">Education</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="ambient-light"></div>
        <div class="particles" id="particles"></div>
    </nav>

    <div class="mobile-menu-overlay">
        <div class="mobile-menu">
            <ul>
                <li><a href="#home" class="mobile-nav-link">Home</a></li>
                <li><a href="#services" class="mobile-nav-link">Services</a></li>
                <li><a href="#skills" class="mobile-nav-link">Skills</a></li>
                <li><a href="#education" class="mobile-nav-link">Education</a></li>
                <li><a href="#experience" class="mobile-nav-link">Experience</a></li>
                <li><a href="#contact" class="mobile-nav-link">Contact</a></li>
            </ul>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const mobileOverlay = document.querySelector('.mobile-menu-overlay');
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');

        hamburger.addEventListener('click', function() {
            mobileOverlay.style.display = mobileOverlay.style.display === 'flex' ? 'none' : 'flex';
            this.classList.toggle('open');
            // Animate hamburger
            const spans = this.querySelectorAll('span');
            if (this.classList.contains('open')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });

        // Close mobile menu on link click
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileOverlay.style.display = 'none';
                hamburger.classList.remove('open');
                const spans = hamburger.querySelectorAll('span');
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            });
        });

        // Generate particles
        const particlesContainer = document.getElementById('particles');
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 6 + 's';
            particle.style.animationDuration = (Math.random() * 4 + 4) + 's';
            particlesContainer.appendChild(particle);
        }

        // Optional mouse follow highlight
        const navbar = document.querySelector('.futuristic-navbar');
        navbar.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            this.style.background =
                `radial-gradient(circle at ${x}px ${y}px, rgba(232, 73, 73, 0.1) 0%, rgba(8, 8, 8, 0.8) 50%)`;
        });
        navbar.addEventListener('mouseleave', function() {
            this.style.background = 'rgba(8, 8, 8, 0.8)';
        });

        // Button hover animations
        document.querySelectorAll('.btn-outline').forEach(btn => {
            btn.addEventListener('mouseenter', () => {
                btn.style.transform = 'scale(1.05)';
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'scale(1)';
            });
        });
    });
    </script>
</body>

</html>