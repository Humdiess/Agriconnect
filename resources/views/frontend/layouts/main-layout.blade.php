<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>AgriConnect</title>

    {{-- icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/header-logo.png') }}">

    <!-- Meta Description -->
    <meta name="description" content="Agriculture Connect is an online platform for farmers">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.14/dist/lenis.css">
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preload.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <style>
.wave-bg {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%2322c55e' fill-opacity='0.2' d='M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,224C672,213,768,171,864,149.3C960,128,1056,128,1152,149.3C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .float {
            animation: float 3s ease-in-out infinite;
        }
        </style>
</head>

<body class="antialiased bg-white dark:bg-ireng transition-all" data-lenis-prevent data-speed="0.5">

    <div class="cursor-example z-[99999999999] hidden lg:block"></div>


    <x-main-navbar />

    <div class="content flex flex-col justify-center">
        {{ $slot }}
    </div>

    <x-user-footer />
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"><script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/distMotionPathPlugin.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/cff8b87f33.js"crossorigin="anonymous"></script>
    @include('frontend.components.gsap')
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/gsap.js') }}"></script>
    <script src="{{ asset('js/preload.js') }}"></script>
    @include('sweetalert::alert')
    <script>
        // Initialize Lenis
        const lenis = new Lenis();
        // GSAP cursor animation
        gsap.to(".cursor-example", {
            duration: 0.018,
            repeat: -1,
            onRepeat: () => {
                posX += (mouseX - posX) / 8;
                posY += (mouseY - posY) / 8;
                gsap.set(".cursor-example", {
                    css: {
                        left: posX - 1,
                        top: posY - 2
                    }
                });
            }
        });
        document.addEventListener("mousemove", (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });
        // Synchronize Lenis scrolling with GSAP's ScrollTriggerplugin
        lenis.on('scroll', ScrollTrigger.update);
        // Add Lenis's requestAnimationFrame (raf) method to GSAP'sticker
        gsap.ticker.add((time) => {
            lenis.raf(time * 1000); // Convert time from seconds tomilliseconds
        });
        // Disable lag smoothing in GSAP to prevent any delay inscroll animations
        gsap.ticker.lagSmoothing(0);
    </script>
</body>

</html>
