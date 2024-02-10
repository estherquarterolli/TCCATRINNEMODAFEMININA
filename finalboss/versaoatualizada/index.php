<?php
include ('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/carrosselprincipal.css">
    <link rel="stylesheet" href="css/tipos-maisvendidos.css">
    <link rel="stylesheet" href="css/bannerpreorder.css">
    <link rel="stylesheet" href="css/interacaocomamidia.css">
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/mapa.css">
    <link rel="stylesheet" href="css/modallogin.css">
    <link rel="stylesheet" href="css/tiposderoupa.css">
    <link rel="stylesheet" href="css/quadradosinformativos.css">
    <link rel="stylesheet" href="css/maisvendidos.css">
    <link rel="stylesheet" href="css/clientes-instagram.css">
    <link rel="stylesheet" href="css/lightslider.css">
    <script type="text/javascript" src="js/Jquery.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>

    <title>Atrinne Moda Feminina</title> 
    <link rel="shortcut icon" href="imagenstcc/manequim">
    <!-- ionicon -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  

</head>

<body>
    
<!-- <div class="container-fluid"> -->
  <header>
    <div class="container">
      <nav class="nav-bar">
          <div class="logo">
              <a href="INDEX.php"><p>ATRINNE MODA FEMININA</p></a>
          </div>
        <div class="botoes-header">
          <a href="shop_products.php"><div class="login-button">
           <button><ion-icon name="shirt-outline"></ion-icon></button>
              <br>
              <span class="titulomenu">Produtos</span>
          </div></a>
          <div class="login-button">
            <button><a href="sobrenos.php"><ion-icon name="navigate-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Sobre nós</span>
          </div>

          <div class="login-button">
            <button><a href="sobrenos.php"><ion-icon name="cart-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Carrinho</span>
          </div>

          <div class="login-button">
              <button><a href="login.php"><ion-icon name="person-outline"></ion-icon></a></button><br>
               <span class="titulomenu">Perfil</span>
          </div>
      </div>

          <div class="mobile-menu-icon">
              <button onclick="menuShow()"><ion-icon class="icon" name="menu-outline"></ion-icon></button>
          </div>
      </nav>
      <div class="mobile-menu">
          <div class="login-button-mobile">
              <center><a href="shop_products.php"><H3>PRODUTOS</H3></a></center>
          </div>
          <div class="login-button-mobile">
              <center><a href="sobrenos.php"><H3>Sobre nós</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="login.php"><H3>CARRINHO</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="login.php"><H3>PERFIL</H3></a></center>
          </div>
      </div>
    </div>
  </header>
    <!-- Carrossel principal-->
    <section class="sliderprincipal">
<div id="demo" class="carousel slide" data-bs-ride="carouselp" >

    <!--  INDICADORES -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- OS SLIDES DO CARROSSEL -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenstcc/sliderp1.png" alt="ATRINNE" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="imagenstcc/sliderp2.png" alt="ATRINNE" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="imagenstcc/sliderp3.png"  alt="ATRINNE" class="d-block" style="width:100%">
      </div>
    </div>
    
    <!-- CONTROLES -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
    </section>
    <!-- tipos de roupa -->
    <div class="product">
      <div class="product-containerzao">
      <center><h2 class="product-category">ENCONTRE O QUE VOCÊ PROCURA... </h2></center>
      <!-- <button class="pre-btn"><ion-icon CLASS="ARROW"  name="arrow-forward-circle-outline"></ion-icon></button>
      <button class="nxt-btn"><ion-icon CLASS="ARROW" name="arrow-forward-circle-outline"></ion-icon></button> -->
      <div class="product-container" id="slider-infinito">
      <div class="product-card">
        
             
      <div class="product-image-type">
            <A href="filtrar.php?busca=blusa" STYLE="text-decoration: NONE;COLOR:BLACK;">
      
              <div class="img-tipos">
                <img src="imagenstcc/tproupablusa.png" class="product-thumb" value="blusa" alt="">
                <!-- <div class="overlay">
                <button href="#" class="info-btn">Saiba mais</button>
              </div> -->

            </div>

              </div>
              <div class="product-info">
                
                  <CENTER><h2 class="product-brand">Blusa</h2></CENTER>
                  
              </div>
            </A>
</div><!--fim produto -->


<div class="product-card">
  <div class="product-image-type">
<A href="filtrar.php?busca=short" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupashort.png" class="product-thumb" alt="">
      
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">SHORT</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->

<div class="product-card">
  <div class="product-image-type">
<A href="filtrar.php?busca=conjunto" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupaconjunto.png" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">CONJUNTO</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->

<div class="product-card">
  <div class="product-image-type">
<A href="filtrar.php?busca=vestido" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupavestido.png" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">VESTIDO</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->

<div class="product-card">
  <div class="product-image-type">
<A href="filtrar.php?busca=macacão" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupamacaquinho.png" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">MACACÃo</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->

<div class="product-card">
  <div class="product-image-type">
<A href="filtrar.php?busca=calça" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupacalca.png" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">CALÇA</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->




          </div>
            </div>
    </div>
            </div>
    </section>

   <!-- BANNER MARKETING -->

   <div class="bannerpreorder" style="display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;">
    <img src="imagenstcc/bannerpreorder.png" class="img-bannerinformativo">
    
  </div>

  <!-- FIM DO BANNER -->
  <br><br>
<section class="informativos-banner">
  <!-- QUADRADOS INFORMATIVOS -->

  <div class="container-informativos">

    <div class="informativos">

      <div class="img-bannerinformativo">
      <img src="imagenstcc/ENTREGA.png">
      <div class="overlay">
        <p> Frete Gratis</p>
      </div>
    </div>
    
    </div>
    
    <div class="informativos">

      <div class="img-bannerinformativo">
      <img src="imagenstcc/CUPONS.png">
      <div class="overlay">
        <p> Ativo: clientenovo15</p>
      </div>
    </div>
    </div>
    <div class="informativos">

      <div class="img-bannerinformativo">
      <img src="imagenstcc/TROCAEDEV.png">
      <div class="overlay">
        <p><a href="https://www.instagram.com/atrinnemodafeminina/">Mande uma dm para nosso instagram</a></p>
      </div>
    </div>
    </div>
   <!-- FIM DOS INFORMATIVOS -->
  </section>
  <!-- PRODUTOS EM DESTAQUE -->
<section class="maisvendidos">
 <center> <h2 class="product-category">Destaques da loja</h2></center>
  <ul id="autoWidth" class="cs-hidden">
    <li class="item">
      <div class="box">
        <div class="slide-img">
          <img src="imagenstcc/Bermuda meia coxa. R$ 119,00_.jpg" alt="" />
          <div class="overlay">
            <a href="#" class="buy-btn">Compre agora</a>
          </div>
        </div>
        <div class="detail-box">
          <div class="type">
            <a href="#">Bermuda meia coxa
              <a href="#" class="price">R$119,00</a>
            </a>
            <!-- <span>Perfeita para usar no verão</span> -->
          </div>
  
          <br>
          <ion-icon class="carrinho-icon" name="cart-outline"></ion-icon>
        
        </div>
      </div>
    </li>

    <li class="item">
      <div class="box">
        <div class="slide-img">
          <img src="imagenstcc/Blusa babado. R$ 49,90_.jpg" alt="" />
          <div class="overlay">
            <a href="#" class="buy-btn">Compre agora</a>
          </div>
        </div>
        <div class="detail-box">
          <div class="type">
            <a href="#">Blusa Babado
              <a href="#" class="price">R$49,90</a>
            </a>
            <!-- <span>Perfeita para usar no verão</span> -->
          </div>
  
          <br>
          <ion-icon class="carrinho-icon" name="cart-outline"></ion-icon>
        
        </div>
      </div>
    </li>


    <li class="item">
      <div class="box">
        <div class="slide-img">
          <img src="imagenstcc/Body Any. R$ 59,90_.jpg" alt="" />
          <div class="overlay">
            <a href="#" class="buy-btn">Compre agora</a>
          </div>
        </div>
        <div class="detail-box">
          <div class="type">
            <a href="#">Body Any
              <a href="#" class="price">R$59,90</a>
            </a>
            <!-- <span>Perfeita para usar no verão</span> -->
          </div>
  
          <br>
          <ion-icon class="carrinho-icon" name="cart-outline"></ion-icon>
        
        </div>
      </div>
    </li>

    
    <li class="item">
      <div class="box">
        <div class="slide-img">
          <img src="imagenstcc/Calça Crystal. R$ 179,00_.jpg" alt="" />
          <div class="overlay">
            <a href="#" class="buy-btn">Compre agora</a>
          </div>
        </div>
        <div class="detail-box">
          <div class="type">
            <a href="#">Calça Crystal 
              <a href="#" class="price">R$179,00</a>
            </a>
            <!-- <span>Perfeita para usar no verão</span> -->
          </div>
  
          <br>
          <ion-icon class="carrinho-icon" name="cart-outline"></ion-icon>
        
        </div>
      </div>
    </li>

    <li class="item">
      <div class="box">
        <div class="slide-img">
          <img src="imagenstcc/Calça mom. R$ 139,90_.jpg" alt="" />
          <div class="overlay">
            <a href="#" class="buy-btn">Compre agora</a>
          </div>
        </div>
        <div class="detail-box">
          <div class="type">
            <a href="#">Bermuda mom
              <a href="#" class="price">R$139,90</a>
            </a>
            <!-- <span>Perfeita para usar no verão</span> -->
          </div>
  
          <br>
          <ion-icon class="carrinho-icon" name="cart-outline"></ion-icon>
        
        </div>
      </div>
    </li>
  </ul>
</section>



<!-- INTERAÇÃO COM A MÍDIA -->
<section class="interacao"> 
  <section class="interacaoecomamidia">
      <div class="videointeracao">
          <video width="100%" controls autoplay>
              <source src="imagenstcc/videorells.mp4" type="video/mp4">
          </video>
      </div>
  
      <div class="carousel-containerp">
          <div class="carouselp">
              <div class="carousel-slidep">
                  <img src="imagenstcc/sliderp1.png" alt="Imagem 1">
              </div>
              <div class="carousel-slide">
                  <img src="imagenstcc/sliderp2.png" alt="Imagem 1">
              </div>
              <div class="carousel-slide">
                  <img src="imagenstcc/sliderp3.png" alt="Imagem 1">
              </div>
          </div>
          <h1 class="looks"> Use #LOOKDAATRINNE no instagram e apareça aqui</h1>
      </div>
  </section>
  </section>
 
  <!-- instagram compras -->

      <section class="instagram-clientes">
     
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
          <div id="Fonte1"> Atrinne Moda Feminina
          </div>
        </div>
        <div class="footer-section">
          <div id="Home1"> <a href="#topo"> <!--Entre as "" tem que colocar o id da div referente a chamada-->
            <font color="white"> <h2>Home</h2></font></a>
            <br>
         
     </div></a>
     <div id="Blog1"> <a href="shop_products.php"> <font color="white"> <h2>GALERIA</h2> </font>
      <br>
        </a>
   </div></a>
   <div id="Sobre1"> <a href="sobrenos.php">
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
           <a href="https://www.instagram.com/atrinnemodafeminina/?hl=pt"><p> <ion-icon class="redesocial" name="logo-instagram" style="width: 60px; height: 60px;" ></ion-icon> </p>
               
    
                <a href="https://api.whatsapp.com/message/RKUYXZFHCGHTM1?autoload=1&app_absent=0"><p><ion-icon class="redesocial"  name="logo-whatsapp"  style="width: 60px; height: 60px;"></ion-icon> </p>
                 
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
    <script src="js/interacaocomamidia.js"></script>
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