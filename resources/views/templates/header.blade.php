<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>AgriConnect</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/header-logo.png') }}">

    <!-- Meta Description -->
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <meta name="description" content="AgriConnect adalah platform online untuk petani yang menghubungkan mereka dengan teknologi pertanian terkini dan informasi pasar.">
    <meta property="og:title" content="AgriConnect - Platform Pertanian Online">
    <meta property="og:description" content="Bergabunglah dengan AgriConnect untuk mendapatkan akses ke teknologi pertanian dan informasi pasar yang bermanfaat.">
    <meta property="og:image" content="{{ asset('img/logo/header-logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AgriConnect - Platform Pertanian Online">
    <meta name="twitter:description" content="Bergabunglah dengan AgriConnect untuk mendapatkan akses ke teknologi pertanian dan informasi pasar yang bermanfaat.">
    <meta name="twitter:image" content="{{ asset('img/logo/header-logo.png') }}">
    <script src="https://unpkg.com/alpinejs" defer></script>
    {{-- font --}}
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preload.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.13/dist/lenis.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .scrollbar-hide::-webkit-scrollbar {
    display: none;
}

/* For IE, Edge and Firefox */
.scrollbar-hide {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}
    </style>

    <meta name="keywords" content="pertanian, petani, platform online, AgriConnect, teknologi pertanian">
    <meta name="author" content="AgriConnect Team">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
</head>

<body class="antialiased dark:bg-ireng transition-all" data-lenis-prevent data-speed="0.5">


    <div class="cursor-example"></div>
    {{-- @include('frontend.components.navbar') --}}
    {{-- @include('frontend.components.preload') --}}
