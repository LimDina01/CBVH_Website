@extends('layouts.app')

@section('title', "High Jewelry Collections | CBVH Haute Joaillerie")

@section('content')
<div class="w-full max-w-full overflow-x-hidden min-h-screen bg-cbvh-obsidian relative selection:bg-cbvh-gold/30 selection:text-white pb-24">
    
    <!-- Hero Header -->
    <section class="pt-8 pb-12 px-6 md:px-12 max-w-[1600px] mx-auto text-center relative reveal-element">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[300px] bg-cbvh-gold/5 rounded-full blur-[120px] pointer-events-none"></div>
        <span class="text-[0.65rem] uppercase tracking-[0.3em] text-cbvh-gold mb-4 block relative z-10">Haute Joaillerie Archive</span>
        <h1 class="font-serif text-5xl md:text-7xl font-light text-cbvh-ivory mb-4 gold-shimmer relative z-10">
            Signature Collections
        </h1>
        <p class="text-cbvh-gray font-light max-w-2xl mx-auto text-sm md:text-base leading-relaxed relative z-10">
            A testament to decades of mastery, each collection is a symphony of rare gemstones and visionary design, crafted to be passed down through generations.
        </p>
    </section>

    <!-- Filter/Sort Bar -->
    <div class="px-6 md:px-12 max-w-[1600px] mx-auto mb-12 flex flex-col md:flex-row justify-between items-center border-b border-cbvh-gold-20 pb-4 print:hidden reveal-element" style="transition-delay: 100ms;">
        <div class="flex space-x-6 mb-4 md:mb-0">
            <button class="text-xs uppercase tracking-widest text-cbvh-gold border-b border-cbvh-gold pb-1">All Collections</button>
            <button class="text-xs uppercase tracking-widest text-cbvh-gray hover:text-cbvh-ivory transition border-b border-transparent pb-1">High Jewelry</button>
            <button class="text-xs uppercase tracking-widest text-cbvh-gray hover:text-cbvh-ivory transition border-b border-transparent pb-1">Bridal</button>
        </div>
        <div class="flex items-center space-x-4">
            <span class="text-xs uppercase tracking-widest text-cbvh-gray">Sort By</span>
            <select class="bg-transparent border border-white/20 text-cbvh-ivory text-xs uppercase tracking-widest p-2 focus:outline-none focus:border-cbvh-gold transition">
                <option class="bg-cbvh-onyx">Latest Arrivals</option>
                <option class="bg-cbvh-onyx">Heritage Pieces</option>
            </select>
        </div>
    </div>

    <!-- Collections Grid -->
    <section class="px-6 md:px-12 max-w-[1600px] mx-auto mt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            
            <!-- Collection 1: Romduol (Large featured) -->
            <div class="md:col-span-2 group relative overflow-hidden bg-cbvh-onyx border border-white/5 hover:border-cbvh-gold-40 transition-colors duration-700 h-[60vh] md:h-[70vh] reveal-element">
                <img src="/images/jewelry/hero_sapphire_necklace_1786938484500.jpg" alt="The Romduol Collection" class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:scale-105 group-hover:opacity-100 transition-all duration-[2000ms] ease-out">
                <!-- Base Gradient -->
                <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-cbvh-obsidian/70 via-cbvh-obsidian/40 to-transparent pointer-events-none transition-opacity duration-700"></div>
                <!-- Darker Hover Gradient for Readability (Always on for Mobile) -->
                <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-cbvh-obsidian via-cbvh-obsidian/80 to-transparent pointer-events-none opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-700"></div>
                <div class="absolute bottom-0 left-0 w-full p-8 md:p-12 flex flex-col md:flex-row justify-between items-end gap-6 z-10">
                    <div>
                        <span class="text-[0.6rem] uppercase tracking-[0.2em] text-cbvh-gold mb-3 block drop-shadow-md transition-all duration-700 group-hover:text-cbvh-gold-40">High Jewelry</span>
                        <h2 class="font-serif text-3xl md:text-5xl text-cbvh-ivory mb-4 group-hover:gold-shimmer transition-all duration-700 drop-shadow-lg">The Romduol Collection</h2>
                        <p class="text-cbvh-gray-light text-sm max-w-md leading-relaxed hidden md:block drop-shadow-md">Inspired by Cambodia's national flower, featuring mesmerizing unheated royal blue sapphires and impeccable micro-pavé diamonds.</p>
                    </div>
                    <a href="{{ route('showcase') }}" class="shrink-0 inline-flex items-center space-x-3 text-xs uppercase tracking-widest text-cbvh-ivory hover:text-cbvh-gold transition group/btn drop-shadow-md">
                        <span>Explore Collection</span>
                        <span class="w-8 h-px bg-current group-hover/btn:w-12 transition-all shadow-sm"></span>
                    </a>
                </div>
            </div>

            <!-- Collection 2: Verdant Legacy -->
            <div class="group relative overflow-hidden bg-cbvh-onyx border border-white/5 hover:border-cbvh-gold-40 transition-colors duration-700 h-[50vh] md:h-[60vh]">
                <img src="/images/jewelry/hero_emerald_ring_1786938499216.jpg" alt="Verdant Legacy" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-[2000ms] ease-out grayscale-[20%] group-hover:grayscale-0">
                <!-- Base Gradient -->
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-cbvh-obsidian/70 via-cbvh-obsidian/40 to-transparent pointer-events-none transition-opacity duration-700"></div>
                <!-- Darker Hover Gradient for Readability (Always on for Mobile) -->
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-cbvh-obsidian via-cbvh-obsidian/80 to-transparent pointer-events-none opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-700"></div>
                <div class="absolute bottom-0 left-0 w-full p-8 md:p-10 z-10">
                    <span class="text-[0.6rem] uppercase tracking-[0.2em] text-cbvh-gold mb-3 block drop-shadow-md transition-all duration-700 group-hover:text-cbvh-gold-40">Fine Jewelry</span>
                    <h2 class="font-serif text-2xl md:text-3xl text-cbvh-ivory mb-3 group-hover:text-cbvh-gold transition-colors duration-500 drop-shadow-lg">Verdant Legacy</h2>
                    <p class="text-cbvh-gray-light text-xs md:text-sm mb-6 line-clamp-2 drop-shadow-md">Colombian emeralds of unparalleled clarity, celebrating nature's most vivid hues encased in timeless platinum.</p>
                    <a href="#" class="inline-flex items-center space-x-3 text-[0.65rem] uppercase tracking-widest text-cbvh-ivory hover:text-cbvh-gold transition group/btn drop-shadow-md">
                        <span>Discover</span>
                        <span class="w-6 h-px bg-current group-hover/btn:w-10 transition-all"></span>
                    </a>
                </div>
            </div>

            <!-- Collection 3: Empress' Enchanted -->
            <div class="group relative overflow-hidden bg-cbvh-onyx border border-white/5 hover:border-cbvh-gold-40 transition-colors duration-700 h-[50vh] md:h-[60vh]">
                <img src="/images/jewelry/hero_yellow_diamond_ring_1786938510809.jpg" alt="Empress' Enchanted" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-[2000ms] ease-out grayscale-[20%] group-hover:grayscale-0">
                <!-- Base Gradient -->
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-cbvh-obsidian/70 via-cbvh-obsidian/40 to-transparent pointer-events-none transition-opacity duration-700"></div>
                <!-- Darker Hover Gradient for Readability (Always on for Mobile) -->
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-cbvh-obsidian via-cbvh-obsidian/80 to-transparent pointer-events-none opacity-100 md:opacity-0 md:group-hover:opacity-100 transition-opacity duration-700"></div>
                <div class="absolute bottom-0 left-0 w-full p-8 md:p-10 z-10">
                    <span class="text-[0.6rem] uppercase tracking-[0.2em] text-cbvh-gold mb-3 block drop-shadow-md transition-all duration-700 group-hover:text-cbvh-gold-40">Bridal & High Jewelry</span>
                    <h2 class="font-serif text-2xl md:text-3xl text-cbvh-ivory mb-3 group-hover:text-cbvh-gold transition-colors duration-500 drop-shadow-lg">Empress' Enchanted</h2>
                    <p class="text-cbvh-gray-light text-xs md:text-sm mb-6 line-clamp-2 drop-shadow-md">Rare fancy vivid yellow diamonds capturing the warmth of the sovereign sun, an emblem of enduring majesty.</p>
                    <a href="#" class="inline-flex items-center space-x-3 text-[0.65rem] uppercase tracking-widest text-cbvh-ivory hover:text-cbvh-gold transition group/btn drop-shadow-md">
                        <span>Discover</span>
                        <span class="w-6 h-px bg-current group-hover/btn:w-10 transition-all"></span>
                    </a>
                </div>
            </div>

            <!-- Collection 4: Aurora Radiance (Left as half-half because it works well for the design flow) -->
            <div class="md:col-span-2 group relative overflow-hidden bg-cbvh-onyx border border-white/5 hover:border-cbvh-gold-40 transition-colors duration-700 flex flex-col md:flex-row h-auto md:h-[50vh]">
                <div class="w-full md:w-1/2 h-[40vh] md:h-full relative overflow-hidden shrink-0">
                    <img src="/images/jewelry/hero_diamond_earrings_1786938763271.jpg" alt="Aurora Radiance" class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-[2000ms] ease-out grayscale-[20%] group-hover:grayscale-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-cbvh-obsidian/50 to-transparent md:hidden"></div>
                </div>
                <div class="w-full md:w-1/2 p-8 md:p-16 flex flex-col justify-center bg-cbvh-obsidian relative z-10 border-t border-white/5 md:border-t-0 md:-ml-8 md:bg-gradient-to-r md:from-cbvh-obsidian/0 md:via-cbvh-obsidian/90 md:to-cbvh-obsidian flex-grow">
                    <span class="text-[0.6rem] uppercase tracking-[0.2em] text-cbvh-gold mb-4 block">Avant-Garde</span>
                    <h2 class="font-serif text-3xl md:text-4xl text-cbvh-ivory mb-6 group-hover:gold-shimmer transition-all duration-700">Aurora Radiance</h2>
                    <p class="text-cbvh-gray-light text-sm md:text-base leading-relaxed mb-8">
                        A cascade of light frozen in time. The Aurora Radiance collection utilizes innovative setting techniques to create a continuous curtain of D-Flawless diamonds that move with the wearer.
                    </p>
                    <a href="#" class="inline-flex items-center space-x-3 text-[0.65rem] uppercase tracking-widest text-cbvh-ivory hover:text-cbvh-gold transition group/btn">
                        <span>View the Collection</span>
                        <span class="w-8 h-px bg-current group-hover/btn:w-12 transition-all"></span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</div>
@endsection
