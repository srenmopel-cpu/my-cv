@extends('layouts.app')

@section('title', 'Education - Portfolio')

@section('content')
@push('styles')
@vite(['resources/css/education.css'])
@endpush

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