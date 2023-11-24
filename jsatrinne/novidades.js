
document.addEventListener("DOMContentLoaded", function () {
    const imagemHover = document.querySelector(".imagem-hover");

    imagemHover.addEventListener("mouseover", function () {
        imagemHover.style.transform = "scale(1.2)"; /* Aumenta o tamanho da imagem em 20% */
        imagemHover.style.filter = "brightness(0.7)"; /* Escurece a imagem em 30% */
    });

    imagemHover.addEventListener("mouseout", function () {
        imagemHover.style.transform = "scale(1)"; /* Retorna ao tamanho original */
        imagemHover.style.filter = "brightness(1)"; /* Retorna ao brilho original */
    });
});