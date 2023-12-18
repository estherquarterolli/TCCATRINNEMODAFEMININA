<?php include('conexao.php'); 
include 'protect.php';
// update query
if(isset($_POST['update_product_quantity'])){
$update_value = $_POST['update_quantity'];
$update_id = $_POST['update_quatity_id'];
$update_quantity_query = mysqli_query($conn, "update `cart` set quantity='$update_value' where id='$update_id' ");
if($update_quantity_query){
    header('location: carrinho.php');
}
}

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "delete from `cart` where id='$remove_id'");
    header('location: carrinho.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "delete from `cart`");
    header('location: carrinho.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="css/styleCarrinho.css">
    <link rel="stylesheet" href="css/headerpag.css">

<!-- fonte -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include('header.php'); ?>
<div class="container">
    <section class="shopping_cart">
        <h1 class="heading">Meu Carrinho</h1>
        <table>
            <?php 
            $select_cart_products = mysqli_query($conn, "select * from `cart`");
            $grand_total =0;
            if(mysqli_num_rows($select_cart_products) > 0){
                // Cabeçalho sendo exibido apenas uma vez
                echo "<thead>
                <th>Id</th>
                <th>Nome do Produto</th>
                <th>Imagem do Produto</th>
                <th>Preço do Produto</th>
                <th>Quantidade do Produto</th>
                <th>Valor Total</th>
                <th>Ação</th>
            </thead>
            <tbody>";
            while($fetch_cart_products = mysqli_fetch_assoc($select_cart_products)){
                ?>

<tr>
                    <td><?php echo $fetch_cart_products['id'] ?></td>
                    <td><?php echo $fetch_cart_products['name'] ?></td>
                    <td>
                        
                    <div class="carrinho-img">
                        <img src="produtos/<?php echo $fetch_cart_products['image'] ?>" alt="FÉ">
                    </div>
                    </td>
                    <!-- PREÇO -->
                    <td>R$ <?php echo $fetch_cart_products['price'] ?></td>
                    <td>
                        <form action="" method="post" >
                            <!-- ID -->
                            <input type="hidden" value="<?php echo $fetch_cart_products['id'] ?>" 
                            name="update_quatity_id" >
                        <div class="quantity_box">
                            <!-- QUANTIDADE -->
                            <input type="number" min="1" value="<?php echo $fetch_cart_products['quantity'] ?>" 
                            name="update_quantity">
                            <input type="submit" class="update_quantity" value="Atualizar" name="update_product_quantity" >
                        </div>
                        </form>
                    </td>
                    <td>R$ <?php echo  $subtotal =($fetch_cart_products['price']*$fetch_cart_products['quantity'])?></td>
                    <td>
                         <a href="carrinho.php?remove=<?php echo $fetch_cart_products['id'] ?>" onclick="return confirm('Deseja retirar esse item do carrinho?')">
                            <i class="fas fa-trash"></i>Remover
                        </a>
                    </td>
                </tr>


<?php 
$grand_total =$grand_total+($fetch_cart_products['price']*$fetch_cart_products['quantity']);
            }
            }else{
                echo "<div class='empty_text'>Carrinho Vazio</div>";
            
            }
            ?>
            
                
            </tbody>
        </table>
<!-- excluir todos -->
<?php
 if($grand_total>0){
     echo " <div class='table_bottom'>
     <a href='shop_products.php' class='bottom_btn' >Continuar Comprando</a>
     <!-- total -->
     <h3 class='bottom_btn'>Total: R$<span> $grand_total</span></h3>
     <!-- FINALIZAR COMPRA -->
     <a href='checkout.php' class='bottom_btn' >Finalizar Compra </a>
 </div>";
?>
    <!-- área do botão -->
    <a href="cart.php?delete_all" class="delete_all_btn" onclick="return confirm('Deseja retirar TO esse item do carrinho?')" >
        <i class="fas fa-trash"></i>Excluir Todos</a>
    </a>
    <?php
 }
 else{
    echo "";
 }
 ?>
    </section>
</div>

<!-- ionicon -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>