@extends('layouts.app')

@section('title', 'Services - Portfolio')

@section('content')
@push('styles')
@vite(['resources/css/services.css'])
@endpush

<script>
// Scroll reveal animation
function revealOnScroll() {
    const reveals = document.querySelectorAll('.reveal');
    reveals.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        if (elementTop < windowHeight - 100) {
            element.classList.add('active');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);
revealOnScroll(); // Initial check
</script>

<section class="services-section">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-bold text-white title-glow mb-4">
                My Services
            </h1>
            <p class="text-xl text-gray-300">
                What I Can Do For You
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="service-card reveal">
                <div class="icon-glow mb-6">
                    <svg class="w-16 h-16 text-red-500 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                    </svg>
                </div>
                <h3 class="service-title text-2xl font-semibold">Web Development</h3>
                <p class="service-desc">Building responsive, high-performance websites and web applications using modern
                    technologies.</p>
            </div>

            <!-- Service 2 -->
            <div class="service-card reveal">
                <div class="icon-glow mb-6">
                    <svg class="w-16 h-16 text-red-500 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="service-title text-2xl font-semibold">UI/UX Design</h3>
                <p class="service-desc">Creating intuitive and visually appealing user interfaces with focus on user
                    experience.</p>
            </div>

            <!-- Service 3 -->
            <div class="service-card reveal">
                <div class="icon-glow mb-6">
                    <svg class="w-16 h-16 text-red-500 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="service-title text-2xl font-semibold">API Integration</h3>
                <p class="service-desc">Seamlessly integrating third-party APIs and building robust backend services.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="service-card reveal">
                <div class="icon-glow mb-6">
                    <svg class="w-16 h-16 text-red-500 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="service-title text-2xl font-semibold">Mobile Development</h3>
                <p class="service-desc">Developing cross-platform mobile applications with native performance and modern
                    design.</p>
            </div>

            <!-- Service 5 -->
            <div class="service-card reveal">
                <div class="icon-glow mb-6">
                    <svg class="w-16 h-16 text-red-500 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h3 class="service-title text-2xl font-semibold">DevOps & Deployment</h3>
                <p class="service-desc">Implementing CI/CD pipelines, cloud deployment, and infrastructure automation.
                </p>
            </div>

            <!-- Service 6 -->
            <div class="service-card reveal">
                <div class="icon-glow mb-6">
                    <svg class="w-16 h-16 text-red-500 mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="service-title text-2xl font-semibold">Consulting & Training</h3>
                <p class="service-desc">Providing expert advice, code reviews, and training for development teams.</p>
            </div>
        </div>
    </div>
</section>
@endsection