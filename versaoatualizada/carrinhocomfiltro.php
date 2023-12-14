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
  <style>

  </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="css/styleCarrinho">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php 
include('headerCarrinho.php');
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
            <!-- CONTAINER ONDE FICAM TODOS OS PRODUTOS -->

            <!-- FILTROS -->
<div class="container_filtro">
<?php 
// se n tiver nada digitado, n vai aparecer nada 
if(!isset($_GET['busca'])){
    echo " ";
}else{
$pesquisa = $conn->real_escape_string($_GET['busca']);
// pesquisando na tabela produtos e vendo se o que foi escrito se parece com oque tem no banco
// a porcentagem significa que vai buscar qualquer coisa relacionada com o nome
$sql_code = "SELECT * FROM products WHERE name LIKE '%$pesquisa%' OR type LIKE '%$pesquisa%'";
$sql_query = $conn->query($sql_code);

if($sql_query->num_rows == 0){
    echo "nenhum resultado encontrado...";
}else{

while($dados = $sql_query->fetch_assoc()){

?>

<table>
    <tr>
        <td><?php echo $dados['name'] ?></td>
        <td><?php echo $dados['price'] ?></td>
        <td><img src="protudos/<?php echo $dados['image'] ?>" alt=""></td>
        <td><?php echo $dados['type'] ?></td>
    </tr>
</table>

<?php
}


}



}


?>


<form action="">
    <input type="text" placeholder="Digite a Roupa" value="<?php if(isset($_GET['busca'])) echo $_GET['busca'] ?>" name="busca">
    <button type="submit">PESQUISAR</button>
</form>
</div>

                        <!-- FIM DO FILTRO -->


            <div class="product_container">
                <?php 
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
             <!-- ÍCONE DO CARRINHO -->
             <ion-icon class="carrinho-icon" name="cart-outline"></ion-icon>           
           </div>
           <!-- CAMPOS OCULTOS QUE ESTÃO ARMAZENANDO OS DADOS PARA INSERIR NA TABELA CARRINHO PEGANDO DADOS DA TABELA PRODUTOS -->
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name'] ?>">
                    <input type="hidden" name="product_price"  value="<?php echo $fetch_product['price'] ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']?>">
                    <input type="hidden" name="product_type" value="<?php echo $fetch_product['type']?>">
                    <!-- precisa aumentar o tamanho do botão -->
                    <input type="submit"  class="submit_btn cart_btn" value="Adicionar ao Carrinho" name="add_to_cart" >
         </div>
       </li>
</form>

<?php
                   
                  }
                
           }
      
                else{
                    echo "<div class='empty_text'>Sem Produtos</div>";
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