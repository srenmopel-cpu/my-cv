@extends('layouts.app')

@section('title', 'Experience - Portfolio')

@section('content')
@push('styles')
@vite(['resources/css/experience.css'])
@endpush

<section class="experience-section py-20"
    style="background: linear-gradient(135deg, #0d0d0d, #111); position: relative; overflow: hidden;">
    <div class="container mx-auto px-4">
        <h1 class="text-5xl font-bold text-center text-white mb-4" style="text-shadow: 0 0 10px #ff0000;">Experience
        </h1>
        <h2 class="text-xl text-center text-red-400 mb-8" style="text-shadow: 0 0 5px #ff0000;">My Professional Journey
        </h2>
        <div class="divider mx-auto mb-16"
            style="width: 200px; height: 2px; background: #ff0000; box-shadow: 0 0 10px #ff0000;"></div>

        <div class="timeline reveal">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="year">2021–Present</div>
                    <div class="card">
                        <h3>Web Developer</h3>
                        <p class="company">Tech Innovations Inc.</p>
                        <p class="description">Developed modern web applications using Laravel, React, and Node.js. Led
                            a team of 5 developers in delivering scalable solutions for enterprise clients.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="year">2019–2021</div>
                    <div class="card">
                        <h3>UI/UX Designer</h3>
                        <p class="company">Creative Studios</p>
                        <p class="description">Designed user interfaces for mobile and web applications. Conducted user
                            research and usability testing to improve user experience by 40%.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="year">2018–2019</div>
                    <div class="card">
                        <h3>Frontend Developer</h3>
                        <p class="company">Startup Hub</p>
                        <p class="description">Built responsive websites using HTML, CSS, and JavaScript. Collaborated
                            with designers to implement pixel-perfect designs.</p>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="year">2017–2018</div>
                    <div class="card">
                        <h3>Junior Web Developer</h3>
                        <p class="company">Digital Agency</p>
                        <p class="description">Assisted in developing client websites and learned industry best
                            practices. Contributed to open-source projects and improved coding skills.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Subtle particles effect -->
    <div class="particles"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; background: radial-gradient(circle at 20% 80%, rgba(255,0,0,0.1) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(255,0,0,0.1) 0%, transparent 50%);">
    </div>
</section>


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
@endsection