document.addEventListener('DOMContentLoaded', () => {
    
    // --- Custom Cursor ---
    const cursor = document.getElementById('custom-cursor');
    const cursorDot = document.getElementById('custom-cursor-dot');
    
    if (cursor && cursorDot) {
        // Hide globally by default
        cursor.classList.add('opacity-0');
        cursorDot.classList.add('opacity-0');

        document.addEventListener('mousemove', (e) => {
            cursor.style.transform = `translate(${e.clientX - 12}px, ${e.clientY - 12}px)`;
            cursorDot.style.transform = `translate(${e.clientX - 3}px, ${e.clientY - 3}px)`;
        });

        // Only show cursor on the media container (product image)
        const mediaContainer = document.getElementById('media-container');
        if (mediaContainer) {
            mediaContainer.addEventListener('mouseenter', () => {
                // Only show if the device has a real mouse
                if (window.matchMedia('(hover: hover)').matches) {
                    cursor.classList.remove('opacity-0');
                    cursorDot.classList.remove('opacity-0');
                }
            });
            mediaContainer.addEventListener('mouseleave', () => {
                cursor.classList.add('opacity-0');
                cursorDot.classList.add('opacity-0');
            });
        }
    }

    // --- Media Gallery Switcher ---
    const tabs = document.querySelectorAll('.gallery-tab');
    const mediaContainers = {
        'media-macro': document.getElementById('media-macro'),
        'media-360': document.getElementById('media-360'),
        'media-craft': document.getElementById('media-craft')
    };

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Reset tabs
            tabs.forEach(t => {
                t.classList.remove('active', 'border-cbvh-gold', 'text-cbvh-ivory');
                t.classList.add('border-transparent', 'text-cbvh-gray');
            });
            // Activate current
            tab.classList.remove('border-transparent', 'text-cbvh-gray');
            tab.classList.add('active', 'border-cbvh-gold', 'text-cbvh-ivory');

            const targetId = tab.dataset.target;
            
            // Hide all media
            Object.values(mediaContainers).forEach(container => {
                if (container) {
                    container.classList.remove('opacity-100', 'pointer-events-auto');
                    container.classList.add('opacity-0', 'pointer-events-none');
                }
            });

            // Show target
            if (mediaContainers[targetId]) {
                mediaContainers[targetId].classList.remove('opacity-0', 'pointer-events-none');
                mediaContainers[targetId].classList.add('opacity-100', 'pointer-events-auto');
            }
        });
    });

    // --- Ultra-HD Zoom Loupe ---
    const macroContainer = document.getElementById('media-macro');
    const mainImg = document.getElementById('main-product-image');
    const zoomLoupe = document.getElementById('zoom-loupe');
    const zoomLoupeImg = document.getElementById('zoom-loupe-img');

    if (macroContainer && mainImg && zoomLoupe && zoomLoupeImg) {
        // Helper to check if device has a real mouse (prevents iPad tap-to-zoom)
        const isHoverDevice = () => window.innerWidth > 768 && window.matchMedia('(hover: hover)').matches;

        macroContainer.addEventListener('mouseenter', () => {
            // Only show zoom on desktop with real cursor
            if (isHoverDevice()) {
                zoomLoupe.classList.remove('hidden');
            }
        });

        macroContainer.addEventListener('mouseleave', () => {
            zoomLoupe.classList.add('hidden');
        });

        macroContainer.addEventListener('mousemove', (e) => {
            if (!isHoverDevice()) return;
            
            const rect = macroContainer.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            // Move loupe to center on cursor
            zoomLoupe.style.left = `${x - 80}px`;
            zoomLoupe.style.top = `${y - 80}px`;

            // Sync inner image size to match container perfectly
            zoomLoupeImg.style.width = `${rect.width}px`;
            zoomLoupeImg.style.height = `${rect.height}px`;

            // Shift inner image so it perfectly aligns with the main image underneath
            zoomLoupeImg.style.left = `-${x - 80}px`;
            zoomLoupeImg.style.top = `-${y - 80}px`;

            // Zoom the inner image, keeping the cursor point stationary via transformOrigin
            zoomLoupeImg.style.transformOrigin = `${x}px ${y}px`;
            zoomLoupeImg.style.transform = `scale(2.5)`;
        });
    }

    // --- Fullscreen API / Simulated Fullscreen ---
    const fullscreenBtn = document.getElementById('fullscreen-btn');
    const mediaContainer = document.getElementById('media-container');
    const fsIconEnter = document.getElementById('fs-icon-enter');
    const fsIconExit = document.getElementById('fs-icon-exit');
    let isFullscreen = false;

    if (fullscreenBtn && mediaContainer) {
        fullscreenBtn.addEventListener('click', () => {
            isFullscreen = !isFullscreen;
            
            if (isFullscreen) {
                // Enter simulated fullscreen (CSS based to support iOS)
                mediaContainer.classList.add('fixed', 'inset-0', 'z-[300]', 'bg-cbvh-obsidian', '!h-[100dvh]', '!w-screen');
                mediaContainer.classList.remove('relative');
                if (fsIconEnter) fsIconEnter.classList.add('hidden');
                if (fsIconEnter) fsIconEnter.classList.remove('block');
                if (fsIconExit) fsIconExit.classList.remove('hidden');
                if (fsIconExit) fsIconExit.classList.add('block');
                
                // Attempt native fullscreen for Android/PC (silent fail on iOS)
                if (mediaContainer.requestFullscreen) {
                    mediaContainer.requestFullscreen().catch(err => console.log('Native fullscreen disabled.'));
                }
            } else {
                // Exit fullscreen
                mediaContainer.classList.remove('fixed', 'inset-0', 'z-[300]', 'bg-cbvh-obsidian', '!h-[100dvh]', '!w-screen');
                mediaContainer.classList.add('relative');
                if (fsIconEnter) fsIconEnter.classList.remove('hidden');
                if (fsIconEnter) fsIconEnter.classList.add('block');
                if (fsIconExit) fsIconExit.classList.add('hidden');
                if (fsIconExit) fsIconExit.classList.remove('block');

                if (document.fullscreenElement) {
                    document.exitFullscreen().catch(err => console.log('Native exit failed.'));
                }
            }
        });

        // Listen for native ESC key exit to sync UI state
        document.addEventListener('fullscreenchange', () => {
            if (!document.fullscreenElement && isFullscreen) {
                isFullscreen = false;
                mediaContainer.classList.remove('fixed', 'inset-0', 'z-[300]', 'bg-cbvh-obsidian', '!h-[100dvh]', '!w-screen');
                mediaContainer.classList.add('relative');
                if (fsIconEnter) fsIconEnter.classList.remove('hidden');
                if (fsIconEnter) fsIconEnter.classList.add('block');
                if (fsIconExit) fsIconExit.classList.add('hidden');
                if (fsIconExit) fsIconExit.classList.remove('block');
            }
        });
    }

    // --- Overlay Menu ---
    const menuTrigger = document.getElementById('menu-trigger');
    const menuClose = document.getElementById('menu-close');
    const overlayMenu = document.getElementById('overlay-menu');
    const menuLinks = document.querySelectorAll('.menu-link');
    let isMenuOpen = false;

    if (menuTrigger && overlayMenu) {
        menuTrigger.addEventListener('click', () => {
            isMenuOpen = true;
            overlayMenu.classList.remove('opacity-0', 'pointer-events-none');
            overlayMenu.classList.add('opacity-100', 'pointer-events-auto');
        });

        if (menuClose) {
            menuClose.addEventListener('click', () => {
                isMenuOpen = false;
                overlayMenu.classList.add('opacity-0', 'pointer-events-none');
                overlayMenu.classList.remove('opacity-100', 'pointer-events-auto');
            });
        }

        // Close menu when a link is clicked
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                isMenuOpen = false;
                overlayMenu.classList.add('opacity-0', 'pointer-events-none');
                overlayMenu.classList.remove('opacity-100', 'pointer-events-auto');
            });
        });
    }

    // --- Scroll Reveal Animations ---
    const revealElements = document.querySelectorAll('.reveal-element, .reveal-left, .reveal-right');
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                // Optional: stop observing once revealed so it doesn't animate out and in repeatedly
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        threshold: 0.1, // Trigger when 10% visible
        rootMargin: '0px 0px -50px 0px' // Slightly before bottom of screen
    });

    revealElements.forEach(el => revealObserver.observe(el));

});

// --- Modal Functions (Global scope for inline onclick handlers) ---
window.openAppointmentModal = function(refCode = '') {
    const modal = document.getElementById('appointment-modal');
    const refDisplay = document.getElementById('modal-ref-code');
    const content = document.getElementById('appointment-modal-content');
    
    if (refCode && refDisplay) {
        refDisplay.textContent = `(Ref: ${refCode})`;
    } else if (refDisplay) {
        refDisplay.textContent = '';
    }

    if (modal) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        // Small delay to allow display:block to apply before animating opacity
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modal.classList.add('opacity-100');
            content.classList.remove('scale-95');
            content.classList.add('scale-100');
        }, 10);
    }
}

window.closeAppointmentModal = function() {
    const modal = document.getElementById('appointment-modal');
    const content = document.getElementById('appointment-modal-content');
    
    if (modal) {
        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0');
        content.classList.remove('scale-100');
        content.classList.add('scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            
            // Reset form if success was showing
            document.getElementById('appointment-form').classList.remove('hidden');
            document.getElementById('success-message').classList.add('hidden');
        }, 500);
    }
}

window.submitAppointment = async function(e) {
    e.preventDefault();
    
    const form = e.target;
    const btn = form.querySelector('button[type="submit"]');
    const btnText = document.getElementById('submit-text');
    
    // UI Loading state
    const originalText = btnText.innerText;
    btnText.innerText = 'Transmitting...';
    btn.disabled = true;

    try {
        const formData = new FormData(form);
        const response = await fetch('/api/inquire', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
            }
        });
        
        const data = await response.json();
        
        if (data.status === 'success') {
            form.classList.add('hidden');
            const successEl = document.getElementById('success-message');
            document.getElementById('success-ref-code').innerText = data.reference_code;
            successEl.classList.remove('hidden');
            
            // Generate Confetti/Sparkle effect (mocking high-end interaction)
            setTimeout(() => {
                successEl.classList.add('gold-shimmer');
            }, 100);
        }
    } catch (error) {
        console.error('Error submitting appointment:', error);
        btnText.innerText = 'Error - Try Again';
    } finally {
        btn.disabled = false;
        if(btnText.innerText === 'Transmitting...') btnText.innerText = originalText;
    }
}

window.launchTelegram = function(refCode, itemName) {
    const text = `Bonjour Concierge, I am inquiring regarding the high jewelry piece: ${itemName} (Ref: ${refCode}). Please provide dossier details and availability.`;
    const url = `https://t.me/cbvhjewelry?text=${encodeURIComponent(text)}`;
    window.open(url, '_blank');
}
