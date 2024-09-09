<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>AgriConnect</title>
    <!-- Meta Description -->
    <meta name="description" content="Agriculture Connect is an online platform for farmers">

    <link href="https://cdn.jsdelivr.net/npm/@fontsource/geist-sans@5.0.3/600.min.css" rel="stylesheet">

    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Geist Sans', sans-serif;
        }
    </style>
</head>
<body class="antialiased">

    @include('frontend.components.navbar')


