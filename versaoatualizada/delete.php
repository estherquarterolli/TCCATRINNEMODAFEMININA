<!-- logica deletar -->

<?php 
include ('conexao.php');
if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    $delete_query=mysqli_query($conn, "delete from `products` where id='$delete_id'");
    if($delete_query){
        echo "DELETADO COM SUCESSO!";
        header('location: view_products.php');
    }else{
        echo "Produto NÕA foi deletado!";
        header('location: view_products.php');
    }
}
?>