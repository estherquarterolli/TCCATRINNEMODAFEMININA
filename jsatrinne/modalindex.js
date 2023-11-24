const popup = document.querySelector('.form-container');
const close = document.querySelector('.fechar');


window.onload = function(){
    setTimeout(function (){
        popup.style.display = "block";
}, 5000)
}
close.addEventListener('click', ()=>{
    popup.style.display = 'none';
})