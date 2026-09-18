@extends('layouts.app')

@section('title', "Craftsmanship | CBVH Haute Joaillerie")

@section('content')
<div class="w-full bg-cbvh-obsidian relative selection:bg-cbvh-gold/30 selection:text-white">

    <!-- Hero / Parallax -->
    <section class="relative w-full h-[80vh] md:h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <!-- Using the newly generated goldsmith image -->
            <img src="/images/jewelry/goldsmith_bench.jpg" alt="Master Goldsmith at work" class="w-full h-full object-cover opacity-60 scale-105 motion-safe:animate-[slowPan_30s_ease-in-out_infinite_alternate]">
            <div class="absolute inset-0 bg-gradient-to-t from-cbvh-obsidian via-cbvh-obsidian/40 to-transparent"></div>
        </div>
        
        <div class="relative z-10 text-center px-6 max-w-4xl mx-auto mt-24">
            <span class="text-[0.65rem] uppercase tracking-[0.4em] text-cbvh-gold mb-6 block drop-shadow-md">The Sanctum of Creation</span>
            <h1 class="font-serif text-5xl md:text-8xl font-light text-cbvh-ivory mb-8 gold-shimmer drop-shadow-lg">
                Craftsmanship
            </h1>
            <p class="text-cbvh-gray-light font-light text-sm md:text-lg leading-relaxed max-w-2xl mx-auto drop-shadow">
                Where raw elements of the earth are transformed into masterpieces of human ingenuity. Step inside the workshops of CBVH.
            </p>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center opacity-70 animate-bounce">
            <span class="text-[0.5rem] uppercase tracking-widest text-cbvh-gold mb-2">Discover</span>
            <svg class="w-4 h-4 text-cbvh-ivory" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </section>

    <!-- Narrative Section 1: Heritage -->
    <section class="py-24 md:py-32 px-6 md:px-12 max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-24 items-center border-t border-cbvh-gold-20/50">
        <div class="order-2 md:order-1 relative group">
            <div class="absolute inset-0 bg-cbvh-gold/10 -translate-x-4 translate-y-4 md:-translate-x-6 md:translate-y-6 transition-transform duration-500 group-hover:translate-x-0 group-hover:translate-y-0"></div>
            <!-- Reusing atelier craftsmanship image -->
            <img src="/images/jewelry/cbvh_craftsman.jpg" alt="Craftsmanship detail" class="relative z-10 w-full h-auto object-cover grayscale-[40%] group-hover:grayscale-0 transition-all duration-700">
        </div>
        <div class="order-1 md:order-2">
            <span class="text-[0.65rem] uppercase tracking-[0.2em] text-cbvh-gold mb-4 block">Chapter I</span>
            <h2 class="font-serif text-3xl md:text-5xl text-cbvh-ivory mb-6 leading-tight">A Lineage of Masters</h2>
            <p class="text-cbvh-gray text-sm md:text-base leading-relaxed mb-6 font-light">
                The high jewelry workshop is a realm of absolute precision. Here, the ancestral knowledge of Cambodian goldsmithing is passed down from master to apprentice, preserving techniques that have defined our heritage for over 27 years.
            </p>
            <p class="text-cbvh-gray text-sm md:text-base leading-relaxed font-light">
                Every artisan at CBVH undergoes years of rigorous training before ever touching a high jewelry piece. It is a dedication to excellence that ensures perfection in every millimeter.
            </p>
        </div>
    </section>

    <!-- Full width break -->
    <section class="w-full py-24 bg-cbvh-onyx border-y border-cbvh-gold-20 text-center px-6">
        <div class="max-w-3xl mx-auto">
            <svg class="w-8 h-8 mx-auto text-cbvh-gold mb-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <blockquote class="font-serif text-2xl md:text-4xl text-cbvh-ivory font-light italic leading-relaxed mb-6">
                "We do not merely set stones; we breathe life into metal and capture light within facets. It is an act of profound devotion."
            </blockquote>
            <cite class="text-[0.65rem] uppercase tracking-[0.3em] text-cbvh-gray block not-italic">— Van Hong, Master Goldsmith</cite>
        </div>
    </section>

    <!-- Narrative Section 2: Technique -->
    <section class="py-24 md:py-32 px-6 md:px-12 max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-24 items-center">
        <div>
            <span class="text-[0.65rem] uppercase tracking-[0.2em] text-cbvh-gold mb-4 block">Chapter II</span>
            <h2 class="font-serif text-3xl md:text-5xl text-cbvh-ivory mb-6 leading-tight">The Micro-Pavé Artistry</h2>
            <p class="text-cbvh-gray text-sm md:text-base leading-relaxed mb-6 font-light">
                One of the hallmarks of CBVH Haute Joaillerie is our mastery of the micro-pavé setting. Working under binocular microscopes, our artisans meticulously place diamonds as small as 0.5 millimeters into custom-carved platinum or gold structures.
            </p>
            <p class="text-cbvh-gray text-sm md:text-base leading-relaxed mb-8 font-light">
                This technique creates a continuous, unbroken surface of brilliance, requiring an extraordinarily steady hand and an eye for flawless symmetry. A single ring may demand over 120 hours of setting alone.
            </p>
            
            <div class="flex items-center space-x-12 pt-6 border-t border-white/10">
                <div>
                    <div class="font-serif text-3xl text-cbvh-gold mb-1">120+</div>
                    <div class="text-[0.55rem] uppercase tracking-widest text-cbvh-gray">Hours per piece</div>
                </div>
                <div>
                    <div class="font-serif text-3xl text-cbvh-gold mb-1">0.1mm</div>
                    <div class="text-[0.55rem] uppercase tracking-widest text-cbvh-gray">Tolerance level</div>
                </div>
            </div>
        </div>
        <div class="relative group">
            <div class="absolute inset-0 bg-cbvh-gold/10 translate-x-4 -translate-y-4 md:translate-x-6 md:-translate-y-6 transition-transform duration-500 group-hover:translate-x-0 group-hover:translate-y-0"></div>
            <!-- Reusing sapphire macro for detail focus -->
            <img src="/images/jewelry/hero_sapphire_macro_1786939253085.jpg" alt="Macro detail setting" class="relative z-10 w-full h-auto object-cover grayscale-[20%] group-hover:grayscale-0 transition-all duration-700">
        </div>
    </section>

</div>

@push('scripts')
<style>
    @keyframes slowPan {
        from { transform: scale(1.05) translate(0, 0); }
        to { transform: scale(1.1) translate(-2%, 2%); }
    }
</style>
@endpush
@endsection
