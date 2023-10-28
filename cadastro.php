<?php

@include 'conexao.php';

if (isset($_POST['submit'])){

$cpf = mysqli_real_escape_string($conn, $_POST['cfp']);
$senha = md5( $_POST['senha']);
$CSenha = md5( $_POST['senhaconfirmar']);

$select = " SELECT * FROM cadastro_usuario WHERE cpf = '$cpf' && senha = '$senha' ";

$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {

    $error[] = "Esse uauário já existe!";

}
else{

    if($senha != $CSenha){

    $error[] = "Senha não correspondida!";
}
else{
    $inserir = "INSERT INTO cadastro_usuario(cpf, senha, Csenha) VALUES ('$cpf', '$senha', '$CSenha')";
    mysqli_query($conn, $inserir);
    header('localition: login.html');
        }
    }
};
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
        <form method="post">
        
            <!-- parte 1 de 2 -->
            <div class="texto">
            parte 1 de 2
        
            <!-- vamos criar seu acesso? -->
            <div class="acesso">
                <strong><p>VAMOS CRIAR SEU ACESSO?</p></strong>
            </div>
        
            <!-- bolinha cheia das etapas -->
        <div class="bolinhacheia">
                <img src="imagenstcc/bolinhacadastrocheia.png">
        
            <!-- bolinha vazia das etapas -->
                <div class="bolinhavazia">
                    <img src="imagenstcc/bolinhacadastrovazia.png">
                </div>
        
        </div>
            
                </div>  

<?php

if(isset($error)){

foreach($error as $error){

    echo '<span class="mensagemErro">'.$error.'</span>';
}
}

?>


        <div class="input">
                <!-- CPF -->
        <div class="cpf">
            <input type="number" name="cfp" id="cpf" required placeholder="Digite o seu CPF">
        </div>
        
                  <!-- SENHA -->
<div class="senha">
    <input type="password" name="senha" id="senha" required placeholder="Crie uma nova senha">
    <i class="bi bi-eye" id="senhaolho" onclick="mostrarsenha()"></i>
</div>


        <!-- CONFIRMAR SENHA -->
<div class="confirmarsenha">
    <input type="password" name="senhaconfirmar" id="senhaconfirmar" required placeholder="Confirme sua nova senha">
    <div class="olhosenha">
    <i class="bi bi-eye" id="senhaolho2" onclick="mostrarSenha2()"></i>
    </div>
</div>

</div>
        <!-- PRECISA COLOCAR LINK NO BOTÃO -->
                <!-- BOTÃO CONFIRMAR -->
                <br>
        
           <center> <a href="cadastro2.html"><input type="submit" name="submit" value="CONFIRMAR" id="botao">saas</a> </center>
        
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
