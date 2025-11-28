@extends('layouts.app')

@section('title', 'Skills - Portfolio')

@section('content')
@push('styles')
@vite(['resources/css/skills.css'])
@endpush

<section class="skills-section py-20">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-bold text-white mb-4">
                My <span class="text-red-500">Skills</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8">What I'm Good At</p>
            <div class="title-divider"></div>
        </div>

        <!-- Skill Bars -->
        <div class="max-w-2xl mx-auto mb-20 reveal">
            <div class="mb-8">
                <div class="flex justify-between mb-2">
                    <span class="text-lg font-semibold text-white">HTML</span>
                    <span class="text-red-500">95%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" style="--fill-width: 95%"></div>
                </div>
            </div>

            <div class="mb-8">
                <div class="flex justify-between mb-2">
                    <span class="text-lg font-semibold text-white">CSS</span>
                    <span class="text-red-500">90%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" style="--fill-width: 90%"></div>
                </div>
            </div>

            <div class="mb-8">
                <div class="flex justify-between mb-2">
                    <span class="text-lg font-semibold text-white">JavaScript</span>
                    <span class="text-red-500">85%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" style="--fill-width: 85%"></div>
                </div>
            </div>

            <div class="mb-8">
                <div class="flex justify-between mb-2">
                    <span class="text-lg font-semibold text-white">React</span>
                    <span class="text-red-500">80%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" style="--fill-width: 80%"></div>
                </div>
            </div>

            <div class="mb-8">
                <div class="flex justify-between mb-2">
                    <span class="text-lg font-semibold text-white">PHP</span>
                    <span class="text-red-500">88%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" style="--fill-width: 88%"></div>
                </div>
            </div>

            <div class="mb-8">
                <div class="flex justify-between mb-2">
                    <span class="text-lg font-semibold text-white">Laravel</span>
                    <span class="text-red-500">82%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" style="--fill-width: 82%"></div>
                </div>
            </div>
        </div>

        <!-- Skill Icons Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 max-w-4xl mx-auto reveal">
            <div class="flex flex-col items-center">
                <div class="skill-icon">
                    <span></></span>
                </div>
                <div class="skill-name">HTML</div>
            </div>

            <div class="flex flex-col items-center">
                <div class="skill-icon">
                    <span>{ }</span>
                </div>
                <div class="skill-name">CSS</div>
            </div>

            <div class="flex flex-col items-center">
                <div class="skill-icon">
                    <span>JS</span>
                </div>
                <div class="skill-name">JavaScript</div>
            </div>

            <div class="flex flex-col items-center">
                <div class="skill-icon">
                    <span>⚛️</span>
                </div>
                <div class="skill-name">React</div>
            </div>

            <div class="flex flex-col items-center">
                <div class="skill-icon">
                    <span>PHP</span>
                </div>
                <div class="skill-name">PHP</div>
            </div>

            <div class="flex flex-col items-center">
                <div class="skill-icon">
                    <span>L</span>
                </div>
                <div class="skill-name">Laravel</div>
            </div>

            <div class="flex flex-col items-center">
                <div class="skill-icon">
                    <span>DB</span>
                </div>
                <div class="skill-name">MySQL</div>
            </div>

            <div class="flex flex-col items-center">
                <div class="skill-icon">
                    <span>🐧</span>
                </div>
                <div class="skill-name">Linux</div>
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
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.skill-bar-fill').forEach(fill => {
        fill.style.animationPlayState = 'paused';
        observer.observe(fill);
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