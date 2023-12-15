<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/headerpaginas.css">
    <link rel="stylesheet" href="css/galeria.css">
   
    <title>Atrinne Moda Feminina</title>

</head>

<body>
  
<?php 
  include('header.php') 
   ?>

   <!-- final do header -->
<div class="gallery-container">
  <center><h1> PRODUTOS QUE VOCÊ SÓ ENCONTRA NA ATRINNE</h1></center>
<BR>
  <div class="wrapper">
    <CENTER><div id="search-container">
    <input
      type="search"e
      id="search-input"
      placeholder="Pesquise o produto..."
    />
    <button id="search">Search</button>
  </div>
  <BR>
  <div id="buttons">
    <button class="button-value" onclick="filterProduct('Todos')">Todos</button>
    <button class="button-value" onclick="filterProduct('Blusas')">
     Blusas
    </button>
    <button class="button-value" onclick="filterProduct('Calças')">
     Calças
    </button>
    <button class="button-value" onclick="filterProduct('Shorts')">
      Shorts
    </button>
    <button class="button-value" onclick="filterProduct('Conjuntos')">
     Conjuntos
    </button>
    <button class="button-value" onclick="filterProduct('Macaquinhos')">
      Macaquinhos
     </button>
     <button class="button-value" onclick="filterProduct('Vestidos')">
      Vestidos
     </button>
  </div></CENTER>
  <a href="PRODUTO.HTML"><div id="products" onclick="redirectToProductPage(0)"></div></a>
  
</div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/galeria.js"></script>
  <script src="js/header.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ionicon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>