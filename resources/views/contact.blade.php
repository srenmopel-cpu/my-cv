@extends('layouts.app')

@section('title', 'Contact - Portfolio')

@section('content')
@push('styles')
@vite(['resources/css/contact.css'])
@endpush

<section class="contact-section">
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