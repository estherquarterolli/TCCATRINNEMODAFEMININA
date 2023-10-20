document.addEventListener("DOMContentLoaded", function () {
    const carrossel = document.querySelector(".carrossel");
    const slides = document.querySelectorAll(".tiposderoupa-slide");
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    let currentIndex = 0;

    function showSlide(index) {
        if (index < 0) {
            currentIndex = slides.length - 1;
        } else if (index >= slides.length) {
            currentIndex = 0;
        }

        const translateX = -currentIndex * (25 + 2) + "%";
        carrossel.style.transform = `translateX(${translateX})`;
    }

    prevButton.addEventListener("click", () => {
        currentIndex--;
        showSlide(currentIndex);
    });

    nextButton.addEventListener("click", () => {
        currentIndex++;
        showSlide(currentIndex);
    });

    // Inicialmente, mostrar o primeiro slide
    showSlide(currentIndex);
});

