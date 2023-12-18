<?php
include'conexao.php';
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
           <a href="pagcoringa.php?edit=<?php echo $fetch_product['id']; ?>"  <button type="submit"  class="submit_btn cart_btn" value="Adicionar ao Carrinho" name="add_to_cart"><ion-icon class="carrinho-icon" name="cart-outline">></ion-icon></button></a>       
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
          


?>