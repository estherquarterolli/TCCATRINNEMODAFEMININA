<?php
// Inclui o arquivo de conexão com o banco de dados
include('conexao.php');

// Inclui um arquivo para garantir que apenas usuários autenticados acessem a página
include 'protect.php';

// Bloco de código responsável por atualizar a quantidade de um produto no carrinho
if(isset($_POST['update_product_quantity'])){
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quatity_id'];
    $update_quantity_query = mysqli_query($conn, "update `cart` set quantity='$update_value' where id='$update_id' ");
    if($update_quantity_query){
        // Redireciona de volta para a página do carrinho após a atualização
        header('location: carrinho.php');
    }
}

// Bloco de código para remover um item do carrinho
if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "delete from `cart` where id='$remove_id'");
    // Redireciona de volta para a página do carrinho após a remoção
    header('location: carrinho.php');
}

// Bloco de código para excluir todos os itens do carrinho
if(isset($_GET['delete_all'])){
    mysqli_query($conn, "delete from `cart`");
    // Redireciona de volta para a página do carrinho após a exclusão de todos os itens
    header('location: carrinho.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atrinne Moda Feminina</title> 
    <link rel="shortcut icon" href="imagenstcc/manequim">
    <!-- Inclusão de arquivos de estilo -->
    <link rel="stylesheet" href="css/styleCarrinho.css">
    <link rel="stylesheet" href="css/headerpag.css">

    <!-- Inclusão de uma fonte externa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Inclusão do cabeçalho da página -->
    <?php include('header.php'); ?>

    <!-- Conteúdo principal da página -->
    <div class="container">
        <section class="shopping_cart">
            <h1 class="heading">Meu Carrinho</h1>
            <table>
                <?php 
                // Consulta para obter os produtos no carrinho
                $select_cart_products = mysqli_query($conn, "select * from `cart`");
                $grand_total = 0;

                if(mysqli_num_rows($select_cart_products) > 0){
                    // Cabeçalho da tabela sendo exibido apenas uma vez
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

                    // Loop para exibir cada produto no carrinho
                    while($fetch_cart_products = mysqli_fetch_assoc($select_cart_products)){
                        ?>
                        <tr>
                            <!-- Exibição das informações do produto -->
                            <td><?php echo $fetch_cart_products['id'] ?></td>
                            <td><?php echo $fetch_cart_products['name'] ?></td>
                            <td>
                                <div class="carrinho-img">
                                    <img src="produtos/<?php echo $fetch_cart_products['image'] ?>" alt="FÉ">
                                </div>
                            </td>
                            <td>R$ <?php echo $fetch_cart_products['price'] ?></td>

                            <!-- Formulário para atualizar a quantidade do produto no carrinho -->
                            <td>
                                <form action="" method="post" >
                                    <input type="hidden" value="<?php echo $fetch_cart_products['id'] ?>" name="update_quatity_id" >
                                    <div class="quantity_box">
                                        <input type="number" min="1" value="<?php echo $fetch_cart_products['quantity'] ?>" name="update_quantity">
                                        <input type="submit" class="update_quantity" value="Atualizar" name="update_product_quantity" >
                                    </div>
                                </form>
                            </td>

                            <!-- Exibição do valor total para o produto -->
                            <td>R$ <?php echo $subtotal = ($fetch_cart_products['price'] * $fetch_cart_products['quantity']) ?></td>

                            <!-- Ação para remover o produto do carrinho -->
                            <td>
                                <a href="carrinho.php?remove=<?php echo $fetch_cart_products['id'] ?>" onclick="return confirm('Deseja retirar esse item do carrinho?')">
                                    <i class="fas fa-trash"></i>Remover
                                </a>
                            </td>
                        </tr>

                        <?php 
                        // Atualiza o valor total acumulado
                        $grand_total += ($fetch_cart_products['price'] * $fetch_cart_products['quantity']);

                        // Armazena IDs e quantidades em arrays para utilização posterior
                        $ids_prodtotal[] = $fetch_cart_products['id'];
                        $quantidades_prodtotal[] = $fetch_cart_products['quantity'];
                        $nomedoproduto[] = $fetch_cart_products['name'];
                        $precoproduto[] = $fetch_cart_products['price'];
                    }
                } else {
                    // Mensagem exibida caso o carrinho esteja vazio
                    echo "<div class='empty_text'>Carrinho Vazio</div>";
                }
                ?>
            </tbody>
        </table>

        <!-- Exibição do total e opções de continuar comprando ou finalizar a compra -->
        <?php
        if($grand_total > 0){
              // Criação da mensagem para o WhatsApp
              $whatsapp_text = "Olá, sou ". htmlspecialchars($_SESSION['nome']) ." e vim do site para fazer o pagamento dos produtos:.\n\n";
            // index é uma variável que acumula todos os dados de $ids_prodtotal
              foreach ($ids_prodtotal as $index => $id) {
            // para imprimir, basta colocar a variável criada do method post do form e adicionar a variavel global
                    $whatsapp_text .= "Nome: " . $nomedoproduto[$index] . "\n";
                    $whatsapp_text .= "Id: " . $id . "\n";
                    $whatsapp_text .= "Quantidade: " . $quantidades_prodtotal[$index] . "\n";
                    $whatsapp_text .= "Preço: " . $precoproduto[$index] . "\n\n";
                    }
            
              $whatsapp_text .= "Do valor total de: R$" . $grand_total . " reais.\nMeu endereço para calcular o valor do frete é: ...";

              // Criação do link para iniciar uma conversa no WhatsApp com a mensagem pré-preenchida
              $whatsapp_link = "https://wa.me/5521985201441?text=" . urlencode($whatsapp_text);

              // Exibição dos botões e do total no rodapé da tabela
              echo "<div class='table_bottom'> 
                  <a href='shop_products.php' class='bottom_btn' >Continuar Comprando</a> 
                  <h3 class='bottom_btn'>Total: R$<span>$grand_total</span></h3> 
                  <a href='" . $whatsapp_link . "' class='bottom_btn'>Finalizar Compra</a> 
                  <a href='carrinho.php?delete_all' class='delete_all_btn' onclick='return confirm('Deseja retirar TO esse item do carrinho?')' >
            <i class='fas fa-trash'></i>Excluir Todos
        </a>
              </div>";
          }
          ?>
        
        <!-- Área do botão para excluir todos os itens do carrinho -->
        

    </section>
</div>

<!-- Inclusão do script para ícones ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
