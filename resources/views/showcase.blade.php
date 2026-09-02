@extends('layouts.app')

@section('title', "The L'Éclipse Royale | CBVH Haute Joaillerie")

@section('content')
<div class="flex flex-col md:flex-row w-full max-w-[1600px] mx-auto min-h-screen pt-0 print:pt-0 print:block">

    <!-- Mobile Header (Visible only on small screens) -->
    <div class="md:hidden w-full px-6 pt-6 pb-4">
        <span class="text-[0.65rem] uppercase tracking-[0.3em] text-cbvh-gold mb-2 block">Haute Joaillerie Archive</span>
        <h1 class="font-serif text-3xl font-light text-cbvh-ivory leading-tight gold-shimmer">The Romduol Collection</h1>
        <div class="text-[0.65rem] tracking-[0.2em] text-cbvh-gray mt-3">CBVH &middot; Creativity, Benevolence, Virtue, and Honor</div>
    </div>

    <!-- LEFT COLUMN: Sticky Media Gallery -->
    <div class="w-full md:w-3/5 md:sticky md:top-24 md:h-[calc(100vh-6rem)] bg-cbvh-onyx relative overflow-hidden group print:relative print:w-full print:h-auto print:mb-12">
        
        <!-- Media Controls Overlay -->
        <div class="absolute top-6 left-6 z-20 flex space-x-4 print:hidden">
            <button class="gallery-tab active text-[0.55rem] uppercase tracking-widest text-cbvh-ivory pb-1 border-b border-cbvh-gold transition" data-target="media-macro">HD Macro</button>
            <button class="gallery-tab text-[0.55rem] uppercase tracking-widest text-cbvh-gray hover:text-cbvh-ivory pb-1 border-b border-transparent transition" data-target="media-360">360° Spin</button>
            <button class="gallery-tab text-[0.55rem] uppercase tracking-widest text-cbvh-gray hover:text-cbvh-ivory pb-1 border-b border-transparent transition" data-target="media-craft">Atelier</button>
        </div>



        <!-- Media Container -->
        <div class="w-full h-[50vh] md:h-full relative flex items-center justify-center overflow-hidden cursor-crosshair transition-all duration-500" id="media-container">
            
            <div class="absolute top-6 right-6 z-40 print:hidden">
                <button class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center text-white/50 hover:text-white hover:border-cbvh-gold transition bg-black/30 backdrop-blur-sm" id="fullscreen-btn" title="Toggle Fullscreen">
                    <svg id="fs-icon-enter" class="w-4 h-4 block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                    <svg id="fs-icon-exit" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M9 4v4m0 0H5m4 0L4 3m11 1v4m0 0h4m-4 0l5-5M9 20v-4m0 0H5m4 0l-5 5m11-1v-4m0 0h4m-4 0l5 5"></path></svg>
                </button>
            </div>
            
            <!-- 1. Macro High-Res View (Active by default) -->
            <div id="media-macro" class="absolute inset-0 w-full h-full opacity-100 transition-opacity duration-700">
                <img src="/images/jewelry/hero_sapphire_necklace_1786938484500.jpg" alt="L'Éclipse Royale Sapphire Necklace" class="w-full h-full object-cover object-center" id="main-product-image">
                <!-- Magnifier Loupe element -->
                <div id="zoom-loupe" class="absolute w-40 h-40 border-2 border-cbvh-gold/50 rounded-full overflow-hidden pointer-events-none hidden shadow-[0_10px_40px_rgba(0,0,0,0.8)] z-30 bg-cbvh-obsidian">
                    <img id="zoom-loupe-img" src="/images/jewelry/hero_sapphire_necklace_1786938484500.jpg" class="absolute object-cover object-center max-w-none">
                </div>
            </div>

            <!-- 2. 360 Interactive Spin View -->
            <div id="media-360" class="absolute inset-0 w-full h-full opacity-0 pointer-events-none transition-opacity duration-700 bg-cbvh-obsidian flex flex-col items-center justify-center">
                <video 
                    src="/images/jewelry/jewelrys-showcase.mp4" 
                    class="w-full h-full object-cover" 
                    autoplay loop muted playsinline>
                </video>
            </div>

            <!-- 3. Atelier Craft View -->
            <div id="media-craft" class="absolute inset-0 w-full h-full opacity-0 pointer-events-none transition-opacity duration-700">
                <img src="/images/jewelry/atelier_craftsmanship_1786938818853.jpg" alt="Craftsmanship" class="w-full h-full object-cover object-center grayscale hover:grayscale-0 transition-all duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                <div class="absolute bottom-10 left-10 max-w-sm">
                    <h3 class="font-serif text-2xl text-cbvh-ivory mb-2">Master Benchwork</h3>
                    <p class="text-cbvh-gray text-sm">Over 380 hours of meticulous micro-pavé setting under microscopic precision.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- RIGHT COLUMN: Scrollable Dossier -->
    <div class="w-full md:w-2/5 p-8 md:p-16 lg:p-24 overflow-y-auto bg-cbvh-obsidian flex flex-col justify-center print:w-full print:p-0 print:block">
        
        <div class="max-w-xl mx-auto md:mx-0 w-full">
            
            <!-- Desktop Header -->
            <div class="hidden md:block mb-10">
                <span class="text-[0.65rem] uppercase tracking-[0.3em] text-cbvh-gold mb-4 block">Haute Joaillerie Archive</span>
                <h1 class="font-serif text-4xl lg:text-5xl font-light text-cbvh-ivory leading-[1.1] gold-shimmer">The Romduol Collection</h1>
                <div class="text-xs tracking-[0.2em] text-cbvh-gray mt-4">CBVH &middot; Creativity, Benevolence, Virtue, and Honor</div>
            </div>

            <!-- Narrative -->
            <div class="prose prose-invert prose-p:text-cbvh-gray prose-p:leading-relaxed prose-p:font-light mb-12 text-sm reveal-element">
                <p>
                    Established in 1998, CBVH is a leading jewelry manufacturer and retailer in Cambodia. With over 27 years of expertise, we are dedicated to elevating Cambodian jewelry on a global stage by blending our rich cultural heritage with contemporary design.
                </p>
                <p>
                    The signature <strong>Romduol Collection</strong>, inspired by Cambodia’s national flower, features a delicate spherical blossom with three outward and three inward-curving petals—meticulous craftsmanship designed to capture "beauty that will last for a lifetime."
                </p>
            </div>

            <!-- Primary Actions -->
            <div class="space-y-4 mb-16 print:hidden reveal-element" style="transition-delay: 100ms;">
                <button onclick="openAppointmentModal('CBVH-HJ-2026-089')" class="w-full py-4 bg-cbvh-ivory text-cbvh-obsidian hover:bg-cbvh-gold hover:text-white transition duration-500 uppercase tracking-[0.2em] text-xs font-semibold">
                    Schedule Private Viewing
                </button>
                <div class="grid grid-cols-2 gap-4">
                    <button onclick="launchTelegram('CBVH-HJ-2026-089', 'The L\'Éclipse Royale')" class="py-3 px-2 border border-cbvh-gold-40 hover:border-cbvh-gold text-cbvh-gray hover:text-cbvh-ivory transition uppercase tracking-[0.1em] sm:tracking-[0.15em] text-[0.55rem] sm:text-[0.65rem] flex items-center justify-center gap-2 group">
                        <svg class="w-4 h-4 text-cbvh-gold group-hover:scale-110 transition-transform shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.94z"/></svg>
                        <span class="text-center leading-tight">Telegram Concierge</span>
                    </button>
                    <button onclick="window.print()" class="py-3 px-2 border border-cbvh-gold-40 hover:border-cbvh-gold text-cbvh-gray hover:text-cbvh-ivory transition uppercase tracking-[0.1em] sm:tracking-[0.15em] text-[0.55rem] sm:text-[0.65rem] flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span class="text-center leading-tight">Export Dossier</span>
                    </button>
                </div>
            </div>

            <!-- Accordion Sections -->
            <div class="border-t border-cbvh-gold-20 divide-y divide-cbvh-gold-20 reveal-element" style="transition-delay: 200ms;">

                <!-- Brand Heritage -->
                <div class="accordion-item" data-state="closed">
                    <button class="accordion-trigger w-full py-6 flex items-center justify-between group">
                        <span class="font-serif text-lg text-cbvh-ivory group-hover:text-cbvh-gold transition">Brand Heritage & Leadership</span>
                        <span class="text-cbvh-gold transition-transform duration-300 transform group-[&[data-state=open]]:rotate-180">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="accordion-content hidden pb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 text-sm">
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Co-founder & CEO</span>
                                <span class="text-cbvh-ivory font-medium">Vanndy Imphan</span>
                            </div>
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Master Goldsmith</span>
                                <span class="text-cbvh-ivory font-medium">Van Hong</span>
                            </div>
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Vice President</span>
                                <span class="text-cbvh-ivory font-medium">Vannda Imphan</span>
                            </div>
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Established</span>
                                <span class="text-cbvh-ivory font-medium">November 1998</span>
                            </div>
                            <div class="md:col-span-2">
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Global Accolades</span>
                                <span class="text-cbvh-ivory font-medium">Top Brand 2024 by Influential Brands</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Gemological Matrix -->
                <div class="accordion-item" data-state="closed">
                    <button class="accordion-trigger w-full py-6 flex items-center justify-between group">
                        <span class="font-serif text-lg text-cbvh-ivory group-hover:text-cbvh-gold transition">Gemological Matrix</span>
                        <span class="text-cbvh-gold transition-transform duration-300 transform group-[&[data-state=open]]:rotate-180">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="accordion-content hidden pb-6">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-6 text-sm">
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Principal Gemstone</span>
                                <span class="text-cbvh-ivory font-medium">Unheated Royal Blue Sapphire</span>
                            </div>
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Carat Weight</span>
                                <span class="text-cbvh-ivory font-medium">14.82 ct</span>
                            </div>
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Provenance</span>
                                <span class="text-cbvh-ivory font-medium">Ceylon (Sri Lanka)</span>
                            </div>
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Secondary Stones</span>
                                <span class="text-cbvh-ivory font-medium">12.4 ct D-Flawless Diamonds</span>
                            </div>
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Metallurgy</span>
                                <span class="text-cbvh-ivory font-medium">950 Platinum</span>
                            </div>
                            <div>
                                <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray mb-1">Certification</span>
                                <a href="#" class="text-cbvh-gold underline decoration-cbvh-gold-40 hover:decoration-cbvh-gold underline-offset-4 flex items-center mt-0.5">
                                    SSEF Report No. 89304
                                    <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-6 aspect-video bg-white/5 p-2 flex items-center justify-center rounded-sm border border-white/10 relative overflow-hidden group/cert cursor-pointer">
                            <img src="/images/jewelry/gemological_certificate_1786938836651.jpg" class="object-cover w-full h-full opacity-60 group-hover/cert:opacity-100 transition-opacity duration-500" alt="Certificate">
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                <span class="bg-black/80 px-3 py-1.5 text-[0.65rem] uppercase tracking-widest text-cbvh-ivory backdrop-blur-sm border border-white/20">View Dossier Document</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Complete The Set -->
                <div class="accordion-item border-b border-cbvh-gold-20" data-state="closed">
                    <button class="accordion-trigger w-full py-6 flex items-center justify-between group">
                        <span class="font-serif text-lg text-cbvh-ivory group-hover:text-cbvh-gold transition">Signature Collections</span>
                        <span class="text-cbvh-gold transition-transform duration-300 transform group-[&[data-state=open]]:rotate-180">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="accordion-content hidden pb-6">
                        <div class="space-y-4">
                            <!-- Pairing 1 -->
                            <a href="#" class="flex items-center space-x-4 p-3 border border-white/10 hover:border-cbvh-gold/50 hover:bg-cbvh-gold/5 transition group">
                                <div class="w-16 h-16 bg-black flex-shrink-0">
                                    <img src="/images/jewelry/hero_diamond_earrings_1786938763271.jpg" alt="Earrings" class="w-full h-full object-cover grayscale-[50%] group-hover:grayscale-0 transition-all duration-500">
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-serif text-sm text-cbvh-ivory mb-1 group-hover:text-cbvh-gold transition">Aurora Radiance</h4>
                                    <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray">View Collection</span>
                                </div>
                            </a>
                            <!-- Pairing 2 -->
                            <a href="#" class="flex items-center space-x-4 p-3 border border-white/10 hover:border-cbvh-gold/50 hover:bg-cbvh-gold/5 transition group">
                                <div class="w-16 h-16 bg-black flex-shrink-0">
                                    <img src="/images/jewelry/hero_yellow_diamond_ring_1786938510809.jpg" alt="Ring" class="w-full h-full object-cover grayscale-[50%] group-hover:grayscale-0 transition-all duration-500">
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-serif text-sm text-cbvh-ivory mb-1 group-hover:text-cbvh-gold transition">Empress' Enchanted Pearl</h4>
                                    <span class="block text-[0.6rem] uppercase tracking-widest text-cbvh-gray">View Collection</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Sticky Bottom Bar (Mobile Only) -->
        <div class="md:hidden fixed bottom-0 left-0 w-full z-40 bg-cbvh-onyx/90 backdrop-blur-xl border-t border-cbvh-gold-40 px-4 py-3 flex space-x-3 shadow-[0_-10px_30px_rgba(0,0,0,0.5)] print:hidden">
            <button onclick="openAppointmentModal('CBVH-HJ-2026-089')" class="flex-1 py-3 bg-cbvh-ivory text-cbvh-obsidian uppercase tracking-widest text-[0.6rem] font-semibold text-center">
                Private Viewing
            </button>
            <button onclick="launchTelegram('CBVH-HJ-2026-089', 'The L\'Éclipse Royale')" class="w-12 flex-shrink-0 bg-transparent border border-cbvh-gold text-cbvh-gold flex items-center justify-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.94z"/></svg>
            </button>
        </div>

    </div>

</div>
@endsection

@push('scripts')
<script>
    // Toggle accordions
    document.querySelectorAll('.accordion-trigger').forEach(button => {
        button.addEventListener('click', () => {
            const item = button.parentElement;
            const content = button.nextElementSibling;
            const isOpen = item.dataset.state === 'open';

            // Close all other accordions
            document.querySelectorAll('.accordion-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.dataset.state = 'closed';
                    otherItem.querySelector('.accordion-content').classList.add('hidden');
                }
            });

            // Toggle current
            if (isOpen) {
                item.dataset.state = 'closed';
                content.classList.add('hidden');
            } else {
                item.dataset.state = 'open';
                content.classList.remove('hidden');
            }
        });
    });
</script>
@endpush
