@extends('layouts.app')

@section('title', 'Home - Portfolio')

@section('content')
<style>
/* Nebula background effect */
.hero {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #0a0a0a 0%, #1a0a0a 50%, #0a0a0a 100%);
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background:
        radial-gradient(circle at 20% 80%, rgba(232, 73, 73, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255, 105, 180, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(232, 73, 73, 0.05) 0%, transparent 50%);
    filter: blur(100px);
    animation: nebula 20s ease-in-out infinite alternate;
}

@keyframes nebula {
    0% {
        transform: scale(1) rotate(0deg);
    }

    100% {
        transform: scale(1.1) rotate(5deg);
    }
}

/* Floating particles */
.particles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.particle {
    position: absolute;
    background: rgba(232, 73, 73, 0.3);
    border-radius: 50%;
    animation: float 15s linear infinite;
}

.particle:nth-child(1) {
    width: 4px;
    height: 4px;
    left: 10%;
    animation-delay: 0s;
}

.particle:nth-child(2) {
    width: 6px;
    height: 6px;
    left: 20%;
    animation-delay: 2s;
}

.particle:nth-child(3) {
    width: 3px;
    height: 3px;
    left: 30%;
    animation-delay: 4s;
}

.particle:nth-child(4) {
    width: 5px;
    height: 5px;
    left: 40%;
    animation-delay: 6s;
}

.particle:nth-child(5) {
    width: 4px;
    height: 4px;
    left: 50%;
    animation-delay: 8s;
}

.particle:nth-child(6) {
    width: 3px;
    height: 3px;
    left: 60%;
    animation-delay: 10s;
}

.particle:nth-child(7) {
    width: 5px;
    height: 5px;
    left: 70%;
    animation-delay: 12s;
}

.particle:nth-child(8) {
    width: 4px;
    height: 4px;
    left: 80%;
    animation-delay: 14s;
}

@keyframes float {
    0% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 0;
    }

    10% {
        opacity: 1;
    }

    90% {
        opacity: 1;
    }

    100% {
        transform: translateY(-100vh) rotate(360deg);
        opacity: 0;
    }
}

/* Gradient text */
.name-gradient {
    background: linear-gradient(45deg, #ffb6c1, #E84949);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: textGlow 3s ease-in-out infinite alternate;
}

.role-gradient {
    background: linear-gradient(45deg, #ffb6c1, #E84949);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

@keyframes textGlow {
    0% {
        filter: brightness(1);
    }

    100% {
        filter: brightness(1.2);
    }
}

/* Rotating glow effect for profile */
.hero-profile {
    animation: rotateGlow 8s linear infinite;
}

/* Large circular frame for profile */
.hero-profile-large {
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: linear-gradient(45deg, rgba(232, 73, 73, 0.1), rgba(255, 105, 180, 0.1));
    border: 3px solid rgba(232, 73, 73, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    box-shadow:
        0 0 50px rgba(232, 73, 73, 0.3),
        0 20px 60px rgba(0, 0, 0, 0.5),
        inset 0 0 50px rgba(232, 73, 73, 0.1);
    animation: rotateGlowLarge 12s linear infinite;
}

.hero-profile-large::before {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border-radius: 50%;
    background: linear-gradient(45deg, rgba(232, 73, 73, 0.2), rgba(255, 105, 180, 0.2), rgba(232, 73, 73, 0.2));
    z-index: -1;
    animation: pulseGlow 4s ease-in-out infinite alternate;
}

@keyframes rotateGlowLarge {
    0% {
        box-shadow:
            0 0 50px rgba(232, 73, 73, 0.3),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 50px rgba(232, 73, 73, 0.1);
    }

    25% {
        box-shadow:
            0 0 70px rgba(232, 73, 73, 0.5),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 70px rgba(255, 105, 180, 0.15);
    }

    50% {
        box-shadow:
            0 0 50px rgba(232, 73, 73, 0.3),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 50px rgba(232, 73, 73, 0.1);
    }

    75% {
        box-shadow:
            0 0 60px rgba(255, 105, 180, 0.4),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 60px rgba(232, 73, 73, 0.12);
    }

    100% {
        box-shadow:
            0 0 50px rgba(232, 73, 73, 0.3),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 50px rgba(232, 73, 73, 0.1);
    }
}

@keyframes pulseGlow {
    0% {
        opacity: 0.3;
        transform: scale(1);
    }

    100% {
        opacity: 0.7;
        transform: scale(1.02);
    }
}

/* Profile placeholder text */
.profile-placeholder {
    color: rgba(232, 73, 73, 0.7);
    font-size: 24px;
    font-weight: 300;
    text-align: center;
    text-shadow: 0 0 10px rgba(232, 73, 73, 0.3);
    animation: textPulse 3s ease-in-out infinite alternate;
}

@keyframes textPulse {
    0% {
        opacity: 0.7;
        text-shadow: 0 0 10px rgba(232, 73, 73, 0.3);
    }

    100% {
        opacity: 1;
        text-shadow: 0 0 20px rgba(232, 73, 73, 0.5), 0 0 30px rgba(255, 105, 180, 0.3);
    }
}

/* Large circular frame for profile */
.hero-profile-large {
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: linear-gradient(45deg, rgba(232, 73, 73, 0.1), rgba(255, 105, 180, 0.1));
    border: 3px solid rgba(232, 73, 73, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    box-shadow:
        0 0 50px rgba(232, 73, 73, 0.3),
        0 20px 60px rgba(0, 0, 0, 0.5),
        inset 0 0 50px rgba(232, 73, 73, 0.1);
    animation: rotateGlowLarge 12s linear infinite;
}

.hero-profile-large::before {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    border-radius: 50%;
    background: linear-gradient(45deg, rgba(232, 73, 73, 0.2), rgba(255, 105, 180, 0.2), rgba(232, 73, 73, 0.2));
    z-index: -1;
    animation: pulseGlow 4s ease-in-out infinite alternate;
}

@keyframes rotateGlowLarge {
    0% {
        box-shadow:
            0 0 50px rgba(232, 73, 73, 0.3),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 50px rgba(232, 73, 73, 0.1);
    }

    25% {
        box-shadow:
            0 0 70px rgba(232, 73, 73, 0.5),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 70px rgba(255, 105, 180, 0.15);
    }

    50% {
        box-shadow:
            0 0 50px rgba(232, 73, 73, 0.3),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 50px rgba(232, 73, 73, 0.1);
    }

    75% {
        box-shadow:
            0 0 60px rgba(255, 105, 180, 0.4),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 60px rgba(232, 73, 73, 0.12);
    }

    100% {
        box-shadow:
            0 0 50px rgba(232, 73, 73, 0.3),
            0 20px 60px rgba(0, 0, 0, 0.5),
            inset 0 0 50px rgba(232, 73, 73, 0.1);
    }
}

@keyframes pulseGlow {
    0% {
        opacity: 0.3;
        transform: scale(1);
    }

    100% {
        opacity: 0.7;
        transform: scale(1.02);
    }
}

/* Profile image styling */
.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    position: relative;
    z-index: 1;
}

/* Profile placeholder text */
.profile-placeholder {
    color: rgba(232, 73, 73, 0.7);
    font-size: 24px;
    font-weight: 300;
    text-align: center;
    text-shadow: 0 0 10px rgba(232, 73, 73, 0.3);
    animation: textPulse 3s ease-in-out infinite alternate;
}

@keyframes textPulse {
    0% {
        opacity: 0.7;
        text-shadow: 0 0 10px rgba(232, 73, 73, 0.3);
    }

    100% {
        opacity: 1;
        text-shadow: 0 0 20px rgba(232, 73, 73, 0.5), 0 0 30px rgba(255, 105, 180, 0.3);
    }
}

@keyframes rotateGlow {
    0% {
        box-shadow: 0 0 30px rgba(232, 73, 73, 0.5);
    }

    25% {
        box-shadow: 0 0 40px rgba(232, 73, 73, 0.7), 0 0 60px rgba(232, 73, 73, 0.3);
    }

    50% {
        box-shadow: 0 0 30px rgba(232, 73, 73, 0.5);
    }

    75% {
        box-shadow: 0 0 50px rgba(255, 105, 180, 0.6), 0 0 70px rgba(232, 73, 73, 0.4);
    }

    100% {
        box-shadow: 0 0 30px rgba(232, 73, 73, 0.5);
    }
}

/* Fade-in and slide-up animations */
.fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease-out forwards;
}

.fade-in-up:nth-child(1) {
    animation-delay: 0.2s;
}

.fade-in-up:nth-child(2) {
    animation-delay: 0.4s;
}

.fade-in-up:nth-child(3) {
    animation-delay: 0.6s;
}

.fade-in-up:nth-child(4) {
    animation-delay: 0.8s;
}

.fade-in-up:nth-child(5) {
    animation-delay: 1s;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Social media icons */
.social-icons {
    display: flex;
    gap: 20px;
    margin: 30px 0;
}

.social-icon {
    width: 50px;
    height: 50px;
    border: 2px solid #E84949;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #E84949;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.social-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #E84949;
    transform: scale(0);
    transition: transform 0.3s ease;
    border-radius: 50%;
}

.social-icon:hover::before {
    transform: scale(1);
}

.social-icon:hover {
    color: white;
    box-shadow: 0 0 20px rgba(232, 73, 73, 0.5);
    transform: translateY(-5px);
}

.social-icon svg {
    width: 24px;
    height: 24px;
    z-index: 1;
    position: relative;
}

/* Hire Me button */
.hire-btn {
    background: transparent;
    border: 2px solid #E84949;
    color: #E84949;
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 18px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 0 20px rgba(232, 73, 73, 0.3);
}

.hire-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(232, 73, 73, 0.2), transparent);
    transition: left 0.5s;
}

.hire-btn:hover::before {
    left: 100%;
}

.hire-btn:hover {
    background: #E84949;
    color: white;
    transform: scale(1.05);
    box-shadow: 0 0 30px rgba(232, 73, 73, 0.8);
}

/* Scroll Down Button */
.scroll-down {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    color: #E84949;
    font-size: 24px;
    text-decoration: none;
    animation: bounce 2s infinite;
    z-index: 10;
}

.scroll-down::after {
    content: '↓';
    display: block;
    font-size: 36px;
    text-shadow: 0 0 20px rgba(232, 73, 73, 0.8);
    animation: glowPulse 2s ease-in-out infinite alternate;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateX(-50%) translateY(0);
    }
    40% {
        transform: translateX(-50%) translateY(-10px);
    }
    60% {
        transform: translateX(-50%) translateY(-5px);
    }
}

@keyframes glowPulse {
    0% {
        text-shadow: 0 0 20px rgba(232, 73, 73, 0.8);
    }
    100% {
        text-shadow: 0 0 30px rgba(232, 73, 73, 1), 0 0 40px rgba(232, 73, 73, 0.5);
    }
}
</style>

<section class="hero min-h-screen flex items-center relative">
    <!-- Floating particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Left side: Profile -->
            <div class="md:w-1/2 mb-8 md:mb-0 flex justify-center fade-in-up">
                <div class="image-container">
                    <div class="hero-profile-large">
                        <img src="{{ asset('image/mopel.png') }}" alt="Profile" class="profile-image">
                    </div>
                </div>
            </div>

            <!-- Right side: Text -->
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 fade-in-up">
                    Hi, It's <span class="name-gradient">Mopel</span>
                </h1>
                <h2 class="text-2xl md:text-4xl font-semibold mb-6 fade-in-up role-gradient">
                    I'm a Web Developer
                </h2>
                <p class="text-gray-300 text-lg mb-6 max-w-md fade-in-up">
                    Passionate web developer crafting modern, dynamic, and user-friendly websites. Transforming ideas
                    into functional digital experiences that deliver real value to users around the world.
                </p>
                <p class="text-gray-400 text-base mb-8 max-w-md fade-in-up">
                    With over 5 years of experience in web development and system design, I bring creativity and
                    technical expertise to every project—building responsive interfaces, clean code structures, and
                    scalable web applications.
                </p>

                <!-- Social Media Icons -->
                <div class="social-icons fade-in-up">
                    <a href="#" class="social-icon" title="LinkedIn">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon" title="GitHub">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon" title="Twitter">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon" title="Instagram">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>

                <!-- Hire Me Button -->
                <div class="fade-in-up">
                    <a href="{{ url('/contact') }}" class="hire-btn inline-block">
                        Hire Me
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Down Button -->
    <a href="{{ url('/services') }}" class="scroll-down">Scroll Down</a>
</section>
@endsection