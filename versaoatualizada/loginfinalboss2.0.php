<?php
include('conexao.php');
if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $result = mysqli_query($conn, "SELECT * FROM dados_login WHERE email_id = '$email' OR senha = '$senha'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) >0){
        if($senha == $row["senha"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }

    }
else{
    
}
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="loginfinalboss2.0.php">
    
    EMAIL<input type="email" name="email" id="email"><br>
    SENHA<input type="password" name="senha" id="senha"><br>
    <CENTER><button type="submit" name="submit">ENVIAR</button></CENTER>

    
    </form>
</body>
</html>