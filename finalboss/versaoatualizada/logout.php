<?php
// LOGOUT É UM LINK QUE ESTÁ INSERIDO EM UM BOTÃO 
// QUANDO SE CLICA NO BOTAO, ENCERRA-SE A SESSÃO DO USUÁRIO
include('conexao.php');
if(!isset($_SESSION)){
    session_start();
}
session_destroy();
// LINK DE REDIRECIONAMENTO QUANDO ENCERRAR A SESSÃO 
header("Location: login.php");
?>