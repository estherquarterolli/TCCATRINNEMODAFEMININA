// Atualiza os elementos da página com os dados do produto
document.getElementById('product-title').innerText = productData.title;
document.getElementById('product-price').innerText = productData.price;
document.getElementById('product-description').innerText = productData.description;

// Atualiza a imagem principal do produto
document.getElementById('main-product-image').src = productData.images[0];

// Função para trocar a imagem principal ao clicar nas miniaturas
function changeImage(index) {
    document.getElementById('main-product-image').src = productData.images[index];
}


// Recupera os dados do produto selecionado armazenados no localStorage
let selectedProduct = JSON.parse(localStorage.getItem('selectedProduct'));

// Atualiza os elementos da página com os dados do produto
document.getElementById('product-title').innerText = selectedProduct.productName;
document.getElementById('product-price').innerText = "R$ " + selectedProduct.price;
document.getElementById('product-description').innerText = selectedProduct.description;

// Atualiza as imagens do produto
document.getElementById('main-product-image').src = selectedProduct.image;
// Adicione a lógica para as miniaturas conforme necessário






// Função para obter parâmetros da URL
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    let regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

// Recupera os dados do produto da URL
let productParam = getParameterByName('product');
if (productParam) {
    let selectedProduct = JSON.parse(productParam);

    // Atualiza os elementos da página com os dados do produto
    document.getElementById('main-product-image').src = selectedProduct.image;
    // Adicione mais elementos conforme necessário
}
