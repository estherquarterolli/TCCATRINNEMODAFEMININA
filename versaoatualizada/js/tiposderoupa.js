// document.addEventListener("DOMContentLoaded", function () {
//   var mySwiper = new Swiper(".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 10,
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//     breakpoints: {
//       0: {
//         slidesPerView: 1,
//         spaceBetween: 10,
//       },
//       750: {
//         slidesPerView: 2,
//         spaceBetween: 20,
//       },
//       1000: {
//         slidesPerView: 3,
//         spaceBetween: 40,
//       },
//       1500: {
//         slidesPerView: 4,
//         spaceBetween: 50,
//       },
//     },
//   });

  // graddable slider
  let isDown = false;
let startX;
let scrollLeft;
const slider = document.querySelector('.product-container');

const end = () => {
	isDown = false;
  slider.classList.remove('active');
}

const start = (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX || e.touches[0].pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;	
}

const move = (e) => {
	if(!isDown) return;

  e.preventDefault();
  const x = e.pageX || e.touches[0].pageX - slider.offsetLeft;
  const dist = (x - startX);
  slider.scrollLeft = scrollLeft - dist;
}

(() => {
	slider.addEventListener('mousedown', start);
	slider.addEventListener('touchstart', start);

	slider.addEventListener('mousemove', move);
	slider.addEventListener('touchmove', move);

	slider.addEventListener('mouseleave', end);
	slider.addEventListener('mouseup', end);
	slider.addEventListener('touchend', end);
})();


//teste para ficar slider infinito:

$(document).ready(function() {
  $('#slider-infinito').lightSlider({
      autoWidth:true,
      loop:true,
      onSliderLoad: function() {
          $('#slider-infinito').removeClass('cS-hidden');
      } 
  });  
});