<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita - Informasi Terpercaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    
    {{-- Navbar Component --}}
    <x-navbar />

    {{-- Hero Section Component --}}
    <x-hero />

    {{-- Services Section Component --}}
    <x-services />

    {{-- Media Section Component --}}
    <x-media />

    {{-- Testimonial Section Component --}}
    <x-testimoni />
    
    {{-- Cooperation Section Component --}}
    <x-cooperation />

    {{-- Footer Component --}}
    <x-footer />

    <!-- Java Script -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>