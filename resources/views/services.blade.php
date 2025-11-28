@extends('layouts.app')

@section('title', 'Services - Portfolio')

@section('content')
<style>
.services-section {
    background: linear-gradient(135deg, #0d0d0d 0%, #111 100%);
    position: relative;
    overflow: hidden;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.services-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image:
        radial-gradient(circle at 20% 80%, rgba(255, 0, 0, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255, 0, 0, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(255, 0, 0, 0.05) 0%, transparent 50%);
    animation: float 10s ease-in-out infinite;
}

@keyframes float {

    0%,
    100% {
        transform: translateY(0px) rotate(0deg);
    }

    50% {
        transform: translateY(-10px) rotate(5deg);
    }
}

.title-glow {
    text-shadow: 0 0 10px rgba(255, 0, 0, 0.5), 0 0 20px rgba(255, 0, 0, 0.3);
    position: relative;
}

.title-glow::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #ff0000, transparent);
    box-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
    animation: glow 2s ease-in-out infinite alternate;
}

@keyframes glow {
    from {
        opacity: 0.5;
    }

    to {
        opacity: 1;
    }
}

.service-card {
    background: rgba(26, 26, 26, 0.9);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 0, 0, 0.2);
    border-radius: 15px;
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

.service-card::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: repeating-linear-gradient(45deg,
            transparent,
            transparent 10px,
            rgba(255, 0, 0, 0.05) 10px,
            rgba(255, 0, 0, 0.05) 20px);
    animation: grid-move 20s linear infinite;
    opacity: 0.3;
}

@keyframes grid-move {
    0% {
        transform: translateX(-50%) translateY(-50%);
    }

    100% {
        transform: translateX(50%) translateY(50%);
    }
}

.service-card:hover {
    transform: translateY(-10px) scale(1.02);
    border-color: #ff0000;
    box-shadow: 0 20px 40px rgba(255, 0, 0, 0.3), 0 0 20px rgba(255, 0, 0, 0.5);
}

.icon-glow {
    filter: drop-shadow(0 0 10px rgba(255, 0, 0, 0.8));
    animation: pulse 3s ease-in-out infinite;
}

@keyframes pulse {

    0%,
    100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.1);
    }
}

.service-title {
    color: #ffffff;
    margin-bottom: 1rem;
}

.service-desc {
    color: #b0b0b0;
    font-size: 0.9rem;
    line-height: 1.5;
}

@media (max-width: 768px) {
    .services-section {
        padding: 4rem 1rem;
    }

    .service-card {
        margin-bottom: 2rem;
    }
}

/* Scroll reveal animations */
.reveal {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.6s ease;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}
</style>

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