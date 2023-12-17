<?php 
include'conexao.php';
include 'protect.php';
if(isset($_POST['add_to_cart'])){
    $products_name = $_POST['product_name'];
    $products_price = $_POST['product_price'];
    $products_image = $_POST['product_image'];
    $product_type = $_POST['product_type'];
    $product_quantity=1;
    
    // select cart data based on condition
    $select_cart = mysqli_query($conn, "select * from `cart` where  name='$products_name'");
    if(mysqli_num_rows($select_cart) > 0){
        $display_message[]="Produto já etá no Carrinho";
    }else{
         // insert cart data in cart table 
    $insert_products=mysqli_query($conn, "insert into `cart` (name,price,image,type,quantity) values 
    ('$products_name','$products_price','$products_image','$product_type','$product_quantity') ");
    $display_message[]="Produto adicionado no Carrinho";
    }  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="css/styleCarrinho.css">
    <link rel="stylesheet" href="css/headerpag.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php 
include('header.php');
?>
<div class="container">
  
    <?php
if(isset($display_message)){
  foreach($display_message as $display_message){
    echo "<div class='display_message'>
    <span>$display_message</span>
    <i class='fas fa-times' onClick='this.parentElement.style.display=`none`';></i>
    </div>";
  }
}

?>
            <section class="products">
            

            <!-- FILTROS -->
            
<div class="container_filtro">
  <form class="btnpesquisa"action="">
<button type="submit" name="categoria" value="CALÇA" >Filtrar Pesquisa</button>
</form>
</div>

  <!-- CONTAINER ONDE FICAM TODOS OS PRODUTOS -->
            <div class="product_container">

           


                <?php 
                if(!isset($_GET['categoria'])){
                  // $select_products = mysqli_query($conn, "select * from `products` ");
       
                // buscando dados da tabela dos produtos
                $select_products = mysqli_query($conn, "select * from `products` ");
               if(mysqli_num_rows($select_products) > 0){

                  while( $fetch_product = mysqli_fetch_assoc($select_products)){
                   // echo $fetch_product['name'];        
                   // filtro
                 ?> 

                

<form method="post" action="">
                
<li class="item">
         <div class="box">
           <div class="slide-img">
             <img src="produtos/<?php echo $fetch_product['image']?>" alt="">
             <div class="overlay">
               <a href="produtoespecifico.php" class="buy-btn">Compre agora</a>
             </div>
           </div>
           <div class="detail-box">
             <div class="type">
             <a href="produtoespecifico.php"><?php echo $fetch_product['name'] ?></a>
                    <div class="price"> <?php echo "R$ ".$fetch_product['price'] ?></div>
               </a>
               <!-- <span>Perfeita para usar no verão</span> -->
             </div>
             <br>
             <!-- ICONE CARRINHO -->
             <button type="submit"  class="submit_btn cart_btn" value="Adicionar ao Carrinho" name="add_to_cart"><ion-icon class="carrinho-icon" name="cart-outline"></ion-icon></button>           
           </div>
           <!-- CAMPOS OCULTOS QUE ESTÃO ARMAZENANDO OS DADOS PARA INSERIR NA TABELA CARRINHO PEGANDO DADOS DA TABELA PRODUTOS -->
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name'] ?>">
                    <input type="hidden" name="product_price"  value="<?php echo $fetch_product['price'] ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']?>">
                    <input type="hidden" name="product_type" value="<?php echo $fetch_product['type']?>">
                  
         </div>
       </li>
</form>

<?php
          
          // fim dos ifs e elses e while
                  }
                
           }
          }
                else{
                    // echo "<div class='empty_text'>Sem Produtos</div>";
                    header('location: filtrar.php');
                }
                ?>
                <!-- FORMULÁRIO -->
                
            </div>
        </section>
    </div>

    <!-- ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>