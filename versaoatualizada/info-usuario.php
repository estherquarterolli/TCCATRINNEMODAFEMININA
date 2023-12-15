<?php
include ('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/headerpag.css">

    <link rel="stylesheet" href="css/info-usuario.css">
    <!-- <link rel="stylesheet" href="css/todos.css"> -->



    <title>Atrinne Moda Feminina</title>

    <!-- ionicon -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  

</head>

<body>

<?php include('header.php') 
 ?>

<!-- fim header -->
  

  <section class="info-usuarios">


<div class="container-informacoes">
    <a class="btnvoltar" href="indexcomlogin.php"><p>Voltar</p></a>
   <CENTER> <h2 CLASS="TITULO">Meu Perfil na Atrinne</h2></CENTER>

    <!-- Informações Pessoais -->
    <h3>Informações Pessoais</h3>
    <!-- <center><button class="alterardados" id="alterarDados">Alterar Dados</button></center> -->
    <div class="circulo">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" placeholder="" value="<?php  $nome = $_SESSION['nome'];  echo $nome;?>" disabled>
<br>
        <label for="sobrenome">Email:</label>
        <input type="text" id="sobrenome" value="<?php  $email = $_SESSION['email'];  echo $email;?>" disabled>
        <br>
        <div class="half-width">
            <label for="email">Telefone:</label>
            <input type="text" id="email" value="<?php  $telefone = $_SESSION['telefone'];  echo $telefone;?>" disabled>
        </div>
   
        <div class="half-width">
            <label for="telefone">Cpf:</label>
            <input type="text" id="telefone" value="<?php  $cpf = $_SESSION['cpf'];  echo $cpf;?>" disabled>
        </div>
        <br>
        <BR>
            
    </div>

    <h3>Catálogo de Endereço</h3>
    <div class="botoes-editar">
    <button onclick="window.location.href='editardados-usuario.php'" class="alterardados" id="editardados">Editar Dados</button>
      <!-- adicionar algum if para endereço=0 ou algo assim, aparecer a mensagem "Nenhum endereço cadastrado" -->
    </div>
</div>

<!-- Informações de endereço(Localização) -->




<!-- Pagamento? -->


  </section>

  
 <!-- <script src="js/header.js"></script> -->
    <script src="js/interacaocomamidia.js"></script>
    <script src="js/header.js"></script>
    

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>


</html>