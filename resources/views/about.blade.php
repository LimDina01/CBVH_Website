@extends('layouts.app')

@section('title', "About Maison CBVH | High-Quality, Luxurious, and Trusted Jewelry")

@section('content')
<div class="w-full min-h-screen bg-cbvh-obsidian relative selection:bg-cbvh-gold/30 selection:text-white">
    
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 px-6 md:px-12 max-w-[1600px] mx-auto min-h-[70vh] flex flex-col justify-center">
        <!-- Optional decorative elements -->
        <div class="absolute top-1/4 right-0 w-[500px] h-[500px] bg-cbvh-gold/5 rounded-full blur-[120px] pointer-events-none"></div>

        <span class="text-[0.65rem] uppercase tracking-[0.3em] text-cbvh-gold mb-6 block">Since 1998</span>
        <h1 class="font-serif text-5xl md:text-7xl font-light text-cbvh-ivory leading-tight gold-shimmer mb-4 max-w-4xl reveal-element">
            Cambodia's Shining Jewel in the Luxury Market
        </h1>
        <h2 class="text-xl md:text-2xl font-serif text-cbvh-gray-light font-light mb-10 reveal-element" style="transition-delay: 100ms;">
            Merging Centuries-Old Craftsmanship with Modern Innovation
        </h2>
        
        <p class="text-cbvh-gray font-light leading-relaxed max-w-2xl text-sm md:text-base reveal-element" style="transition-delay: 200ms;">
            Established in 1998, <strong>CBVH (Cheang Bak Van Hong / ស៊ីប៊ីវីអេច)</strong> is a leading jewelry manufacturer and retailer in Cambodia. With over 27 years of expertise, we are dedicated to elevating Cambodian jewelry on a global stage by blending our rich cultural heritage with contemporary design. High-Quality, Luxurious, and Trusted.
        </p>
    </section>

    <!-- Our Story & Team -->
    <section id="story" class="border-t border-cbvh-gold-20 py-24 px-6 md:px-12 bg-cbvh-onyx relative scroll-mt-24">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">
            
            <!-- Story -->
            <div class="reveal-element">
                <h3 class="text-xs uppercase tracking-[0.2em] font-semibold text-cbvh-gold mb-6">Our Story</h3>
                <h4 class="font-serif text-3xl text-cbvh-ivory mb-6">A Legacy of Trust and Integrity</h4>
                <p class="text-cbvh-gray text-sm leading-relaxed mb-6">
                    For over two decades, CBVH has been at the forefront of Cambodia's luxury jewelry market. From our humble beginnings in 1998 to becoming an award-winning brand, we have built an enduring reputation based on honesty, integrity, and superior craftsmanship.
                </p>
                <p class="text-cbvh-gray text-sm leading-relaxed">
                    Guided by our core values, CBVH has successfully navigated global challenges, including supply chain disruptions during the pandemic, by prioritizing transparency, accountability, and adaptability. This resilience ensures our enduring commitment to our patrons.
                </p>
            </div>

            <!-- Team -->
            <div class="reveal-element" style="transition-delay: 150ms;">
                <h3 class="text-xs uppercase tracking-[0.2em] font-semibold text-cbvh-gold mb-6">Our Artisans</h3>
                <h4 class="font-serif text-3xl text-cbvh-ivory mb-6">Dedication to Excellence</h4>
                <p class="text-cbvh-gray text-sm leading-relaxed mb-6">
                    We are backed by a dedicated team of highly skilled artisans and professionals. We believe in continuous training and career development to ensure our staff delivers both stunning jewelry and world-class customer service.
                </p>
                <!-- Stylized stat -->
                <div class="border border-cbvh-gold-20 p-6 flex flex-col md:flex-row items-center gap-6 mt-8 hover:border-cbvh-gold-40 transition-colors bg-cbvh-obsidian">
                    <div class="text-4xl font-serif text-cbvh-gold">27+</div>
                    <div class="text-[0.65rem] uppercase tracking-widest text-cbvh-ivory">Years of generational<br>jewelry mastery</div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Core Values -->
    <section id="values" class="py-24 px-6 md:px-12 border-t border-cbvh-gold-20 scroll-mt-24">
        <div class="max-w-[1600px] mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h3 class="text-xs uppercase tracking-[0.2em] font-semibold text-cbvh-gold mb-4">Core Values</h3>
                <h4 class="font-serif text-3xl md:text-4xl text-cbvh-ivory">The Pillars of CBVH</h4>
            </div>

            <!-- C B V H Acronym -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-20">
                <div class="text-center group">
                    <div class="text-6xl font-serif font-light text-cbvh-gold md:text-white/5 md:group-hover:text-cbvh-gold transition-colors duration-500 mb-2">C</div>
                    <div class="text-sm tracking-[0.2em] uppercase text-cbvh-ivory">Creativity</div>
                </div>
                <div class="text-center group">
                    <div class="text-6xl font-serif font-light text-cbvh-gold md:text-white/5 md:group-hover:text-cbvh-gold transition-colors duration-500 mb-2">B</div>
                    <div class="text-sm tracking-[0.2em] uppercase text-cbvh-ivory">Benevolence</div>
                </div>
                <div class="text-center group">
                    <div class="text-6xl font-serif font-light text-cbvh-gold md:text-white/5 md:group-hover:text-cbvh-gold transition-colors duration-500 mb-2">V</div>
                    <div class="text-sm tracking-[0.2em] uppercase text-cbvh-ivory">Virtue</div>
                </div>
                <div class="text-center group">
                    <div class="text-6xl font-serif font-light text-cbvh-gold md:text-white/5 md:group-hover:text-cbvh-gold transition-colors duration-500 mb-2">H</div>
                    <div class="text-sm tracking-[0.2em] uppercase text-cbvh-ivory">Honor</div>
                </div>
            </div>

            <!-- Principles -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="border-t border-cbvh-gold-40 pt-6">
                    <h5 class="font-serif text-xl text-cbvh-ivory mb-3">Preservation & Innovation</h5>
                    <p class="text-cbvh-gray text-sm leading-relaxed">
                        Enhancing classic, traditional styles without losing their profound Cambodian cultural significance.
                    </p>
                </div>
                <div class="border-t border-cbvh-gold-40 pt-6">
                    <h5 class="font-serif text-xl text-cbvh-ivory mb-3">Customer-Centric Design</h5>
                    <p class="text-cbvh-gray text-sm leading-relaxed">
                        Crafting personalized jewelry that reflects individual tastes, emotions, and embraces modern trends.
                    </p>
                </div>
                <div class="border-t border-cbvh-gold-40 pt-6">
                    <h5 class="font-serif text-xl text-cbvh-ivory mb-3">Commitment to Excellence</h5>
                    <p class="text-cbvh-gray text-sm leading-relaxed">
                        Every single piece undergoes rigorous quality checks and inspections before it ever reaches our customers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Future Vision -->
    <section id="vision" class="bg-cbvh-onyx py-24 px-6 md:px-12 border-t border-cbvh-gold-20 scroll-mt-24">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Awards -->
            <div class="reveal-element">
                <h3 class="text-xs uppercase tracking-[0.2em] font-semibold text-cbvh-gold mb-6">Accolades</h3>
                <div class="flex items-start gap-6">
                    <div class="w-16 h-16 shrink-0 flex items-center justify-center border border-cbvh-gold rounded-full text-cbvh-gold">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-serif text-2xl text-cbvh-ivory mb-2">Top Brand 2024</h4>
                        <p class="text-cbvh-gray text-sm leading-relaxed">
                            CBVH recently received the prestigious Top Brand 2024 award from Influential Brands, cementing its status as a frontrunner in Cambodia's luxury jewelry market.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="reveal-element" style="transition-delay: 150ms;">
                <h3 class="text-xs uppercase tracking-[0.2em] font-semibold text-cbvh-gold mb-6">Future Vision</h3>
                <div class="space-y-8">
                    <div>
                        <h4 class="font-serif text-xl text-cbvh-ivory mb-2">Market Expansion</h4>
                        <p class="text-cbvh-gray text-sm leading-relaxed">
                            To meet growing customer demand, CBVH is expanding its footprint across Cambodia, with plans to establish branches in key cities like Phnom Penh, Battambang, and Siem Reap.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-serif text-xl text-cbvh-ivory mb-2">Educational Outreach</h4>
                        <p class="text-cbvh-gray text-sm leading-relaxed">
                            We aspire to establish a dedicated jewelry school to nurture the next generation of Cambodian artisans and elevate the industry's standards nationwide.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Location & Map -->
    <section id="location" class="bg-cbvh-obsidian py-24 px-6 md:px-12 border-t border-cbvh-gold-20 scroll-mt-24">
        <div class="max-w-[1600px] mx-auto text-center mb-12 reveal-element">
            <h3 class="text-xs uppercase tracking-[0.2em] font-semibold text-cbvh-gold mb-4">Our Salons</h3>
            <h4 class="font-serif text-3xl md:text-4xl text-cbvh-ivory">Visit Maison CBVH</h4>
            <p class="text-cbvh-gray font-light max-w-xl mx-auto mt-6 text-sm">
                Experience our high jewelry collections in person. Private viewings are held at our Phnom Penh headquarters.
            </p>
        </div>
        
        <div class="max-w-[1200px] mx-auto w-full h-[500px] border border-cbvh-gold-40 relative group overflow-hidden">
            <!-- Grayscale filter for luxury aesthetic -->
            <div class="absolute inset-0 pointer-events-none bg-transparent md:bg-black/0 md:shadow-[inset_0_0_50px_rgba(0,0,0,0.8)] md:group-hover:shadow-none transition-all duration-1000 z-10"></div>
            
            <iframe 
                class="w-full h-full grayscale-0 opacity-100 md:grayscale md:opacity-80 md:group-hover:grayscale-0 md:group-hover:opacity-100 transition-all duration-1000" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.595515285926!2d104.9047789747756!3d11.5808274438422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109516b3f3902b5%3A0xd5f7ebe992295fcc!2sCBVH!5e0!3m2!1sen!2skh!4v1788255739500!5m2!1sen!2skh" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
        </div>
    </section>

</div>
@endsection
