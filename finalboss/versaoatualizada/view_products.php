<!-- including  php logic - conectando ao banco -->
<?php 
include ('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleCarrinho">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- header -->
    <?php 
    include ('headerCarrinho.php');
    ?>
    <!-- container -->
    <div class="container">
        <section class="display_product">
            
                    <!-- php code -->
                    <?php 
$display_product= mysqli_query($conn, "select * from `products`");
$num=1;
if(mysqli_num_rows($display_product)>0){
    // log to fetch dqata
  echo"  <table>
                <thead>
                    <th>Id do Produto</th>
                    <th>Imagem do Produto</th>
                    <th>Nome do Produto</th>
                    <th>Preço do Produto</th>
                    <th>Ações</th>
                </thead>
                <tbody>";
   while( $row=mysqli_fetch_assoc($display_product)){

    ?>
    <!-- display table -->

    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><img src="produtos/<?php echo $row['image']?>" alt=<?php echo $row['name'] ?>></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td>
                        <!-- o nome depois do ? é um action para executar -->
                        <a href="delete.php?delete=<?php echo $row['id']; ?>"
                         class="delete_product_btn" onclick="return confirm('Você tem certeza que deseja excluir esse produto?');">
                         <i class="fas fa-trash"></i></a>
                        <a href="update.php?edit=<?php echo $row['id']; ?>"
                        class="update_product_btn">
                            <i class="fas fa-edit"></i></a>
                    </td>
    </tr>
<?php
}
  
}else{
    echo "<div class='empty_text'>Sem Produtos</div>";
}
                    ?>
                    
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>