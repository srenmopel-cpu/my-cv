@extends('layouts.app')

@section('title', 'Experience - Portfolio')

@section('content')
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

<style>
.experience-section {
    position: relative;
    overflow: hidden;
}

.timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #ff0000;
    box-shadow: 0 0 20px #ff0000;
    transform: translateX(-50%);
}

.timeline-item {
    position: relative;
    margin-bottom: 50px;
    display: flex;
    justify-content: center;
    animation: slideUp 0.6s ease-out;
}

.timeline-dot {
    position: absolute;
    left: 50%;
    top: 20px;
    width: 20px;
    height: 20px;
    background: #ff0000;
    border-radius: 50%;
    box-shadow: 0 0 20px #ff0000;
    transform: translateX(-50%);
    z-index: 1;
}

.timeline-content {
    width: 45%;
    margin-left: 10px;
}

.timeline-item:nth-child(even) .timeline-content {
    margin-left: auto;
    margin-right: 10px;
}

.year {
    color: #ff0000;
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 1.2em;
    text-shadow: 0 0 5px #ff0000;
}

.card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 0, 0, 0.3);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(255, 0, 0, 0.5);
    border-color: #ff0000;
}

.card h3 {
    color: white;
    margin-bottom: 5px;
    font-size: 1.5em;
}

.company {
    color: #ff0000;
    margin-bottom: 10px;
    font-weight: 600;
}

.description {
    color: #ccc;
    line-height: 1.6;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .timeline::before {
        left: 30px;
    }

    .timeline-dot {
        left: 30px;
    }

    .timeline-content {
        width: calc(100% - 60px);
        margin-left: 60px;
    }

    .timeline-item:nth-child(even) .timeline-content {
        margin-left: 60px;
    }

    .text-5xl {
        font-size: 2.5rem;
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
@endsection