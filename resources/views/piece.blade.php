@extends('layouts.app')

@section('title', $piece['name'] . " | CBVH Haute Joaillerie")

@section('content')
<div class="w-full min-h-screen bg-cbvh-obsidian relative selection:bg-cbvh-gold/30 selection:text-white pb-12">

    <!-- Cinematic Hero Section -->
    <section class="relative w-full h-[85vh] md:h-[95vh] flex items-center justify-center overflow-hidden">
        <!-- Hero Background Image with Parallax Effect -->
        <img src="{{ $piece['image'] }}" alt="{{ $piece['name'] }}" class="absolute inset-0 w-full h-full object-cover object-center opacity-70 scale-105" id="parallax-hero">
        
        <!-- Vignette & Gradient Overlays -->
        <div class="absolute inset-0 bg-gradient-to-t from-cbvh-obsidian via-cbvh-obsidian/30 to-black/40"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-cbvh-obsidian/80"></div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center px-6 max-w-4xl mx-auto mt-20 md:mt-0 reveal-element">
            <span class="text-[0.65rem] md:text-[0.75rem] uppercase tracking-[0.4em] text-cbvh-gold mb-6 block drop-shadow-md">
                {{ $piece['collection'] }}
            </span>
            <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl font-light text-cbvh-ivory mb-6 gold-shimmer leading-tight drop-shadow-xl">
                {{ $piece['name'] }}
            </h1>
            <div class="w-px h-16 md:h-24 bg-gradient-to-b from-cbvh-gold to-transparent mx-auto mt-8 opacity-70"></div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center animate-bounce opacity-70 hidden md:flex">
            <span class="text-[0.55rem] uppercase tracking-[0.2em] text-cbvh-gray mb-2">Discover</span>
            <svg class="w-4 h-4 text-cbvh-gray" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </section>

    <!-- Content Section: The Story & Specifications -->
    <section class="w-full max-w-[1400px] mx-auto px-6 md:px-16 py-20 md:py-32 relative z-20 -mt-20 md:-mt-32 bg-cbvh-obsidian/95 backdrop-blur-md border-t border-white/5">
        
        <div class="grid grid-cols-1 md:grid-cols-12 gap-16 md:gap-24">
            
            <!-- Left Column: Story -->
            <div class="md:col-span-7 reveal-element" style="transition-delay: 100ms;">
                <h2 class="font-serif text-3xl md:text-5xl text-cbvh-ivory mb-8 leading-[1.2]">
                    A Masterpiece of<br>
                    <span class="text-cbvh-gold italic">Uncompromising Vision</span>
                </h2>
                <div class="prose prose-invert prose-p:text-cbvh-gray-light prose-p:leading-relaxed prose-p:font-light md:prose-lg text-sm md:text-base mb-12">
                    <p>{{ $piece['description'] }}</p>
                    <p>
                        Created by the master artisans at CBVH, every facet of this creation is the result of hundreds of hours of meticulous benchwork. Using techniques passed down through generations, this piece stands as a testament to our philosophy of Creativity, Benevolence, Virtue, and Honor.
                    </p>
                </div>
            </div>

            <!-- Right Column: Specifications & Support -->
            <div class="md:col-span-5 reveal-element" style="transition-delay: 300ms;">
                
                <!-- Spec Box -->
                <div class="border border-cbvh-gold-40 bg-black/40 p-8 md:p-10 relative overflow-hidden group">
                    <div class="absolute inset-0 bg-cbvh-gold/5 opacity-0 group-hover:opacity-100 transition duration-700 pointer-events-none"></div>
                    
                    <h3 class="text-xs uppercase tracking-[0.3em] text-cbvh-gold mb-8 border-b border-white/10 pb-4">Gemological Archive</h3>
                    
                    <ul class="space-y-6">
                        <li class="flex justify-between items-start border-b border-white/5 pb-4">
                            <span class="text-[0.65rem] uppercase tracking-widest text-cbvh-gray w-1/3">Principal Stone</span>
                            <span class="text-sm font-medium text-cbvh-ivory w-2/3 text-right">{{ $piece['gemstone'] }}</span>
                        </li>
                        <li class="flex justify-between items-start border-b border-white/5 pb-4">
                            <span class="text-[0.65rem] uppercase tracking-widest text-cbvh-gray w-1/3">Carat Weight</span>
                            <span class="text-sm font-medium text-cbvh-ivory w-2/3 text-right">{{ $piece['carat'] }}</span>
                        </li>
                        <li class="flex justify-between items-start border-b border-white/5 pb-4">
                            <span class="text-[0.65rem] uppercase tracking-widest text-cbvh-gray w-1/3">Setting</span>
                            <span class="text-sm font-medium text-cbvh-ivory w-2/3 text-right">{{ $piece['material'] }}</span>
                        </li>
                        <li class="flex justify-between items-start border-b border-white/5 pb-4">
                            <span class="text-[0.65rem] uppercase tracking-widest text-cbvh-gray w-1/3">Accent Stones</span>
                            <span class="text-sm font-medium text-cbvh-ivory w-2/3 text-right">{{ $piece['accent'] }}</span>
                        </li>
                        <li class="flex justify-between items-start pt-2">
                            <span class="text-[0.65rem] uppercase tracking-widest text-cbvh-gray w-1/3">Valuation</span>
                            <span class="text-sm font-medium text-cbvh-gold w-2/3 text-right">{{ $piece['price'] }}</span>
                        </li>
                    </ul>

                    <!-- Action Buttons -->
                    <div class="mt-12 space-y-4 relative z-10">
                        <button onclick="openAppointmentModal('INQ-{{ Str::upper(Str::slug($piece['name'])) }}')" class="w-full py-4 bg-cbvh-ivory text-cbvh-obsidian hover:bg-cbvh-gold hover:text-white transition duration-500 uppercase tracking-[0.2em] text-[0.65rem] font-bold text-center">
                            Schedule Private Viewing
                        </button>
                        <button onclick="launchTelegram('INQ-{{ Str::upper(Str::slug($piece['name'])) }}', '{{ addslashes($piece['name']) }}')" class="w-full py-3 border border-cbvh-gold-40 hover:border-cbvh-gold text-cbvh-gray hover:text-cbvh-ivory transition uppercase tracking-[0.15em] text-[0.6rem] flex items-center justify-center gap-3">
                            <svg class="w-4 h-4 text-cbvh-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.94z"/></svg>
                            <span>Telegram Support</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Additional Imagery Grid -->
    <section class="w-full max-w-[1600px] mx-auto px-6 md:px-12 pb-24 grid grid-cols-1 md:grid-cols-2 gap-6 reveal-element">
        <div class="h-[40vh] md:h-[60vh] overflow-hidden group cursor-pointer relative bg-cbvh-onyx">
            <img src="{{ $piece['image'] }}" class="w-full h-full object-cover opacity-80 group-hover:scale-105 group-hover:opacity-100 transition-all duration-1000 grayscale-[30%] group-hover:grayscale-0">
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500 bg-black/20">
                <span class="text-xs uppercase tracking-widest text-white backdrop-blur-md bg-black/30 px-4 py-2 border border-white/20">View Detail</span>
            </div>
        </div>
        <div class="h-[40vh] md:h-[60vh] overflow-hidden group cursor-pointer relative bg-cbvh-onyx">
            <!-- fallback to same image since we might not have _alt -->
            <img src="{{ $piece['image'] }}" style="transform: scale(1.5) rotate(5deg)" class="w-full h-full object-cover opacity-60 group-hover:scale-[1.6] group-hover:opacity-100 transition-all duration-1000 grayscale-[30%] group-hover:grayscale-0">
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-500 bg-black/20">
                <span class="text-xs uppercase tracking-widest text-white backdrop-blur-md bg-black/30 px-4 py-2 border border-white/20">View Craftsmanship Process</span>
            </div>
        </div>
    </section>

</div>

@push('scripts')
<script>
    // Simple parallax effect for hero image
    document.addEventListener('DOMContentLoaded', () => {
        const heroImg = document.getElementById('parallax-hero');
        if(heroImg) {
            window.addEventListener('scroll', () => {
                const scrollY = window.scrollY;
                heroImg.style.transform = `translateY(${scrollY * 0.4}px) scale(1.05)`;
            });
        }
    });
</script>
@endpush
@endsection
