<?php
include('conexao.php');
$_SESSION= [];
session_unset();
session_destroy();
header("Location: loginfinalboss2.0.php");
?>