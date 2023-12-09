<?php
if(!isset($_SESSION)){
  session_start();
}

//se não existir uma sessão, acontece isso
if(!isset($_SESSION['id'])){
    die("Você precisa fazer o login para entrar nessa página.<p><a href=\"login.php\">LOGIN</a></p>");
}

?>