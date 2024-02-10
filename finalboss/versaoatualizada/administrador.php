<?php include('protectadmin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atrinne Moda Feminina</title> 
    <link rel="shortcut icon" href="imagenstcc/manequim">
    <link rel="stylesheet" href="css/styleCarrinho.css">
    <link rel="stylesheet" href="css/administrador.css">

</head>
<body>
<?php
include('headerAdmin.php');
?>
<div class="bv">
<h2>Bem vindo a Página de Administração, Atrinne Moda Feminina!</h2>
</div>
<?php
include ('conexao.php');
// mostra os dados do maior para o menor 
$sql = "SELECT *FROM cadastro ORDER BY idCadastro DESC";
$result = mysqli_query($conn, $sql);
?>
<div class="container-tabelausuarios">
<table class="table text-black">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Endereço</th>
      <th>Cpf</th>
      <th>Senha</th> 
    </tr>
  </thead>
<?php 
while($usuarios = mysqli_fetch_assoc($result)){

  echo "<tr>";
  // linha da tabela
  echo "<td>".$usuarios['IdCadastro']."</td>";
  echo "<td>".$usuarios['Nome']."</td>";
  echo "<td>".$usuarios['Email']."</td>";
  echo "<td>".$usuarios['Telefone']."</td>";
  echo "<td>".$usuarios['Endereco']."</td>";
  echo "<td>".$usuarios['Cpf']."</td>";
  echo "<td>".$usuarios['Senha']."</td>";
  echo "</tr>";
}

?>
</table>
</div>
  <!-- ionicon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>