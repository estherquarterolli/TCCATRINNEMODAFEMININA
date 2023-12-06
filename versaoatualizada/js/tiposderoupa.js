document.addEventListener("DOMContentLoaded", function () {
  var mySwiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      750: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1500: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });

  // graddable slider
  const slider = document.querySelector('.product');
  const cards = document.querySelector('.product-containerzao');
  let isPressed = false;
  let cursorX;

  slider.addEventListener("mousedown", (e) => {
    isPressed = true;
    cursorX = e.clientX - cards.offsetLeft;
    slider.style.cursor = "grabbing";
  });

  slider.addEventListener("mouseup", () => {
    slider.style.cursor = "grab";
  });

  window.addEventListener("mouseup", () => {
    isPressed = false;
  });

  slider.addEventListener("mousemove", (e) => {
    if (!isPressed) return;
    e.preventDefault();
    cards.style.left = `${e.clientX - cursorX}px`;
    boundSlides();
  });

  function boundSlides() {
    const containerRect = slider.getBoundingClientRect();
    const cardsRect = cards.getBoundingClientRect();

    if (parseInt(cards.style.left) > 0) {
      cards.style.left = 0;
    } else if (cardsRect.right < containerRect.right) {
      cards.style.left = `-${cardsRect.width - containerRect.width}px`;
    }
  }
});
