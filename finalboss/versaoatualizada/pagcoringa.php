<?php 
include('protect.php');
include ('conexao.php');
if(isset($_POST['add_to_cart'])){
    $products_name = $_POST['product_name'];
    $products_price = $_POST['product_price'];
    $products_image = $_POST['product_image'];
    $product_quantity=1;
    
    // select cart data based on condition
    $select_cart = mysqli_query($conn, "select * from `cart` where  name='$products_name'");
    if(mysqli_num_rows($select_cart) > 0){
        $display_message[]="Produto já está no Carrinho";
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
    <link rel="stylesheet" href="css/headerpag.css">
    <link rel="stylesheet" href="css/pagcoringa.css">


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

    <title>Atrinne Moda Feminina</title> 
    <link rel="shortcut icon" href="imagenstcc/manequim">
  
  </head>
  <body>
<?php
include('header.php');
?>

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
                <div class="container-produtao">
             
                
                <form action="" method="post" >
                <a class="btnvoltar" href="indexcomlogin.php"><p>Voltar</p></a>
    <main class="item">
      <section class="img">
        <img src="imagenstcc/<?php echo $fetch_data['image']?>">

      </section>

      <div class="informacoes-produtos-container">
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
          
        <div class="price-btnbox">


          <!-- botão para adicionar no carrinho -->
          
          <button type="submit"  class="submit_btn cart_btn PRICE-BTN" value="Adicionar ao Carrinho" name="add_to_cart"><ion-icon class="carrinho-icon" name="cart-outline"></ion-icon></button>
          </form>
        </div>
        </div>
        </div>
        <?php
            }}
            ?>
      </section>
    </main>
    <script type="text/javascript" src="js/pagcoringa.js"></script>
    <script SRC="js/contador.js"></script>
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