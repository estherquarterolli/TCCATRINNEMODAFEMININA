<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .dados{
        text-align: center;
    }
    .logout{
        margin-top: 7%;
   
    }
    </style>
</head>
<body>
    
</body>
</html>
<div class="dados">
<?php
include('conexao.php');
if(!isset($_SESSION)){
    session_start();
  }

  echo "Id: ".$_SESSION['id'];
  echo "<br>";
  echo "Nome: ".$_SESSION['nome'];
  echo "<br>";
  echo "Email: ".$_SESSION['email'];
  echo "<br>";
  echo "Telefone: ".$_SESSION['telefone'];
  echo "<br>";
  echo "Cpf: ".$_SESSION['cpf'];
  echo "<br>";
  echo "Senha: ".$_SESSION['senha'];
  echo "<br>";
  echo "Endereco: ".$_SESSION['endereco'];

$end = $_SESSION['endereco'];
$id = $_SESSION['id'];
$tel = $_SESSION['telefone'];
$senha = $_SESSION['senha'];


?>
</div>
<form method="post">
<center>
    <br>
Endereço: <input type="text" name="endereco"><br>
<input type="submit" name="submitENDERECO" value="ALTERAR ENDEREÇO">
<br>
<br>

Telefone: <input type="text" name="telefone"><br>
<input type="submit" name="submitTELEFONE" value="ALTERAR TELEFONE">
<br>
<br>

Senha: <input type="password" name="senha" placeholder="aaa<?php  $_SESSION['senha']?>"><br>
<input type="submit" name="submitSENHA" value="ALTERAR SENHA">
<div class="logout">
    <br>
    <br>
    <input type="submit" name="submitTODOS" value="ALTERAR TODOS">

<button class="botao"><a href="logout.php">LOGOUT</a></button>
</div>
</center>

</form>

<?php






if(isset($_POST["submitENDERECO"])){
    $endereco = $_POST['endereco'];
    $sql = "UPDATE cadastro SET Endereco= '$endereco' WHERE IdCadastro='$id' ";
    $result = mysqli_query($conn, $sql);
 }


 if(isset($_POST["submitTELEFONE"])){
    $telefone = $_POST['telefone'];
    $sql = "UPDATE cadastro SET Telefone= '$telefone' WHERE IdCadastro='$id' ";
    $result = mysqli_query($conn, $sql);
 }

 if(isset($_POST["submitSENHA"])){
    $senha = $_POST['senha'];
    $sql = "UPDATE cadastro SET Senha= '$senha' WHERE IdCadastro='$id' ";
    $result = mysqli_query($conn, $sql);
 }

 if(isset($_POST["submitTODOS"])){
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $sql = "UPDATE cadastro SET Senha= '$senha', Telefone= '$telefone', Endereco= '$endereco' WHERE IdCadastro='$id' ";
    $result = mysqli_query($conn, $sql);
 }




?>