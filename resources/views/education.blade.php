@extends('layouts.app')

@section('title', 'Education - Portfolio')

@section('content')
<style>
.education-section {
    background: linear-gradient(135deg, #080808 0%, #0d0d0d 100%);
    position: relative;
    overflow: hidden;
}

.education-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background:
        radial-gradient(circle at 30% 20%, rgba(232, 73, 73, 0.15) 0%, transparent 50%),
        radial-gradient(circle at 70% 80%, rgba(232, 73, 73, 0.1) 0%, transparent 50%),
        radial-gradient(ellipse at center, rgba(232, 73, 73, 0.05) 0%, transparent 80%);
    pointer-events: none;
    animation: nebula 20s ease-in-out infinite alternate;
}

@keyframes nebula {
    0% {
        opacity: 0.8;
        transform: scale(1);
    }

    100% {
        opacity: 1;
        transform: scale(1.05);
    }
}

.title-glow {
    text-shadow: 0 0 20px rgba(232, 73, 73, 0.5);
}

.subtitle {
    color: #ff6b6b;
    font-weight: 300;
}

.divider {
    width: 120px;
    height: 3px;
    background: linear-gradient(90deg, transparent, #E84949, #ff4757, #E84949, transparent);
    box-shadow: 0 0 20px rgba(232, 73, 73, 1), 0 0 40px rgba(232, 73, 73, 0.5);
    margin: 20px auto;
    position: relative;
    animation: hologram-pulse 3s ease-in-out infinite;
}

.divider::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -10px;
    right: -10px;
    bottom: -2px;
    background: linear-gradient(90deg, transparent, rgba(232, 73, 73, 0.3), transparent);
    animation: hologram-sweep 4s linear infinite;
}

@keyframes hologram-pulse {

    0%,
    100% {
        box-shadow: 0 0 20px rgba(232, 73, 73, 1), 0 0 40px rgba(232, 73, 73, 0.5);
        transform: scaleY(1);
    }

    50% {
        box-shadow: 0 0 30px rgba(232, 73, 73, 1.5), 0 0 60px rgba(232, 73, 73, 0.8);
        transform: scaleY(1.2);
    }
}

@keyframes hologram-sweep {
    0% {
        transform: translateX(-100%);
        opacity: 0;
    }

    50% {
        opacity: 1;
    }

    100% {
        transform: translateX(100%);
        opacity: 0;
    }
}

/* Floating geometric shapes */
.floating-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    overflow: hidden;
}

.shape {
    position: absolute;
    background: rgba(232, 73, 73, 0.1);
    border: 1px solid rgba(232, 73, 73, 0.3);
    animation: float-shape 8s ease-in-out infinite;
}

.shape:nth-child(1) {
    width: 40px;
    height: 40px;
    top: 10%;
    left: 10%;
    border-radius: 50%;
    animation-delay: 0s;
}

.shape:nth-child(2) {
    width: 30px;
    height: 30px;
    top: 20%;
    right: 15%;
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    animation-delay: 2s;
}

.shape:nth-child(3) {
    width: 25px;
    height: 25px;
    top: 60%;
    left: 20%;
    transform: rotate(45deg);
    animation-delay: 4s;
}

.shape:nth-child(4) {
    width: 35px;
    height: 35px;
    top: 70%;
    right: 10%;
    border-radius: 50%;
    animation-delay: 6s;
}

@keyframes float-shape {

    0%,
    100% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.3;
    }

    50% {
        transform: translateY(-20px) rotate(180deg);
        opacity: 0.6;
    }
}

/* Hologram grid */
.hologram-grid {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image:
        linear-gradient(rgba(232, 73, 73, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(232, 73, 73, 0.1) 1px, transparent 1px);
    background-size: 50px 50px;
    opacity: 0.3;
    animation: grid-shift 20s linear infinite;
    pointer-events: none;
}

@keyframes grid-shift {
    0% {
        transform: translate(0, 0);
    }

    100% {
        transform: translate(50px, 50px);
    }
}

/* Grid layout for education cards */
.education-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

.education-card {
    background: rgba(0, 0, 0, 0.4);
    border: 1px solid rgba(232, 73, 73, 0.4);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow:
        0 10px 40px rgba(0, 0, 0, 0.5),
        0 0 30px rgba(232, 73, 73, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    position: relative;
    overflow: hidden;
}

.education-card::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, transparent, rgba(232, 73, 73, 0.6), transparent);
    border-radius: 22px;
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: -1;
}

.education-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    transition: left 0.6s ease;
}

.education-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow:
        0 20px 60px rgba(0, 0, 0, 0.6),
        0 0 50px rgba(232, 73, 73, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
    border-color: rgba(232, 73, 73, 0.8);
}

.education-card:hover::before {
    opacity: 1;
}

.education-card:hover::after {
    left: 100%;
}

.slide-in {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.6s ease;
}

.slide-in.animate {
    opacity: 1;
    transform: translateY(0);
}

.particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    overflow: hidden;
}

.particle {
    position: absolute;
    width: 2px;
    height: 2px;
    background: rgba(232, 73, 73, 0.3);
    border-radius: 50%;
    animation: float 6s linear infinite;
}

.spark {
    position: absolute;
    width: 1px;
    height: 8px;
    background: linear-gradient(to bottom, rgba(232, 73, 73, 0.8), transparent);
    animation: spark-float 4s linear infinite;
}

.spark::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -1px;
    width: 3px;
    height: 3px;
    background: rgba(232, 73, 73, 1);
    border-radius: 50%;
    box-shadow: 0 0 4px rgba(232, 73, 73, 0.8);
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
        transform: translateY(-100px) rotate(360deg);
        opacity: 0;
    }
}

@keyframes spark-float {
    0% {
        transform: translateY(100vh) scale(1);
        opacity: 0;
    }

    10% {
        opacity: 1;
    }

    50% {
        transform: translateY(50vh) scale(1.2);
        opacity: 0.8;
    }

    90% {
        opacity: 1;
    }

    100% {
        transform: translateY(-50px) scale(0.8);
        opacity: 0;
    }
}

@media (max-width: 768px) {
    .education-grid {
        grid-template-columns: 1fr;
        justify-items: center;
    }

    .education-card {
        width: 100%;
        max-width: 400px;
    }

    .floating-shapes,
    .hologram-grid {
        display: none;
    }

    .divider::before {
        display: none;
    }

    .education-section::before {
        animation-duration: 40s;
    }
}

/* Scroll reveal animations */
.reveal {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.6s ease;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}
</style>

<section class="education-section py-20 relative">
    <div class="particles" id="particles"></div>
    <div class="hologram-grid"></div>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-bold text-white title-glow mb-4">
                Education
            </h1>
            <p class="text-xl subtitle mb-8">
                My Academic Background
            </p>
            <div class="divider"></div>
        </div>

        <div class="education-grid reveal">
            <!-- Education Card 1 -->
            <div class="education-card p-8 slide-in">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mb-4"
                        style="box-shadow: 0 0 20px rgba(232, 73, 73, 0.8);">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.84L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.84l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-white mb-2">Master of Science in Software Engineering</h3>
                    <p class="text-red-400 font-medium mb-2">Tech University</p>
                    <p class="text-red-300 mb-4">2020 - 2022</p>
                    <p class="text-gray-300">Advanced studies in software architecture, algorithms, and modern
                        development practices, focusing on scalable and efficient system design.</p>
                </div>
            </div>

            <!-- Education Card 2 -->
            <div class="education-card p-8 slide-in">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mb-4"
                        style="box-shadow: 0 0 20px rgba(232, 73, 73, 0.8);">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.84L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.84l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-white mb-2">Bachelor of Science in Computer Science</h3>
                    <p class="text-red-400 font-medium mb-2">University of Technology</p>
                    <p class="text-red-300 mb-4">2016 - 2020</p>
                    <p class="text-gray-300">Comprehensive education in programming, data structures, web development,
                        and computer systems, with hands-on projects in software engineering.</p>
                </div>
            </div>

            <!-- Education Card 3 -->
            <div class="education-card p-8 slide-in">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mb-4"
                        style="box-shadow: 0 0 20px rgba(232, 73, 73, 0.8);">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.84L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.84l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-white mb-2">High School Diploma</h3>
                    <p class="text-red-400 font-medium mb-2">Tech High School</p>
                    <p class="text-red-300 mb-4">2012 - 2016</p>
                    <p class="text-gray-300">Graduated with honors, participated in coding clubs and STEM programs,
                        laying the groundwork for a career in technology.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Slide-in animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        }
    });
}, observerOptions);

document.querySelectorAll('.slide-in').forEach(el => {
    observer.observe(el);
});

// Particles effect
function createParticle() {
    const particle = document.createElement('div');
    particle.className = 'particle';
    particle.style.left = Math.random() * 100 + '%';
    particle.style.animationDelay = Math.random() * 6 + 's';
    particle.style.animationDuration = (Math.random() * 4 + 6) + 's';
    document.getElementById('particles').appendChild(particle);

    setTimeout(() => {
        particle.remove();
    }, 10000);
}

function createSpark() {
    const spark = document.createElement('div');
    spark.className = 'spark';
    spark.style.left = Math.random() * 100 + '%';
    spark.style.animationDelay = Math.random() * 4 + 's';
    spark.style.animationDuration = (Math.random() * 2 + 4) + 's';
    document.getElementById('particles').appendChild(spark);

    setTimeout(() => {
        spark.remove();
    }, 8000);
}

setInterval(createParticle, 200);
setInterval(createSpark, 300);
</script>
@endsection