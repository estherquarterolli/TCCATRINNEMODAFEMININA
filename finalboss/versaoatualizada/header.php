<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
<?php include('conexao.php'); 

?>
    <div class="container-header">
      <nav class="nav-bar">
          <div class="logo">
              <a href="indexcomlogin.php"><p>ATRINNE MODA FEMININA</p></a>
          </div>
        <div class="botoes-header">
          <a href="shop_products.php"><div class="login-button">
           <button><ion-icon name="shirt-outline"></ion-icon></button>
              <br>
              <span class="titulomenu">Produtos</span>
          </div></a>
          <div class="login-button">
              <button><a href="sobrenos.php"><ion-icon name="star-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Sobre nós</span>
          </div>

          <?php 
$select_product = mysqli_query($conn, "select * from `cart`") or die('falha');
$row_count = mysqli_num_rows($select_product);



?>
          
          <div class="login-button-estatico">
              <button>  
                <a href="carrinho.php"class="cart"><ion-icon name="cart-outline"></ion-icon><span><sup><?php echo $row_count ?></sup></span></a></button><br>
          </div>

          <div class="login-button-estatico" id="dropdownBtn">
            <button>
                <ion-icon name="person-outline"></ion-icon>
            </button>
            <div class="dropdown-content">
                <div class="nomeusuario">
                  <!-- tem que por a parte do php de vcs -->
                    <h2 class="nome-usuario"><?php echo $_SESSION['nome']; ?> </h2>
                </div>

                <div class="usuariofuncao">
                    <a href="info-usuario.php">Minha conta</a>
                    <ion-icon name="person-outline"></ion-icon>
                </div>

                <div class="usuariofuncao">
                    <a href="#">Meus pedidos</a>
                    <ion-icon name="checkbox-outline"></ion-icon>
                </div>
                
                <div class="usuariofuncao">
                  <a href="logout.php">Sair</a>
                  <ion-icon name="log-out-outline"></ion-icon>
              </div>
                
            </div>
            <!-- <span class="titulomenu">Perfil</span> -->
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
              <center><a href="sobrenos.php"><H3>SOBRE NÓS</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="carrinho.php"><H3>CARRINHO</H3></a></center>
          </div>

        
          <div class="login-button-mobile" id="profileDropdown">
            <center>
                <button onclick="toggleProfileDropdown()">
                    <h3>PERFIL</h3>
                </button>
                <div class="dropdown-content-mobile">
                  <div class="nomeusuario">
                    <!-- tem que por a parte do php de vcs -->



                      <h2 class="nome-usuario"><?php   echo $_SESSION['nome']; ?> </h2>
                  </div>
  
                  <div class="usuariofuncao">
                      <a href="info-usuario.php">Minha conta</a>
                      <ion-icon name="person-outline"></ion-icon>
                  </div>
  
                  <div class="usuariofuncao">
                      <a href="#">Meus pedidos</a>
                      <ion-icon name="checkbox-outline"></ion-icon>
                  </div>
                  
                  <div class="usuariofuncao">
                    <a href="logout.php">Sair</a>
                    <ion-icon name="log-out-outline"></ion-icon>
                </div>
                  
              </div>
                </div>
            </center>
        </div>


        

      </div>
    </div>
  </header>
</body>
</html>