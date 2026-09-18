@extends('layouts.app')

@section('title', "Gemology | CBVH Haute Joaillerie")

@section('content')
<div class="w-full bg-cbvh-obsidian relative selection:bg-cbvh-gold/30 selection:text-white pb-32">

    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 px-6 md:px-12 max-w-[1600px] mx-auto min-h-[60vh] flex items-center">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-cbvh-gold/5 rounded-full blur-[150px] pointer-events-none"></div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative z-10">
                <span class="text-[0.65rem] uppercase tracking-[0.4em] text-cbvh-gold mb-6 block">The Pursuit of Perfection</span>
                <h1 class="font-serif text-5xl md:text-7xl font-light text-cbvh-ivory pb-2 mb-6 leading-tight gold-shimmer">
                    Gemology
                </h1>
                <p class="text-cbvh-gray font-light text-sm md:text-base leading-relaxed mb-6">
                    CBVH is uncompromising in its sourcing. We travel the globe to uncover the Earth's rarest treasures—from the legendary mines of Mogok and Ceylon to the vibrant emerald deposits of Colombia.
                </p>
                <p class="text-cbvh-gray font-light text-sm md:text-base leading-relaxed">
                    Only a fraction of the world's gemstones meet our rigorous standards for color, clarity, cut, and carat weight.
                </p>
            </div>
            <div class="relative h-[400px] md:h-[600px] group">
                <div class="absolute inset-0 bg-cbvh-gold/10 -translate-x-4 -translate-y-4 transition-transform duration-700 group-hover:translate-x-0 group-hover:translate-y-0 z-0"></div>
                <!-- Reusing sapphire macro as hero -->
                <img src="/images/jewelry/hero_sapphire_macro_1786939253085.jpg" alt="Unheated Royal Blue Sapphire" class="relative z-10 w-full h-full object-cover grayscale-[30%] group-hover:grayscale-0 transition-all duration-1000 shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
            </div>
        </div>
    </section>

    <!-- Certification Banner -->
    <section class="border-y border-cbvh-gold-20 bg-cbvh-onyx py-16 px-6 md:px-12">
        <div class="max-w-[1400px] mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="md:w-1/2">
                <h3 class="font-serif text-3xl text-cbvh-ivory mb-4">Unquestionable Provenance</h3>
                <p class="text-cbvh-gray text-sm leading-relaxed mb-6">
                    Every central gemstone in a CBVH creation is accompanied by certification from the world's most respected gemological laboratories, including the Swiss Gemmological Institute (SSEF), Gübelin, and the Gemological Institute of America (GIA).
                </p>
                <div class="flex items-center space-x-6 text-[0.65rem] uppercase tracking-widest text-cbvh-gold">
                    <span>SSEF</span>
                    <span class="w-1 h-1 bg-cbvh-gold/50 rounded-full"></span>
                    <span>Gübelin</span>
                    <span class="w-1 h-1 bg-cbvh-gold/50 rounded-full"></span>
                    <span>GIA</span>
                </div>
            </div>
            <div class="md:w-1/2 relative h-48 md:h-64 w-full">
                <!-- Reusing certification image -->
                <img src="/images/jewelry/gemological_certificate_1786938836651.jpg" alt="Gemological Certificate" class="absolute inset-0 w-full h-full object-cover opacity-60">
                <div class="absolute inset-0 bg-gradient-to-r from-cbvh-onyx via-transparent to-cbvh-onyx"></div>
            </div>
        </div>
    </section>

    <!-- Interactive Gemological Matrix -->
    <section class="pt-32 px-6 md:px-12 max-w-[1400px] mx-auto">
        <div class="text-center mb-16">
            <span class="text-[0.65rem] uppercase tracking-[0.3em] text-cbvh-gold mb-4 block">The Big Three & Diamonds</span>
            <h2 class="font-serif text-4xl text-cbvh-ivory">Gemological Matrix</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start" id="gem-matrix">
            
            <!-- Matrix Tabs -->
            <div class="lg:col-span-4 flex flex-row lg:flex-col overflow-x-auto lg:overflow-visible border-b lg:border-b-0 lg:border-l border-cbvh-gold-20 pb-4 lg:pb-0 space-x-6 lg:space-x-0 lg:space-y-6 scrollbar-hide">
                <button class="gem-tab active text-left px-4 lg:px-6 py-2 lg:py-4 border-b-2 lg:border-b-0 lg:border-l-2 border-cbvh-gold text-cbvh-gold transition whitespace-nowrap lg:whitespace-normal" data-target="gem-sapphire">
                    <span class="block font-serif text-xl md:text-2xl mb-1">Sapphire</span>
                    <span class="text-[0.55rem] uppercase tracking-widest text-cbvh-gray hidden lg:block">Corundum &middot; Royal Blue</span>
                </button>
                <button class="gem-tab text-left px-4 lg:px-6 py-2 lg:py-4 border-b-2 lg:border-b-0 lg:border-l-2 border-transparent text-cbvh-gray hover:text-cbvh-ivory hover:border-white/20 transition whitespace-nowrap lg:whitespace-normal" data-target="gem-emerald">
                    <span class="block font-serif text-xl md:text-2xl mb-1">Emerald</span>
                    <span class="text-[0.55rem] uppercase tracking-widest text-cbvh-gray hidden lg:block">Beryl &middot; Vivid Green</span>
                </button>
                <button class="gem-tab text-left px-4 lg:px-6 py-2 lg:py-4 border-b-2 lg:border-b-0 lg:border-l-2 border-transparent text-cbvh-gray hover:text-cbvh-ivory hover:border-white/20 transition whitespace-nowrap lg:whitespace-normal" data-target="gem-diamond">
                    <span class="block font-serif text-xl md:text-2xl mb-1">Diamond</span>
                    <span class="text-[0.55rem] uppercase tracking-widest text-cbvh-gray hidden lg:block">Carbon &middot; D-Flawless</span>
                </button>
            </div>

            <!-- Matrix Content -->
            <div class="lg:col-span-8 grid">
                
                <!-- Sapphire Info -->
                <div id="gem-sapphire" class="gem-content col-start-1 row-start-1 opacity-100 transition-opacity duration-700 pointer-events-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div>
                            <h4 class="font-serif text-3xl text-cbvh-ivory mb-6">The Royal Blue Standard</h4>
                            <p class="text-cbvh-gray text-sm leading-relaxed mb-6">
                                CBVH specializes in unheated sapphires exhibiting the coveted "Royal Blue" and "Cornflower Blue" hues. We primarily source from the legendary mines of Ceylon (Sri Lanka) and Madagascar, seeking stones with deep, velvety saturation and exceptional clarity.
                            </p>
                            <ul class="space-y-4 text-[0.65rem] uppercase tracking-widest text-cbvh-ivory">
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Mohs Hardness: 9.0</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Primary Origins: Sri Lanka, Myanmar</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Treatment: Unheated / Untreated only</span>
                                </li>
                            </ul>
                        </div>
                        <div class="h-64 md:h-auto bg-cbvh-onyx p-4 border border-white/5">
                            <img src="/images/jewelry/hero_sapphire_necklace_1786938484500.jpg" alt="Sapphire Necklace" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Emerald Info -->
                <div id="gem-emerald" class="gem-content col-start-1 row-start-1 opacity-0 transition-opacity duration-700 pointer-events-none">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div>
                            <h4 class="font-serif text-3xl text-cbvh-ivory mb-6">The Jardin of Colombia</h4>
                            <p class="text-cbvh-gray text-sm leading-relaxed mb-6">
                                The mesmerizing green of a CBVH emerald is unparalleled. We meticulously select stones from Colombia, known for their vivid, glowing color and minimal 'jardin' (inclusions). We accept only minor to insignificant oil treatment, the strictest standard in high jewelry.
                            </p>
                            <ul class="space-y-4 text-[0.65rem] uppercase tracking-widest text-cbvh-ivory">
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Mohs Hardness: 7.5 - 8.0</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Primary Origins: Colombia, Zambia</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Treatment: Insignificant to Minor Oil</span>
                                </li>
                            </ul>
                        </div>
                        <div class="h-64 md:h-auto bg-cbvh-onyx p-4 border border-white/5">
                            <img src="/images/jewelry/hero_emerald_ring_1786938499216.jpg" alt="Emerald Ring" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Diamond Info -->
                <div id="gem-diamond" class="gem-content col-start-1 row-start-1 opacity-0 transition-opacity duration-700 pointer-events-none">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div>
                            <h4 class="font-serif text-3xl text-cbvh-ivory mb-6">Flawless Brilliance</h4>
                            <p class="text-cbvh-gray text-sm leading-relaxed mb-6">
                                For our high jewelry centerpieces and micro-pavé settings, CBVH utilizes exclusively D-to-F color and Internally Flawless (IF) to VVS clarity diamonds. Every facet must be perfectly proportioned to achieve maximum fire and brilliance, graded 'Excellent' by the GIA.
                            </p>
                            <ul class="space-y-4 text-[0.65rem] uppercase tracking-widest text-cbvh-ivory">
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Mohs Hardness: 10.0</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Color Grade: D - F (Colorless)</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <span class="w-1.5 h-1.5 bg-cbvh-gold rounded-full"></span>
                                    <span>Clarity Grade: IF - VVS</span>
                                </li>
                            </ul>
                        </div>
                        <div class="h-64 md:h-auto bg-cbvh-onyx p-4 border border-white/5">
                            <img src="/images/jewelry/hero_diamond_earrings_1786938763271.jpg" alt="Diamond Earrings" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

@push('scripts')
<script>
    // Tab switching logic for Gemological Matrix
    document.querySelectorAll('.gem-tab').forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active state from all tabs
            document.querySelectorAll('.gem-tab').forEach(t => {
                t.classList.remove('active', 'border-cbvh-gold', 'text-cbvh-gold');
                t.classList.add('border-transparent', 'text-cbvh-gray', 'hover:text-cbvh-ivory', 'hover:border-white/20');
            });
            
            // Add active state to clicked tab
            this.classList.add('active', 'border-cbvh-gold', 'text-cbvh-gold');
            this.classList.remove('border-transparent', 'text-cbvh-gray', 'hover:text-cbvh-ivory', 'hover:border-white/20');
            
            // Hide all content
            document.querySelectorAll('.gem-content').forEach(content => {
                content.classList.remove('opacity-100', 'pointer-events-auto');
                content.classList.add('opacity-0', 'pointer-events-none');
            });
            
            // Show target content
            const targetId = this.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);
            targetContent.classList.remove('opacity-0', 'pointer-events-none');
            targetContent.classList.add('opacity-100', 'pointer-events-auto');
        });
    });
</script>
@endpush
@endsection
