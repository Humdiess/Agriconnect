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
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preload.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.13/dist/lenis.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body class="antialiased bg-white dark:bg-ireng transition-all" data-lenis-prevent data-speed="0.5">


    <div class="cursor-example z-[99999999999]"></div>

    @include('frontend.components.navbar')
    @include('frontend.components.preload')
