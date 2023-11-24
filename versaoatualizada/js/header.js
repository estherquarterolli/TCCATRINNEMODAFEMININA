function menuShow() {
  let menuMobile = document.querySelector('.mobile-menu');
  if (menuMobile.classList.contains('open')) {
      menuMobile.classList.remove('open');
      document.querySelector('.icon').src = "imagenstcc/menu_white_36dp.svg";
  } else {
      menuMobile.classList.add('open');
      document.querySelector('.icon').src = "imagenstcc/close_white_36dp.svg";
  }
}

// rolagem do menu 

window.addEventListener("scroll", function(){
    let header= document.querySelector('header')
    header.classList.toggle('rolagem', window.scrollY > 0 )
})


