@extends('layouts.app')

@section('title', 'Skills - Portfolio')

@section('content')
<style>
.skills-section {
    background: linear-gradient(135deg, #0d0d0d 0%, #111 100%);
    position: relative;
    overflow: hidden;
}

.skills-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 80%, rgba(232, 73, 73, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(232, 73, 73, 0.1) 0%, transparent 50%);
    pointer-events: none;
}

.title-divider {
    width: 200px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #E84949, transparent);
    box-shadow: 0 0 20px rgba(232, 73, 73, 0.8);
    margin: 0 auto 40px;
}

.skill-bar {
    position: relative;
    height: 8px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
    overflow: hidden;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
}

.skill-bar-fill {
    height: 100%;
    background: linear-gradient(90deg, #E84949, #ff6b6b);
    border-radius: 4px;
    box-shadow: 0 0 15px rgba(232, 73, 73, 0.6);
    transition: width 1.5s ease-out;
    animation: fillBar 1.5s ease-out forwards;
}

@keyframes fillBar {
    from {
        width: 0%;
    }

    to {
        width: var(--fill-width);
    }
}

.skill-icon {
    width: 80px;
    height: 80px;
    background: rgba(255, 255, 255, 0.05);
    border: 2px solid rgba(232, 73, 73, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    color: #E84949;
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
}

.skill-icon:hover {
    transform: scale(1.05) translateY(-5px);
    box-shadow: 0 8px 25px rgba(232, 73, 73, 0.4);
    border-color: #E84949;
    background: rgba(232, 73, 73, 0.1);
}

.skill-name {
    margin-top: 10px;
    font-size: 0.9rem;
    color: #ffffff;
    text-align: center;
}

@media (max-width: 768px) {
    .skill-icon {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
}
</style>

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