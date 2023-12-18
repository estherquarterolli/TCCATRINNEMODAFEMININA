document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector('.carouselp');
    const slides = document.querySelectorAll('.carousel-slidep');
    const slideWidth = slides[0].clientWidth;
    let currentIndex = 0;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateCarousel();
    }

    function updateCarousel() {
        const translateX = -currentIndex * slideWidth;
        carousel.style.transform = `translateX(${translateX}px)`;
    }

    setInterval(nextSlide, 3000); // Troca de slide a cada 3 segundos

    updateCarousel(); // Exibe o primeiro slide
});

