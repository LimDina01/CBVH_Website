<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CBVH Haute Joaillerie - Exclusive high jewelry dossier and private showcase.">
    <title>@yield('title', 'CBVH Haute Joaillerie')</title>

    <!-- Vite Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Optimization -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:300,400,500,600,700|montserrat:300,400,500,600" rel="stylesheet" />
</head>
<body class="bg-cbvh-obsidian text-cbvh-ivory font-sans antialiased min-h-screen flex flex-col selection:bg-cbvh-gold/30 selection:text-white overflow-x-hidden w-full max-w-full relative">

    <!-- Custom Cursor -->
    <div id="custom-cursor" class="fixed w-6 h-6 border border-cbvh-gold rounded-full pointer-events-none z-[100] transition-transform duration-100 ease-out hidden md:block opacity-0 mix-blend-difference"></div>
    <div id="custom-cursor-dot" class="fixed w-1.5 h-1.5 bg-cbvh-gold rounded-full pointer-events-none z-[100] transition-transform duration-75 ease-out hidden md:block opacity-0"></div>

    <!-- Luxury Navigation -->
    <header class="fixed top-0 w-full z-50 glass-panel border-b border-cbvh-gold-20 border-t-0 border-l-0 border-r-0 transition-all duration-300 print:hidden" id="main-nav">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 h-24 flex items-center justify-between">
            
            <!-- Left: Menu Trigger -->
            <button id="menu-trigger" class="flex items-center space-x-3 text-cbvh-ivory hover:text-cbvh-gold transition group z-[60] relative">
                <span class="block w-8">
                    <span class="block h-px w-full bg-current mb-1.5 transition-transform group-hover:translate-x-2"></span>
                    <span class="block h-px w-full bg-current mb-1.5"></span>
                    <span class="block h-px w-2/3 bg-current group-hover:w-full transition-all"></span>
                </span>
                <span class="text-xs uppercase tracking-[0.2em] font-medium hidden md:block">Menu</span>
            </button>

            <!-- Center: Brand Crest / Logo -->
            <a href="{{ route('showcase') }}" class="absolute left-1/2 -translate-x-1/2 text-center group">
                <h1 class="font-serif text-3xl md:text-4xl tracking-[0.15em] font-light text-cbvh-ivory group-hover:gold-shimmer transition-all duration-500">CBVH</h1>
                <span class="block text-[0.6rem] uppercase tracking-[0.3em] text-cbvh-gray mt-1 font-medium">Haute Joaillerie</span>
            </a>

            <!-- Right: Concierge -->
            <button onclick="openAppointmentModal()" class="flex items-center space-x-3 text-cbvh-ivory hover:text-cbvh-gold transition">
                <span class="text-xs uppercase tracking-[0.2em] font-medium hidden md:block">Concierge</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-24">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer" class="border-t border-cbvh-gold-20 py-16 px-6 md:px-12 relative overflow-hidden bg-cbvh-onyx print:hidden">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left">
            <div>
                <h3 class="font-serif text-2xl mb-6 text-cbvh-ivory">Maison CBVH</h3>
                <p class="text-cbvh-gray text-sm leading-relaxed max-w-sm mx-auto md:mx-0">
                    Purveyors of the world's most exceptional high jewelry and rare gemological specimens. Exclusively available via private salon viewing.
                </p>
                <div class="mt-6">
                    <a href="{{ route('about') }}" class="text-cbvh-gold uppercase tracking-[0.2em] text-xs font-semibold hover:text-cbvh-ivory transition">Discover Our Heritage &rarr;</a>
                </div>
            </div>
            <div>
                <h4 class="text-xs uppercase tracking-[0.2em] font-semibold mb-6 text-cbvh-gold">Contact & Salons</h4>
                <ul class="space-y-4 text-sm text-cbvh-gray">
                    <li><span class="text-cbvh-ivory block mb-1">Headquarters / Main Store</span>
                    A10-A15, St. Boeung Kok Development Area R1, Village 1,<br>Sangkat Srah Chak, Khan Daun Penh, Phnom Penh 12253</li>
                    <li><span class="text-cbvh-ivory block mb-1">Alternative Address</span>
                    No. 15B, Tchecoslovaquie Blvd (169), 12253 Phnom Penh</li>
                </ul>
            </div>
            <div class="md:text-right">
                <h4 class="text-xs uppercase tracking-[0.2em] font-semibold mb-6 text-cbvh-gold">VIP Services</h4>
                <ul class="space-y-4 text-sm text-cbvh-gray">
                    <li><span class="text-cbvh-ivory block mb-1">Business Hours</span>
                    Monday to Sunday, 8:00 AM - 5:00 PM</li>
                    <li class="pt-2"><span class="text-cbvh-ivory block mb-1">Concierge Lines</span>
                    012 557 144</li>
                </ul>
            </div>
        </div>
        <div class="max-w-[1600px] mx-auto mt-16 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center text-[0.65rem] uppercase tracking-widest text-cbvh-gray/60">
            <p class="text-center md:text-left leading-relaxed">&copy; {{ date('Y') }} CBVH Haute Joaillerie.<br class="md:hidden"> All rights reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-cbvh-gold transition">Legal Notice</a>
                <a href="#" class="hover:text-cbvh-gold transition">Privacy Policy</a>
            </div>
        </div>
    </footer>

    <!-- Global Overlay Menu -->
    <div id="overlay-menu" class="fixed inset-0 bg-cbvh-obsidian/95 backdrop-blur-xl z-[70] flex items-center justify-center transition-all duration-700 opacity-0 pointer-events-none">
        <!-- Close Button -->
        <button id="menu-close" class="absolute top-10 right-6 md:top-12 md:right-12 text-cbvh-ivory hover:text-cbvh-gold transition group p-2">
            <svg class="w-8 h-8 md:w-10 md:h-10 transform group-hover:rotate-90 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <nav class="flex flex-col items-center text-center w-full max-w-lg mx-auto">
            <a href="{{ route('showcase') }}" class="menu-link font-serif text-3xl md:text-5xl {{ request()->routeIs('showcase') ? 'text-cbvh-gold' : 'text-cbvh-ivory' }} hover:text-cbvh-gold transition-colors duration-300 mb-8">Home</a>
            <a href="{{ route('collections') }}" class="menu-link font-serif text-3xl md:text-5xl {{ request()->routeIs('collections') ? 'text-cbvh-gold' : 'text-cbvh-ivory' }} hover:text-cbvh-gold transition-colors duration-300 mb-8">Collections</a>
            <a href="{{ route('atelier') }}" class="menu-link font-serif text-3xl md:text-5xl {{ request()->routeIs('atelier') ? 'text-cbvh-gold' : 'text-cbvh-ivory' }} hover:text-cbvh-gold transition-colors duration-300 mb-8">L'Atelier</a>
            <a href="{{ route('gemology') }}" class="menu-link font-serif text-3xl md:text-5xl {{ request()->routeIs('gemology') ? 'text-cbvh-gold' : 'text-cbvh-ivory' }} hover:text-cbvh-gold transition-colors duration-300 mb-10">Gemology</a>
            
            <div class="flex flex-col items-center w-full">
                <a href="{{ route('about') }}" class="menu-link font-serif text-3xl md:text-5xl {{ request()->routeIs('about') ? 'text-cbvh-gold' : 'text-cbvh-ivory' }} hover:text-cbvh-gold transition-colors duration-300 mb-6">About Maison</a>
                
                <!-- Sub-links visual group -->
                <div class="flex flex-col items-center space-y-5">
                    <div class="w-8 h-px bg-cbvh-gold-40 mb-2"></div>
                    <a href="{{ route('about') }}#story" class="menu-link font-sans text-xs md:text-sm uppercase tracking-[0.2em] text-cbvh-gray hover:text-cbvh-gold transition-colors duration-300">Our Story</a>
                    <a href="{{ route('about') }}#values" class="menu-link font-sans text-xs md:text-sm uppercase tracking-[0.2em] text-cbvh-gray hover:text-cbvh-gold transition-colors duration-300">Core Values</a>
                    <a href="{{ route('about') }}#vision" class="menu-link font-sans text-xs md:text-sm uppercase tracking-[0.2em] text-cbvh-gray hover:text-cbvh-gold transition-colors duration-300">Vision & Expansion</a>
                    <a href="{{ route('about') }}#location" class="menu-link font-sans text-xs md:text-sm uppercase tracking-[0.2em] text-cbvh-gray hover:text-cbvh-gold transition-colors duration-300">Contact & Location</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Include Modal Component -->
    <x-appointment-modal />

    @stack('scripts')
</body>
</html>
