<header class="header">
<div class="header_body">
    <a href="index.php" class="logo">Atrinne Moda Feminina</a>
    <nav class="navbar">
        <a href="carrinho.php">Adicionar Produtos</a>
        <a href="view_products.php">Ver Produtos</a>
        <a href="shop_products.php">Galeria</a>
</nav>
<!-- select query -->
<?php 
$select_product = mysqli_query($conn, "select * from `cart`") or die('falha');
$row_count = mysqli_num_rows($select_product);



?>
    <!-- shopping cart icon -->
    <!-- conta a quantidade de linhas que possui na tabela carrinho -->
    <a href="cart.php"class="cart"><i class="fa-solid fa-cart-shopping"></i><span><sup><?php echo $row_count ?></sup></span></a>
    <!-- menu -->
    <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
</div>
</header>