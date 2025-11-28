@extends('layouts.app')

@section('title', 'Contact - Portfolio')

@section('content')
<style>
.contact-section {
    background: linear-gradient(135deg, #0d0d0d 0%, #111 100%);
    position: relative;
    overflow: hidden;
    min-height: 100vh;
    display: flex;
    align-items: center;
}

.contact-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 50%, rgba(232, 73, 73, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(232, 73, 73, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(232, 73, 73, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.neon-lines {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.neon-line {
    position: absolute;
    background: linear-gradient(45deg, transparent, rgba(232, 73, 73, 0.3), transparent);
    height: 2px;
    animation: moveLine 8s linear infinite;
}

.neon-line:nth-child(1) {
    top: 20%;
    left: -100%;
    width: 100%;
    animation-delay: 0s;
}

.neon-line:nth-child(2) {
    top: 40%;
    left: -100%;
    width: 100%;
    animation-delay: 2s;
}

.neon-line:nth-child(3) {
    top: 60%;
    left: -100%;
    width: 100%;
    animation-delay: 4s;
}

.neon-line:nth-child(4) {
    top: 80%;
    left: -100%;
    width: 100%;
    animation-delay: 6s;
}

@keyframes moveLine {
    0% {
        left: -100%;
    }

    100% {
        left: 100%;
    }
}

.particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.particle {
    position: absolute;
    background: rgba(232, 73, 73, 0.5);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

.particle:nth-child(1) {
    top: 10%;
    left: 10%;
    width: 4px;
    height: 4px;
    animation-delay: 0s;
}

.particle:nth-child(2) {
    top: 20%;
    left: 80%;
    width: 6px;
    height: 6px;
    animation-delay: 1s;
}

.particle:nth-child(3) {
    top: 70%;
    left: 20%;
    width: 3px;
    height: 3px;
    animation-delay: 2s;
}

.particle:nth-child(4) {
    top: 50%;
    left: 90%;
    width: 5px;
    height: 5px;
    animation-delay: 3s;
}

.particle:nth-child(5) {
    top: 80%;
    left: 60%;
    width: 4px;
    height: 4px;
    animation-delay: 4s;
}

@keyframes float {

    0%,
    100% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.5;
    }

    50% {
        transform: translateY(-20px) rotate(180deg);
        opacity: 1;
    }
}

.contact-title {
    font-size: 3rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 1rem;
    position: relative;
    color: #fff;
}

.contact-subtitle {
    font-size: 1.5rem;
    text-align: center;
    margin-bottom: 3rem;
    color: #ccc;
}

.neon-underline {
    position: relative;
    display: inline-block;
}

.neon-underline::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent, #E84949, transparent);
    box-shadow: 0 0 10px rgba(232, 73, 73, 0.8);
    animation: expandUnderline 2s ease-out forwards;
}

@keyframes expandUnderline {
    0% {
        width: 0;
    }

    100% {
        width: 200px;
    }
}

.contact-form-card {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    border: 1px solid rgba(232, 73, 73, 0.3);
    box-shadow: 0 0 30px rgba(232, 73, 73, 0.2);
    padding: 2rem;
    position: relative;
    overflow: hidden;
}

.contact-form-card::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #E84949, transparent, #E84949);
    border-radius: 22px;
    z-index: -1;
    animation: neonGlow 2s ease-in-out infinite alternate;
}

@keyframes neonGlow {
    0% {
        opacity: 0.5;
    }

    100% {
        opacity: 1;
    }
}

.contact-input {
    width: 100%;
    padding: 0.75rem;
    background: rgba(0, 0, 0, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    color: #fff;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.contact-input::placeholder {
    color: #888;
}

.contact-input:focus {
    outline: none;
    border-color: #E84949;
    box-shadow: 0 0 20px rgba(232, 73, 73, 0.5);
    background: rgba(0, 0, 0, 0.7);
}

.contact-textarea {
    resize: none;
    min-height: 120px;
}

.contact-submit-btn {
    width: 100%;
    padding: 0.75rem;
    background: linear-gradient(45deg, #E84949, #ff6b6b);
    border: none;
    border-radius: 10px;
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 0 20px rgba(232, 73, 73, 0.5);
}

.contact-submit-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 30px rgba(232, 73, 73, 0.8);
}

.contact-info-box {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    border: 1px solid rgba(232, 73, 73, 0.3);
    padding: 2rem;
    box-shadow: 0 0 30px rgba(232, 73, 73, 0.2);
}

.contact-info-item {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
    color: #ccc;
    transition: all 0.3s ease;
}

.contact-info-item:hover {
    color: #E84949;
    transform: translateX(5px);
}

.contact-icon {
    width: 40px;
    height: 40px;
    margin-right: 1rem;
    fill: currentColor;
    filter: drop-shadow(0 0 10px rgba(232, 73, 73, 0.5));
}

.contact-link {
    text-decoration: none;
    color: inherit;
    transition: color 0.3s ease;
}

.contact-link:hover {
    color: #E84949;
}

.fade-in-up {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease-out forwards;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .contact-layout {
        flex-direction: column;
    }

    .contact-form-card,
    .contact-info-box {
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

<section class="contact-section py-20">
    <div class="neon-lines">
        <div class="neon-line"></div>
        <div class="neon-line"></div>
        <div class="neon-line"></div>
        <div class="neon-line"></div>
    </div>
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 fade-in-up">
            <h1 class="contact-title">
                <span class="neon-underline">Contact Me</span>
            </h1>
            <p class="contact-subtitle">Get In Touch</p>
        </div>

        @if(session('success'))
        <div
            class="max-w-md mx-auto mb-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded fade-in-up">
            {{ session('success') }}
        </div>
        @endif

        <div class="contact-layout flex gap-8 max-w-6xl mx-auto">
            <div class="flex-1 reveal">
                <form action="{{ url('/contact') }}" method="POST" class="contact-form-card">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium mb-2 text-white">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="contact-input" placeholder="Enter your full name">
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium mb-2 text-white">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            class="contact-input" placeholder="Enter your email address">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="subject" class="block text-sm font-medium mb-2 text-white">Subject</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                            class="contact-input" placeholder="Enter subject">
                        @error('subject')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-8">
                        <label for="message" class="block text-sm font-medium mb-2 text-white">Message</label>
                        <textarea id="message" name="message" required class="contact-input contact-textarea"
                            placeholder="Enter your message">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="contact-submit-btn">
                        Send Message
                    </button>
                </form>
            </div>

            <div class="w-full md:w-80 reveal">
                <div class="contact-info-box">
                    <h3 class="text-xl font-bold mb-6 text-white">Contact Information</h3>

                    <div class="contact-info-item">
                        <svg class="contact-icon" viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                        </svg>
                        <a href="tel:+1234567890" class="contact-link">+855-818-954-70</a>
                    </div>

                    <div class="contact-info-item">
                        <svg class="contact-icon" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        <a href="mailto:contact@example.com" class="contact-link">srenmopel@gmail.com</a>
                    </div>

                    <div class="contact-info-item">
                        <svg class="contact-icon" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                        <span>phnom penh</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in-up').forEach(el => {
        observer.observe(el);
    });

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
});
</script>
@endsection