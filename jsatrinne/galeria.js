const slider = document.getElementById("myRange");
const output = document.createElement("div");
output.classList.add("slider-value");
output.innerText = slider.value;

slider.oninput = function() {
    output.innerText = this.value;
};

slider.parentElement.appendChild(output);

const checkboxes = document.querySelectorAll('input[type="checkbox"]');
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function() {
        this.parentElement.classList.toggle("active", this.checked);
    });
});



// galeria


const coracoes = document.querySelectorAll('.coracao');

coracoes.forEach(coracao => {
    coracao.addEventListener('click', function() {
        this.classList.toggle('favorito');
    });
});

const mostrarMaisBtn = document.querySelector('.mostrar-mais');
const galeria = document.querySelector('.galeria');

mostrarMaisBtn.addEventListener('click', function() {
    for (let i = 0; i < 5; i++) {
        const produto = document.createElement('div');
        produto.classList.add('produto');
        produto.innerHTML = `
            <div class="coracao"></div>
            <button class="adicionar">Adicionar ao Carrinho</button>
            <img src="produto${i + 6}.jpg" alt="Produto ${i + 6}" class="imagem">
            <h2><a href="produtoespecifico.html">Nome do Produto ${i + 6}</a></h2>
            <h3>R$100,00</h3>
        `;
        galeria.appendChild(produto);
        coracoes.push(produto.querySelector('.coracao'));
        produto.querySelector('.coracao').addEventListener('click', function() {
            this.classList.toggle('favorito');
        });
    }
});
