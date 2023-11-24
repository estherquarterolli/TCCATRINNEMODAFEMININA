let products = {
  data: [
    // conjuntos
    {
      productName: "Conjunto Amanda",
      category: "Conjuntos",
      price: "179,00",
      image: "imagenstcc/Conjunto Amanda. R$ 179,00_.jpg",
    },

    {
      productName: "Conjunto Dany",
      category: "Conjuntos",
      price: "169,00",
      image: "imagenstcc/Conjunto Dany. R$ 169.00_",
    },
    {
      productName: "Conjunto Duda",
      category: "Conjuntos",
      price: "179,00",
      image: "imagenstcc/Conjunto Duda. 179,00_.jpg",
    },
    {
      productName: "Conjunto Lanzinha",
      category: "Conjuntos",
      price: "139,00",
      image: "imagenstcc/Conjunto lanzinha. R$ 139,90_.jpg",
    },
    {
      productName: "Conjunto Thayná",
      category: "Conjuntos",
      price: "99,00",
      image: "imagenstcc/Conjunto Thayná. R$ 99,00.jpg",
    },
  // Blusas:
  {
    productName: "Blusa babado",
    category: "Blusas",
    price: "49,90",
    image: "imagenstcc/Blusa babado. R$ 49,90_.jpg",
  },
  {
    productName: "Body Dany",
    category: "Blusas",
    price: "59,90",
    image: "imagenstcc/Body Any. R$ 59,90_.jpg",
  },
  {
    productName: "Body Laís",
    category: "Blusas",
    price: "59,90",
    image: "imagenstcc/Body Laís. R$ 59,90_.jpg",
  },
  {
    productName: "Body Liz",
    category: "Blusas",
    price: "59,90",
    image: "imagenstcc/Body Liz. R$ 59,90_.jpg",
  },
    // Calças:
    {
      productName: "Calça Crystal",
      category: "Calças",
      price: "179,90",
      image: "imagenstcc/Calça Crystal. R$ 179,00_.jpg",
    },
    {
      productName: "Calça em alfaiataria cargo",
      category: "Calças",
      price: "140,00",
      image: "imagenstcc/Calça em alfaiataria cargo. R$ 140,00_.jpg",
    },
    {
      productName: "Calça em alfaiataria Jade",
      category: "Calças",
      price: "129,00",
      image: "imagenstcc/Calça em alfaiataria Jade. R$ 129,00_.jpg",
    },
    {
      productName: "Calça jeans com elastano",
      category: "Calças",
      price: "139,90",
      image: "imagenstcc/Calça jeans com elastano. R$ 139,90_.jpg",
    },
    // short
    {
      productName: "Short baggy Brisa",
      category: "Shorts",
      price: "119,90",
      image: "imagenstcc/Short baggy Brisa. R$ 119,00_.jpg",
    },
    {
      productName: "Short cargo",
      category: "Shorts",
      price: "90,00",
      image: "imagenstcc/Short cargo. R$ 90,00_(1).jpg",
    },
    // Macaquinhos
    {
      productName: "Macacão floral",
      category: "Macaquinhos",
      price: "189,00",
      image: "imagenstcc/Macacão floral. R$ 189,00.jpg",
    },
    {
      productName: "Macaquinho Angel",
      category: "Macaquinhos",
      price: "119,90",
      image: "imagenstcc/Macaquinho Angel. R$ 119,00.jpg",
    },
    //Vestidos:
    {
      productName: "Vestido Corcovado",
      category: "Vestidos",
      price: "239,00",
      image: "imagenstcc/Vestido Corcovado. 239,00_.jpg",
    },
    {
      productName: "Vestido Joice",
      category: "Vestidos",
      price: "109,00",
      image: "imagenstcc/Vestido Joice. R$ 109,00_.jpg",
    },
    {
      productName: "Vestido Joice",
      category: "Vestidos",
      price: "109,00",
      image: "imagenstcc/Vestido Joice. R$ 109,00_.jpg",
    },
    {
      productName: "Vestido Joice",
      category: "Vestidos",
      price: "109,00",
      image: "imagenstcc/Vestido Joice. R$ 109,00_.jpg",
    },
  ],
};

for (let i of products.data) {
  //Create Card
  let card = document.createElement("div");
  //Card should have category and should stay hidden initially
  card.classList.add("card", i.category, "hide");
  //image div
  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");
  //img tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);
  //container
  let container = document.createElement("div");
  container.classList.add("container");
  //product name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);
  //price
  let price = document.createElement("h6");
  price.innerText = "R$" + i.price;
  container.appendChild(price);

  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}

//parameter passed from button (Parameter same as category)
function filterProduct(value) {
  //Button class code
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    //check if value equals innerText
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  //select all cards
  let elements = document.querySelectorAll(".card");
  //loop through all cards
  elements.forEach((element) => {
    //display all cards on 'all' button click
    if (value == "all") {
      element.classList.remove("hide");
    } else {
      //Check if element contains category class
      if (element.classList.contains(value)) {
        //display element based on category
        element.classList.remove("hide");
      } else {
        //hide other elements
        element.classList.add("hide");
      }
    }
  });
}

//Search button click
document.getElementById("search").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      cards[index].classList.remove("hide");
    } else {
      //hide others
      cards[index].classList.add("hide");
    }
  });
});

//Initially display all products
window.onload = () => {
  filterProduct("all");
};

// redirecionar
// Função para redirecionar para a página de produto com os dados específicos
function redirectToProductPage(productIndex) {
  let selectedProduct = products.data[productIndex];
  redirectToProduct(selectedProduct);
}

// Função para redirecionar para a página de produto com os dados do produto
function redirectToProduct(product) {
  let queryString = "?product=" + encodeURIComponent(JSON.stringify(product));
  window.location.href = 'produto.html' + queryString;
}

//exportar varíavel para outra página. 
module.exports = products;