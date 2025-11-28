<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #000000;
        color: #ffffff;
    }

    .nav-link {
        color: #ffffff;
        text-decoration: none;
        position: relative;
        transition: color 0.3s;
    }

    .nav-link:hover {
        color: #E84949;
    }

    .nav-link.active {
        color: #E84949;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #E84949;
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    .btn-outline {
        border: 2px solid #E84949;
        color: #E84949;
        background: transparent;
        transition: all 0.3s;
    }

    .btn-outline:hover {
        background: #E84949;
        color: #ffffff;
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(232, 73, 73, 0.5);
    }

    .card {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 30px;
        backdrop-filter: blur(10px);
    }

    .glow {
        box-shadow: 0 0 20px rgba(232, 73, 73, 0.3);
    }

    .hero-profile {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: linear-gradient(45deg, #E84949, #ff6b6b);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 24px;
        font-weight: bold;
        box-shadow: 0 0 30px rgba(232, 73, 73, 0.5);
    }
    </style>
</head>

<body>
    <nav class="py-6">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="text-white font-bold text-xl">Mopel</div>
            <ul class="flex space-x-8">
                <li><a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/services') }}"
                        class="nav-link {{ request()->is('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ url('/skills') }}"
                        class="nav-link {{ request()->is('skills') ? 'active' : '' }}">Skills</a></li>
                <li><a href="{{ url('/education') }}"
                        class="nav-link {{ request()->is('education') ? 'active' : '' }}">Education</a></li>
                <li><a href="{{ url('/experience') }}"
                        class="nav-link {{ request()->is('experience') ? 'active' : '' }}">Experience</a></li>
                <li><a href="{{ url('/contact') }}"
                        class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <script>
    // Add hover animations
    document.querySelectorAll('.btn-outline').forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            btn.style.transform = 'scale(1.05)';
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'scale(1)';
        });
    });
    </script>
</body>

</html>