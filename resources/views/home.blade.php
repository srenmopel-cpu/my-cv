@extends('layouts.app')

@section('title', 'Home - Portfolio')

@section('content')
@push('styles')
@vite(['resources/css/home.css'])
@vite(['resources/css/services.css'])
@vite(['resources/css/skills.css'])
@vite(['resources/css/education.css'])
@vite(['resources/css/experience.css'])
@vite(['resources/css/contact.css'])
@endpush

<section id="home" class="hero min-h-screen flex items-center relative">
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
                    <a href="#contact" class="hire-btn inline-block">
                        Hire Me
                    </a>
                </div>
            </div>
        </div>
    </div>


</section>

<!-- Services Section -->
<section id="services" class="services-section">
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

<!-- Skills Section -->
<section id="skills" class="skills-section py-20">
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

<!-- Education Section -->
<section id="education" class="education-section py-20 relative">
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

<!-- Experience Section -->
<section id="experience" class="experience-section py-20"
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

<!-- Contact Section -->
<section id="contact" class="contact-section">
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
// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for navbar links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Services section scroll reveal
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

    // Skills section animations
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

    // Education section slide-in animations
    const slideObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.slide-in').forEach(el => {
        slideObserver.observe(el);
    });

    // Education particles effect
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

    // Experience section scroll reveal
    function revealExperience() {
        const reveals = document.querySelectorAll('.timeline .reveal');
        reveals.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (elementTop < windowHeight - 100) {
                element.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealExperience);
    revealExperience(); // Initial check

    // Contact section animations
    const contactObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in-up').forEach(el => {
        contactObserver.observe(el);
    });

    // Scroll reveal for contact
    function revealContact() {
        const reveals = document.querySelectorAll('#contact .reveal');
        reveals.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (elementTop < windowHeight - 100) {
                element.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealContact);
    revealContact(); // Initial check
});
</script>
@endsection