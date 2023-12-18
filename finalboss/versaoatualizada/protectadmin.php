<?php if(!isset($_SESSION)){
    session_start();
  }
  ?>
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
$emailmaster = $_SESSION['email'];

if($emailmaster != 'atrinnemodafeminina@gmail.com'){
    die("Você precisa fazer o login de ADMINISTRADOR para entrar nessa página.<p><a href=\"login.php\">LOGIN</a></p>");
}

?>
</div>
</div>

</body>
</html>