<?php 
include ('conexao.php');
if(isset($_POST['add_to_cart'])){
    $products_name = $_POST['product_name'];
    $products_price = $_POST['product_price'];
    $products_image = $_POST['product_image'];
    $product_quantity=1;
    
    // select cart data based on condition
    $select_cart = mysqli_query($conn, "select * from `cart` where  name='$products_name'");
    if(mysqli_num_rows($select_cart) > 0){
        $display_message[]="Produto já etá no Carrinho";
    }else{
         // insert cart data in cart table 
    $insert_products=mysqli_query($conn, "insert into `cart` (name,price,image,quantity) values 
    ('$products_name','$products_price','$products_image','$product_quantity') ");
    $display_message[]="Produto adicionado no Carrinho";

    }

   
} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link rel="stylesheet" href="produtoespecifico.css" />
    <link rel="stylesheet" href="headerpag.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />

    <script defer src="script.js"></script>

    <title>Frontend Mentor | E-commerce product page</title>

    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  </head>
  <body>
    <header>
      <div class="container">
        <nav class="nav-bar">
            <div class="logo">
                <a href="INDEX.HTML"><p>ATRINNE MODA FEMININA</p></a>
            </div>
          <div class="botoes-header">
            <a href="GALERIA.html"><div class="login-button">
             <button><ion-icon name="shirt-outline"></ion-icon></button>
                <br>
                <span class="titulomenu">Produtos</span>
            </div></a>
            <div class="login-button">
                <button><a href="login.php"><ion-icon name="heart-outline"></ion-icon></a></button><br>
                <span class="titulomenu">Favoritos</span>
            </div>
  
            <div class="login-button">
                <button><a href="login.php"><ion-icon name="cart-outline"></ion-icon></a></button><br>
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
                <center><a href="GALERIA.html"><H3>PRODUTOS</H3></a></center>
            </div>
            <div class="login-button-mobile">
                <center><a href="login.php"><H3>FAVORITOS</H3></a></center>
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

    <!-- fim do header  -->
    <!-- seção do produto específico -->
      <?php
        if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($conn, "select * from `products` where id='$edit_id'");
            if(mysqli_num_rows($edit_query) > 0){
                $fetch_data=mysqli_fetch_assoc($edit_query);

                    // mostra o preço do produto selecionado
                    // $row = $fetch_data['price'];
                    // echo $row;
                
                ?>
    <main class="item">
      <section class="img">
        <img src="produtos/<?php echo $fetch_data['image']?>">

      </section>

      <section class="price">
        <!-- Nome do produto -->
        <h1 class="price-main__heading"><?php echo $fetch_data['name'] ?></h1>

        <!-- texto estático com descrição das roupas. -->
        <p class="price-txt">
         O melhor look para se usar no verão quente do RJO melhor look para se usar no verão quente do RJO melhor look para se usar no verão quente do RJO melhor look para se usar no verão quente do RJO melhor look para se usar no verão quente do RJ
        </p>
        <div class="price-box">
          <div class="price-box__main">

            <!-- preço do produto -->
            <span class="price-box__main-new">R$ <?php echo $fetch_data['price'] ?></span>
              <input type="hidden" name="product_name" value="<?php echo $fetch_data['name'] ?>">
              <input type="hidden" name="product_price"  value="<?php echo $fetch_data['price'] ?>">
              <input type="hidden" name="product_image" value="<?php echo $fetch_data['image']?>">
            <!-- tag de desconto - frufrufru -->
            <span class="price-box__main-discount"> 50%</span>
          </div>
          
          <div class="select-box">
    <div class="selection-option">
        <input type="text" placeholder="tamanho selecionado" id="soValue" readonly name="">
    </div>
    <div class="content">
        <!-- <div class="search">
        <input type="text" id="optionSearch" placeholder="pesquise" name="">
        </div> -->
    <ul class="options">
        <li>PP</li>
        <li>P</li>
        <li>M</li>
        <li>G</li>
        <li>GG</li>
    </ul>
    </div>
</div>
        <div class="price-btnbox">
          
            <!-- botão para aumentar quantidade de produtos -->
          <!-- <div class="price-btns"> -->
<!-- aumentar prdoutos -->

<div class="counter-container">
  <button id="counterBtn" class="counter-button">
    <span CLASS="CONTADOR"id="minus">- </span>
    <span CLASS="CONTADOR"id="count"> 0 </span>
    <span CLASS="CONTADOR"id="plus"> +</span>
  </button>
          </div>

          <!-- botão para adicionar no carrinho -->
          <button class="PRICE-BTN">
              <ion-icon name="cart-outline"><P> ADICIONAR </P></ion-icon>
        </div>

        <?php
            }}
            ?>
      </section>
    </main>
    <script type="text/javascript" src="js/script.js"></script>
    <script SRC="js/contador.js"></script>
   <!-- ionicon -->
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   
  </body>
</html>