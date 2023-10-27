// Função para incrementar a quantidade
function incrementarQuantidade() {
    var inputQuantidade = document.querySelector('.input-quantidade');
    inputQuantidade.value = parseInt(inputQuantidade.value) + 1;
}

// Função para decrementar a quantidade
function decrementarQuantidade() {
    var inputQuantidade = document.querySelector('.input-quantidade');
    if (parseInt(inputQuantidade.value) > 1) {
        inputQuantidade.value = parseInt(inputQuantidade.value) - 1;
    }
}
