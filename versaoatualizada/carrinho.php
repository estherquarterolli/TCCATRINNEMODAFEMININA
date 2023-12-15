<!-- PÁGINA PARA ADM COLOCAR NOVOS ARQUIVOS -->
<?php
include ("conexao.php");
if(isset($_POST['add_product'])){
    $product_name =$_POST['product_name'];
    $product_price =$_POST['product_price'];
    $product_image =$_FILES['product_image']['name'];
    $product_image_temp_name =$_FILES['product_image']['tmp_name'];
    $product_image_folder = 'produtos/'.$product_image;
    $product_type = $_POST['product_type'];
   

    $insert_query =mysqli_query($conn, "insert into `products` (name,price,image, type) values ('$product_name', '$product_price', '$product_image', '$product_type' )");

    if($insert_query){
        move_uploaded_file($product_image_temp_name,$product_image_folder);
        $display_message = "Produto Inserido com sucesso!";
    }else{
        $display_message = "Erro ao Inserir o Produto";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="css/styleCarrinho.css">

<!-- fonte -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php 
include ('headerCarrinho.php');
?>
<!-- form section -->
<div class="container">
    <!-- mensagem de erro ou sucesso -->
    <?php 
    if(isset($display_message)){
        echo "<div class='display_message'>
        <span>$display_message</span>
        <i class='fas -times' onclick='this.parentElement.style.display=`none`';></i>
    </div>";
    }
    
    ?>
    
    <section>
        <h3 class="heading">Adicionar Produto</h3>
        <!-- FORMULÁRIO -->
        <form action="" class="add_product" method="post" enctype="multipart/form-data">
        <input type="text" name="product_name" placeholder="Nome do Produto" class="input_fields" required>
        <input type="number" name="product_price" min="0" placeholder="Preço do Produto" class="input_fields" required>
        <input type="text" name="product_type"  placeholder="Categoria do Produto" class="input_fields" required>
        <input type="file" name="product_image" class="input_fields" required accept="image/png, image/jpg, image/jpeg">
        <input type="submit" name="add_product" class="subimt_btn" value="Adicionar Produto"> 
        </form>
    </section>
</div>
<!-- js file -->
<script src="js/scriptCarrinho.js"></script>
</body>
</html>