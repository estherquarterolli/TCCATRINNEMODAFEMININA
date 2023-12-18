
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/protect.css">
</head>
<body>
  


<div class="mensagem-fazerlogin-container">
<div class="mensagem-fazerlogin">
<?php
if(!isset($_SESSION)){
  session_start();
}

//se não existir uma sessão, acontece isso
if(!isset($_SESSION['id'])){
    die("Você precisa fazer o login para entrar nessa página.<p><a href=\"login.php\">LOGIN</a></p>");
}

?>
</div>
</div>

</body>
</html>