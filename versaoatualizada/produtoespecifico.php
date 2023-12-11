<?php
include ('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/headerpag.css">
    <link rel="stylesheet" href="css/produtoespecifico.css">
   
    <link rel="stylesheet" href="css/rodape.css">
  

    <title>Atrinne Moda Feminina</title>

    <!-- ionicon -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  

</head>

<body>
 <?php include('header.php') 
 ?>
   <!-- FIM DO HEADER -->
<section>
<div class="container">
        <div class="single-product">
            <div class="row">
                <div class="col-6">
                    <div class="product-image">
                        <div class="product-image-main">
                            <img src="imagenstcc/Blusa babado. R$ 49,90_.jpg" alt="" id="product-main-image">
                        </div>
                        <div class="product-image-slider">
                            <img src="imagenstcc/Blusa babado. R$ 49,90_.jpg" alt=""  class="image-list">
                            <img src="imagenstcc/Blusa babado. R$ 49,90_.jpg" alt=""  class="image-list">
                            <img src="imagenstcc/Blusa babado. R$ 49,90_.jpg" alt=""  class="image-list">
                            <img src="imagenstcc/Blusa babado. R$ 49,90_.jpg" alt=""  class="image-list">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="breadcrumb">
                        <span><a href="#">Home</a></span>
                        <span><a href="#">Product</a></span>
                        <span class="active">T-shirt</span>
                    </div>

                    <div class="product">
                        <div class="product-title">
                            <h2>Half Sleve T-shirt for Men</h2>
                        </div>
                        <div class="product-rating">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span class="review">(47 Review)</span>
                        </div>
                        <div class="product-price">
                            <span class="offer-price">$99.00</span>
                            <span class="sale-price">$129.00</span>
                        </div>

                        <div class="product-details">
                            <h3>Description</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est magnam quibusdam maiores sit perferendis minima cupiditate iusto earum repudiandae maxime vitae nostrum, ea cumque iste ipsa hic commodi tempore.</p>
                        </div>
                        <div class="product-size">
                            <h4>Size</h4>
                            <div class="size-layout">
                                <input type="radio" name="size" value="S" id="1" class="size-input">
                                <label for="1" class="size">S</label>

                                <input type="radio" name="size" value="M" id="2" class="size-input">
                                <label for="2" class="size">M</label>

                                <input type="radio" name="size" value="L" id="3" class="size-input">
                                <label for="3" class="size">L</label>

                                <input type="radio" name="size" value="XL" id="4" class="size-input">
                                <label for="4" class="size">XL</label>

                                <input type="radio" name="size" value="XXL" id="5" class="size-input">
                                <label for="5" class="size">XXL</label>
                            </div>
                        </div>
                        <div class="product-color">
                            <h4>Color</h4>
                            <div class="color-layout">
                                <input type="radio" name="color"  value="black" class="color-input">
                                <label for="black" class="black"></label>
                                <input type="radio" name="color"  value="red" class="color-input">
                                <label for="red" class="red"></label>

                                <input type="radio" name="color"  value="blue" class="color-input">
                                <label for="blue" class="blue"></label>
                            </div>
                        </div>
                        <span class="divider"></span>

                        <div class="product-btn-group">
                            <div class="button buy-now"><i class='bx bxs-zap' ></i> Buy Now</div>
                            <div class="button add-cart"><i class='bx bxs-cart' ></i> Add to Cart</div>
                            <div class="button heart"><i class='bx bxs-heart' ></i> Add to Wishlist</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
  <!-- rodapé -->
  <footer>
    <div class="footer-container">
        <div class="footer-section">
            <h2>Perguntas Frequentes:</h2>
              <p>Não aceitamos troca ou devolução</p>
            <p>Pagamento realizado pelo whatsapp</p>
        </div>
        <div class="footer-section">
          <img src="imagenstcc/manequim.png" width="180" height="140" 
          id="Logo">
          <div id="Fonte1"> Atrine Moda Feminina
          </div>
        </div>
        <div class="footer-section">
          <div id="Home1"> <a href="#topo"> <!--Entre as "" tem que colocar o id da div referente a chamada-->
            <font color="white"> <h2>Home</h2></font></a>
            <br>
         
     </div></a>
     <div id="Blog1"> <a href="#"> <font color="white"> <h2>Blog</h2> </font>
      <br>
        </a>
   </div></a>
   <div id="Sobre1"> <a href="SOBRENOS.HTML">
    <font color="white"> <h2>Sobre nós</h2> </font></a>
    <br>
</div></a>

        </div>
        <div class="footer-section">
          <div id="Duvidas1"> <a href="#">
            
        </div></a>
    
        <div id="Contato1"> 
          <h2>Contato</h2>
            </div>
           <a href="https://www.instagram.com/atrinnemodafeminina/?hl=pt"><img src="imagenstcc/insta_icon.png" width="67" height="65" 
                id="instagram">
    
                <a href="https://api.whatsapp.com/message/RKUYXZFHCGHTM1?autoload=1&app_absent=0"><img src="imagenstcc/whatsapp-logo-2022.svg" width="77" height="75" 
                    id="whats">
    </div>
          </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Atrinne Moda Feminina. Todos os direitos reservados.</p>
    </div>
</footer>
</div>
<!-- 
<button id="openModal">X</button>

<div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Bem vindo fulaninho do TCC</p>
        </div>
    </div> -->

<script src="js/header.js"></script>
    <script src="js/produtoespecifico.js"></script>
    <script src="js/tipos-maisvendidos.js"></script>
    <script src="js/tiposderoupa.js"></script>
    <script src="js/modallogin.js"></script>
    <script src="js/maisvendidos.js"></script>
    <script src="js/clientes-instagram.js"></script>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>


</html>