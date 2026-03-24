// Mobile Menu Toggle
const hamburger = document.querySelector("#mobile-menu");
const navMenu = document.querySelector(".nav-menu");

if (hamburger && navMenu) {
    hamburger.addEventListener("click", () => {
        navMenu.classList.toggle("active");
    });

    // Close menu when clicking a link
    document.querySelectorAll(".nav-list a").forEach(link => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("active");
        });
    });
}

// Testimonial Swiper
// Testimonial Slider Controls
document.addEventListener('DOMContentLoaded', function() {
    const sliderTrack = document.querySelector('.testimonial-slider-track');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let isPaused = false;
    
    // Clone slides for infinite effect
    function cloneSlides() {
        const slides = document.querySelectorAll('.testimonial-slide');
        slides.forEach(slide => {
            const clone = slide.cloneNode(true);
            sliderTrack.appendChild(clone);
        });
    }
    
    cloneSlides();
    
    // Pause animation on hover
    sliderTrack.addEventListener('mouseenter', () => {
        if (!isPaused) {
            sliderTrack.style.animationPlayState = 'paused';
        }
    });
    
    sliderTrack.addEventListener('mouseleave', () => {
        if (!isPaused) {
            sliderTrack.style.animationPlayState = 'running';
        }
    });
    
    // Manual slider controls
    prevBtn.addEventListener('click', () => {
        isPaused = true;
        sliderTrack.style.animationPlayState = 'paused';
        
        // Calculate current position
        const currentTransform = getComputedStyle(sliderTrack).transform;
        const matrix = new DOMMatrix(currentTransform);
        let currentX = matrix.m41;
        
        // Move left by one card width + gap
        const slideWidth = document.querySelector('.testimonial-slide').offsetWidth;
        const gap = 25; // Same as CSS gap
        const moveDistance = slideWidth + gap;
        
        currentX += moveDistance;
        
        // If we've moved beyond original content, reset to beginning
        const totalOriginalWidth = slideWidth * 6 + gap * 5;
        if (currentX > 0) {
            currentX = -totalOriginalWidth;
        }
        
        sliderTrack.style.transform = `translateX(${currentX}px)`;
        
        // Auto-resume after 3 seconds
        setTimeout(() => {
            isPaused = false;
            sliderTrack.style.animationPlayState = 'running';
        }, 3000);
    });
    
    nextBtn.addEventListener('click', () => {
        isPaused = true;
        sliderTrack.style.animationPlayState = 'paused';
        
        // Calculate current position
        const currentTransform = getComputedStyle(sliderTrack).transform;
        const matrix = new DOMMatrix(currentTransform);
        let currentX = matrix.m41;
        
        // Move right by one card width + gap
        const slideWidth = document.querySelector('.testimonial-slide').offsetWidth;
        const gap = 25; // Same as CSS gap
        const moveDistance = slideWidth + gap;
        
        currentX -= moveDistance;
        
        // If we've moved beyond cloned content, reset to beginning
        const totalWidth = slideWidth * 12 + gap * 11; // Original + cloned slides
        if (currentX < -totalWidth / 2) {
            currentX = 0;
        }
        
        sliderTrack.style.transform = `translateX(${currentX}px)`;
        
        // Auto-resume after 3 seconds
        setTimeout(() => {
            isPaused = false;
            sliderTrack.style.animationPlayState = 'running';
        }, 3000);
    });
    
    // Responsive animation speed adjustment
    function adjustAnimationSpeed() {
        const width = window.innerWidth;
        let duration = 30; // Default duration in seconds
        
        if (width <= 1200 && width > 992) {
            duration = 25;
        } else if (width <= 992 && width > 768) {
            duration = 20;
        } else if (width <= 768 && width > 576) {
            duration = 18;
        } else if (width <= 576) {
            duration = 15;
        }
        
        sliderTrack.style.animationDuration = `${duration}s`;
    }
    
    // Initial adjustment
    adjustAnimationSpeed();
    
    // Adjust on resize
    window.addEventListener('resize', adjustAnimationSpeed);
});




// Form submission
const contactForm = document.querySelector('.sub-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
        alert('Thank you for your subscription! We will contact you soon.');
        this.reset();
    });
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// Add active class to current page in navigation
const currentPage = window.location.pathname.split('/').pop();
const navLinks = document.querySelectorAll('.nav-list a');

navLinks.forEach(link => {
    const linkPage = link.getAttribute('href');
    if (linkPage === currentPage) {
        link.classList.add('active');
    } else {
        link.classList.remove('active');
    }
});























document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".filter-btn");
    const cards = document.querySelectorAll(".product-card");

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            // Update Active Button
            buttons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            const filter = btn.getAttribute("data-id");

            cards.forEach(card => {
                if (filter === "all") {
                    card.classList.remove("hidden");
                } else {
                    if (card.getAttribute("data-category") === filter) {
                        card.classList.remove("hidden");
                    } else {
                        card.classList.add("hidden");
                    }
                }
            });
        });
    });
});









