<?php

@include 'conexao.php';


if(isset($error)){

foreach($error as $error){

    echo '<span class="mensagemErro">'.$error.'</span>';
}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Login</title>
     <!-- importações css -->

     <link rel="stylesheet" href="css/menupaginas.css">
     <link rel="stylesheet" href="css/cadastro.css">
    
 
     <!-- fonte Bebas Neue -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Anybody:wght@200&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Anybody:wght@200;300&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Anybody:wght@200;300;400&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,200;0,300;0,400;1,500&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,200;0,300;0,400;1,500;1,800&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Anybody:wght@300;400&family=Bebas+Neue&display=swap" rel="stylesheet">
 <!-- menu sidebar -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8" ></script>
   <link rel="stylesheet" href="style.css">
   
                               <!-- link do site de icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    
    <header id="header">
     
        <nav>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
          </div>
          <div class="side-bar  ">
            <div class="close-btn">
              <i class="fas fa-times"></i>
            </div>
            <div class="menu">
              <!-- <div class="item"><a href="index.html"><i class="fas fa-desktop"></i></a></div> -->
              <div class="item">
                <a class="sub-btn">PARTE DE CIMA <i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                  <a href="#" class="sub-item">BLUSAS</a>
                  <a href="#" class="sub-item">TOPS</a>
                  <a href="#" class="sub-item">CASACOS</a>
                </div>
                <div class="item">
                <a class="sub-btn">PARTE DE BAIXO<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item"><p class="itemmenusub">CALÇA</p></a>
                    <a href="#" class="sub-item"><p class="itemmenusub">SAIA</p></a>
                    <a href="#" class="sub-item"><p class="itemmenusub">SHORT</p></a>
                  </div>
              </div>
              <div class="item">
                <a class="sub-btn">CONJUNTOS<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">CURTOS/MEDIOS</p></a>
                    <a href="#" class="sub-item">LONGOS</p></a>
                    <a href="#" class="sub-item">TERCEIRA PEÇA</p></a>
                  
              </div>
              <div class="item">
                <a class="sub-btn">VESTIDOS<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item"><p class="itemmenusub">CURTOS</p></a>
                    <a href="#" class="sub-item"><p class="itemmenusub">MEDIOS</p></a>
                    <a href="#" class="sub-item"><p class="itemmenusub">LONGO</p></a>
                 
              </div>
              
              
            </nav>
              <div class="nomedaloja">
            <a href="index.html"><h1> Atrinne Moda Feminina</h1></a>
        </div>
        <ul>
            <li>
                <a href="galeria.html"> 
               <span class="iconemenu"> <ion-icon name="shirt-outline"></ion-icon></span>
               <span class="titulomenu">Produtos</span>
                </a>
            </li>

            <li>
                <a href="login.html"> 
                <span class="iconemenu"> <ion-icon name="heart-outline"></ion-icon></span>
                <span class="titulomenu">Favoritos</span>
            </a>
            </li>

            <li>
                <a href="login.html"> 
                <span class="iconemenu"><ion-icon name="cart-outline"></ion-icon></span>
                <span class="titulomenu">Carrinho</span>
            </a>
            </li>

            <li >
                <a href="login.html"> 
               <span class="iconemenu"><ion-icon name="person-outline"></ion-icon></span>
                <span class="titulomenu">Perfil</span>
               </a>
            </li>
        </ul>
            
     </header><!--fim do header  -->

     <section class="cadastroum">
        <!-- FORMULÁRIOOOOOOOOOOOO -->
        <form method="post" action="">
        
            <!-- parte 1 de 2 -->
            <div class="texto">
            
        
            <!-- vamos criar seu acesso? -->
            <div class="acesso">
                <strong><p>VAMOS CRIAR SEU ACESSO?</p></strong>
            </div>
        
           <div class="mensagem">
            <?php
            
if (isset($_POST['submit'])){

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
  $senha = ( $_POST['senha']);
  $CSenha = ( $_POST['senhaconfirmar']);
  

  };



  $select = " SELECT * FROM cadastro WHERE cpf = '$cpf' && senha = '$senha' ";
  
  $result = mysqli_query($conn, $select);
  

            if (mysqli_num_rows($result) > 0) {

           $msguser =   $error[] =  "<br><center>Esse usuário já existe!</center><br>";
              echo "$msguser";
          }
          else{

 $resultcpf = " SELECT * FROM cadastro WHERE cpf = '$cpf' ";
 $resultcpf = mysqli_query($conn, $resultcpf);


if(mysqli_num_rows ($resultcpf) > 0) {

$cpfmensagem=   $error[] = "<br><center>Este CPF já está sendo usado!</center><br>";
    echo "$cpfmensagem";          
}else{
                  
              $resultemail = "SELECT * FROM cadastro WHERE email = '$email' ";
              $resultemail = mysqli_query($conn, $resultemail);
          
          
              if(mysqli_num_rows ($resultemail) > 0){
                $email=  $error[] = "<br><center>Este EMAIL já está sendo usado!</center><br>";
                echo "$email";
              }else{
          
                 $sucesso =  "DADOS INSERIDOS COM SUCESSO!!!";
                 echo "$sucesso";
                  $inserir = "INSERT INTO cadastro(nome, email, celular, cpf, senha, Csenha) VALUES ('$nome','$email','55$celular','$cpf', '$senha', '$CSenha')";
                  mysqli_query($conn, $inserir);

                  $inserirLogin = "INSERT INTO dados_login(email_id, senha) VALUES ('$email','$senha')";
                  mysqli_query($conn, $inserirLogin);

              }
          
          
          }
              
          
          
          
          }
            
            ?>
           </div>
            
                </div>  



        <div class="input">

      <!-- NOME COMPLETO -->
      <div class="nome">
  <input type="text" name="nome" id="nome" required placeholder="Qual o seu nome completo?">
       </div>

        <!-- EMAIL -->
<div class="email">
  <input type="email" name="email" id="email" required placeholder="E-mail" >
</div>

      <!-- CELULAR -->
<div class="celular">
  <input type="tel" name="celular" id="celular" required placeholder="Celular">
</div>

                <!-- CPF -->
        <div class="cpf">
            <input type="number" name="cpf" id="cpf" required placeholder="Digite o seu CPF "  maxlength="14">
        </div>
        
                  <!-- SENHA -->
<div class="senha">
    <input type="password" name="senha" id="senha" required placeholder="Crie uma nova senha" required onchange='confereSenha();'>
    <i class="bi bi-eye" id="senhaolho" onclick="mostrarsenha()"></i>
</div>


        <!-- CONFIRMAR SENHA -->
<div class="confirmarsenha">

    <input type="password" name="senhaconfirmar" id="senhaconfirmar" required placeholder="Confirme sua nova senha"  required onchange='confereSenha();'>
    <div class="olhosenha">
    <i class="bi bi-eye" id="senhaolho2" onclick="mostrarSenha2()"></i>
    </div>


</div>
        <!-- PRECISA COLOCAR LINK NO BOTÃO -->
                <!-- BOTÃO CONFIRMAR -->
                <br>
        
           <center><input type="submit" name="submit" value="CONFIRMAR" id="botao"></center>
        
    </div>
        <div class="espaco">
        
        </div>
        </form>
        </section>
                    <!-- FIM DO FORMULÁRIO -->
    
    



    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"> </script > 
        <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"> </script >
      
           <script src="js/menuindex.js"></script>
           <script src="js/cadastro.js"></script>


      

</body>
</html>