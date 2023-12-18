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



// index com usuário já logado
document.getElementById("dropdownBtn").addEventListener("click", function() {
  var dropdownContent = this.querySelector(".dropdown-content");
  dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
});

document.addEventListener("click", function(event) {
  var dropdownBtn = document.getElementById("dropdownBtn");
  if (!dropdownBtn.contains(event.target)) {
      var dropdownContent = dropdownBtn.querySelector(".dropdown-content");
      dropdownContent.style.display = "none";
  }
});



//mobile btn perfil
function toggleDropdown() {
  var dropdownContent = document.getElementById("dropdownContent");
  if (dropdownContent.style.display === "none" || dropdownContent.style.display === "") {
    dropdownContent.style.display = "block";
  } else {
    dropdownContent.style.display = "none";
  }
}



// menu dropdown 

function toggleProfileDropdown() {
  var dropdownContent = document.getElementById("profileDropdown").querySelector(".dropdown-content-mobile");
  dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
}

document.addEventListener("click", function (event) {
  var profileDropdown = document.getElementById("profileDropdown");
  if (!profileDropdown.contains(event.target)) {
      var dropdownContent = profileDropdown.querySelector(".dropdown-content-mobile");
      dropdownContent.style.display = "none";
  }
});
