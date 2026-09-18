<div id="appointment-modal" class="fixed inset-0 z-[200] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-500">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-cbvh-obsidian/90 backdrop-blur-xl" onclick="closeAppointmentModal()"></div>

    <!-- Modal Content -->
    <div class="relative w-full max-w-2xl max-h-[90vh] overflow-y-auto scrollbar-hide glass-panel text-cbvh-ivory p-6 md:p-12 transform scale-95 transition-transform duration-500" id="appointment-modal-content">
        
        <!-- Close Button -->
        <button onclick="closeAppointmentModal()" class="absolute top-6 right-6 text-cbvh-gray hover:text-cbvh-gold transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <div class="text-center mb-10">
            <span class="text-[0.6rem] uppercase tracking-[0.3em] text-cbvh-gold font-medium mb-3 block">Private Services</span>
            <h2 class="font-serif text-3xl md:text-4xl font-light tracking-wide mb-4">Request a Viewing</h2>
            <p class="text-cbvh-gray text-sm max-w-md mx-auto">
                Arrange a private showroom presentation or request a secured digital archive for reference <span id="modal-ref-code" class="text-cbvh-ivory ml-1"></span>.
            </p>
        </div>

        <form id="appointment-form" class="space-y-8" onsubmit="submitAppointment(event)">
            <!-- Experience / Location -->
            <div>
                <label class="block text-xs uppercase tracking-[0.15em] text-cbvh-gray mb-4">Select Experience</label>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-3">
                    <label class="cursor-pointer md:col-span-2">
                        <input type="radio" name="location" value="hq" class="peer sr-only" checked>
                        <div class="border border-white/10 p-4 text-center hover:border-cbvh-gold/50 peer-checked:border-cbvh-gold peer-checked:bg-cbvh-gold/10 transition h-full flex flex-col justify-center">
                            <span class="block font-serif text-lg mb-1">Boeung Kak HQ</span>
                            <span class="block text-[10px] text-cbvh-gray tracking-widest uppercase">Phnom Penh</span>
                        </div>
                    </label>
                    <label class="cursor-pointer md:col-span-2">
                        <input type="radio" name="location" value="baktouk" class="peer sr-only">
                        <div class="border border-white/10 p-4 text-center hover:border-cbvh-gold/50 peer-checked:border-cbvh-gold peer-checked:bg-cbvh-gold/10 transition h-full flex flex-col justify-center">
                            <span class="block font-serif text-lg mb-1">Bak Touk</span>
                            <span class="block text-[10px] text-cbvh-gray tracking-widest uppercase">Phnom Penh</span>
                        </div>
                    </label>

                    <label class="cursor-pointer md:col-span-2">
                        <input type="radio" name="location" value="siemreap" class="peer sr-only">
                        <div class="border border-white/10 p-4 text-center hover:border-cbvh-gold/50 peer-checked:border-cbvh-gold peer-checked:bg-cbvh-gold/10 transition h-full flex flex-col justify-center">
                            <span class="block font-serif text-lg mb-1">Siem Reap</span>
                            <span class="block text-[10px] text-cbvh-gray tracking-widest uppercase">Q Vanhong</span>
                        </div>
                    </label>
                    <label class="cursor-pointer md:col-span-2 md:col-start-2">
                        <input type="radio" name="location" value="battambang" class="peer sr-only">
                        <div class="border border-white/10 p-4 text-center hover:border-cbvh-gold/50 peer-checked:border-cbvh-gold peer-checked:bg-cbvh-gold/10 transition h-full flex flex-col justify-center">
                            <span class="block font-serif text-lg mb-1">Battambang</span>
                            <span class="block text-[10px] text-cbvh-gray tracking-widest uppercase">Vanhong</span>
                        </div>
                    </label>
                    <label class="cursor-pointer col-span-2 md:col-span-2">
                        <input type="radio" name="location" value="digital" class="peer sr-only">
                        <div class="border border-white/10 p-4 text-center hover:border-cbvh-gold/50 peer-checked:border-cbvh-gold peer-checked:bg-cbvh-gold/10 transition h-full flex flex-col justify-center">
                            <span class="block font-serif text-lg">Digital Archive</span>
                            <span class="block text-[10px] text-cbvh-gray tracking-widest uppercase mt-1">(High-Res Link)</span>
                        </div>
                    </label>
                </div>
            </div>

            <!-- VIP Details -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[10px] uppercase tracking-[0.2em] text-cbvh-gray mb-2">Full Name</label>
                    <input type="text" required class="w-full bg-transparent border-b border-white/20 pb-2 text-cbvh-ivory focus:outline-none focus:border-cbvh-gold transition rounded-none placeholder-white/20" placeholder="e.g. Eleanor Vance">
                </div>
                <div>
                    <label class="block text-[10px] uppercase tracking-[0.2em] text-cbvh-gray mb-2">Preferred Communication</label>
                    <div class="flex space-x-4">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="comm" value="telegram" class="text-cbvh-gold focus:ring-cbvh-gold bg-transparent border-white/20" checked>
                            <span class="text-sm">Telegram</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="comm" value="whatsapp" class="text-cbvh-gold focus:ring-cbvh-gold bg-transparent border-white/20">
                            <span class="text-sm">WhatsApp</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="comm" value="email" class="text-cbvh-gold focus:ring-cbvh-gold bg-transparent border-white/20">
                            <span class="text-sm">Email</span>
                        </label>
                    </div>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-[10px] uppercase tracking-[0.2em] text-cbvh-gray mb-2">Contact Value (Username/Number/Email)</label>
                    <input type="text" required class="w-full bg-transparent border-b border-white/20 pb-2 text-cbvh-ivory focus:outline-none focus:border-cbvh-gold transition rounded-none">
                </div>
            </div>

            <div class="pt-6">
                <button type="submit" class="w-full py-4 bg-cbvh-gold/10 border border-cbvh-gold text-cbvh-gold hover:bg-cbvh-gold hover:text-cbvh-obsidian transition-all duration-300 uppercase tracking-[0.2em] text-xs font-semibold flex items-center justify-center">
                    <span id="submit-text">Request Appointment Callback</span>
                    <svg class="w-4 h-4 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </div>
        </form>

        <!-- Success Message (Hidden by default) -->
        <div id="success-message" class="hidden text-center py-12">
            <div class="w-16 h-16 rounded-full border border-cbvh-gold flex items-center justify-center mx-auto mb-6 text-cbvh-gold">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h3 class="font-serif text-2xl mb-4">Request Received</h3>
            <p class="text-cbvh-gray text-sm mb-8">
                Our client services team will contact you shortly to confirm the arrangements. 
                <br>Reference ID: <span id="success-ref-code" class="text-cbvh-gold font-medium"></span>
            </p>
            <button onclick="closeAppointmentModal()" class="text-[10px] uppercase tracking-[0.2em] text-cbvh-gray hover:text-cbvh-ivory transition border-b border-transparent hover:border-cbvh-ivory pb-1">Return to Archive</button>
        </div>

    </div>
</div>
