<?php
include ('protect.php');
include ('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/headerpag.css">
    <link rel="stylesheet" href="css/editardados-usuario.css">
    <link rel="stylesheet" href="css/todos.css">


    <title>Atrinne Moda Feminina</title>

    <!-- ionicon -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  

</head>

<body>
    
  
    <?php 
    include('header.php') 
     ?>
  
     <!-- final do header -->

  <section class="info-usuarios">


<div class="container-informacoes">
    <a class="btnvoltar" href="info-usuario.php"><p>Voltar</p></a>
   <CENTER> <h2 CLASS="TITULO">Inserir Endereço</h2></CENTER>

   <br>
    <!-- Informações Pessoais -->
    <!-- <h3>Inserir Endereço</h3> -->
    <!-- <center><button class="alterardados" id="alterarDados">Alterar Dados</button></center> -->
   
<form method="post">
    <div class="circulo">
        <label for="nome">Rua:</label>
        <input type="text" id="rua" name="rua" placeholder="" value="<?php  $rua = $_SESSION['rua'];  echo $rua;?>">
        <br>
        <label for="sobrenome">Número: </label>
        <input type="text" id="numero" value="<?php  $numero = $_SESSION['numero'];  echo $numero;?>">
        <br>
        <div class="half-width">
            <label for="email">CEP:</label>
            <input type="text" id="cep" name="cep" value="<?php  $cep = $_SESSION['cep'];  echo $cep;?>" >
        </div>

            <div class="botoes-editar">
                <center><button type="submit" class="salvardados" id="adicionarendereco" name="Salvar" >Adicionar</button></center>
            </div>

<?php
if(isset($_POST["Salvar"])){
    $rua = $_POST['nome'];
    $numero = $_POST['telefone'];
    $cpf = $_SESSION['id'];
    $sqlendereco = "UPDATE endereco SET Rua= '$rua', Número = '$numero', CEP = '$cep' WHERE IdCadastro='$id' ";
    $result = mysqli_query($conn, $sqlendereco);
    
 }
?>
    </div>
    
    <!-- Alterar senha -->
    <div class="half-width">
        <label for="senha">Alterar Senha:</label>
        <input type="password" id="senha-usuario" name="senha" value="value="<?php  $senha = $_SESSION['senha'];  echo $senha;?>"" >
    </div>
    <br><br>
    <div class="botoes-editar">
    <button class="salvardados" id="alterarSENHA" name="alterarSENHA" >Alterar Senha</button>
    </div>
    </form>
    <?php
    if(isset($_POST["alterarSENHA"])){
        $senha = $_POST['senha'];
        $id = $_SESSION['id'];
        $sql ="UPDATE cadastro SET Senha= '$senha' WHERE IdCadastro='$id' ";
        $result = mysqli_query($conn, $sql);
     }
    ?>
<br><br>
   
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