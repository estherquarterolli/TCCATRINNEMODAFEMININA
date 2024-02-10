                      <!-- CADASTRO -->
                      <?php
if(!empty($_SESSION['id'])){
  header('location: index.php');
}

include ('conexao.php');
if(isset($_POST['submitCADASTRO'])){
  $nome = mysqli_real_escape_string($conn, $_POST['nome_cadastro']);
  $email = mysqli_real_escape_string($conn, $_POST['email_cadastro']);
  $telefone = $_POST['telefone_cadastro'];
  $cpf = mysqli_real_escape_string($conn, $_POST['cpf_cadastro']);
  $senha = $_POST['senha_cadastro'];
  $ConfirmarSenha = $_POST['confirmarsenha_cadastro'];

  $select = " SELECT * FROM cadastro WHERE Email = '$email' && Senha = '$senha' ";
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){

    $error[] = 'Já existe um usuário com este Email e Senha!';
  }else{

    if($senha != $ConfirmarSenha){
    $error[] = 'As senhas não correspondem!';

    }else{
      $resultcpf = " SELECT * FROM cadastro WHERE Cpf = '$cpf' ";
      $resultadoCPF = mysqli_query($conn, $resultcpf);

    if(mysqli_num_rows($resultadoCPF) > 0){
    $error[] = 'Este CPF já está em uso!';

    }else{

    $resultemail = "SELECT * FROM cadastro WHERE Email = '$email' ";
    $result = mysqli_query($conn, $resultemail);

    if(mysqli_num_rows($result) > 0){
    $error[] = 'Este EMAIL já está em uso!';

    }

    else{
      $inserir = "INSERT INTO cadastro(Nome, Email, Telefone, Cpf, Senha) VALUES ('$nome','$email','$telefone','$cpf','$senha')";
      mysqli_query($conn, $inserir);
      header('location: login.php');
    }
  }
  }
} 
}
?>
                    <!-- LOGIN -->
<?php
include('conexao.php');
if(isset($_POST["submitLOGIN"])){


  if(isset($_POST['email_login'])|| isset($_POST['senha_login'])) {

    $emailadmin = $_POST['email_login'];
    $senhaadmin = $_POST['senha_login'];
    // vendo se o email e senha inseridos é igual aos dados específicos de administrador.
    if($emailadmin == 'atrinnemodafeminina@gmail.com'  || $senhaadmin == 'admin123'){

      // sessão
      $sql_code = "SELECT * FROM cadastro WHERE Email = '$emailadmin' AND Senha = '$senhaadmin' ";
      $sql_query = $conn->query($sql_code);
  
      $quantidade = $sql_query->num_rows;
  
      if($quantidade == 1){
  
        $usuario = $sql_query->fetch_assoc();
  
        if(!isset($_SESSION)){
          session_start();
        }
  
        $_SESSION['id'] = $usuario['IdCadastro'];
        $_SESSION['nome'] = $usuario['Nome'];
        $_SESSION['email'] = $usuario['Email'];
        $_SESSION['telefone'] = $usuario['Telefone'];
        $_SESSION['endereco'] = $usuario['Endereco'];
        $_SESSION['cpf'] = $usuario['Cpf'];
        $_SESSION['senha'] = $usuario['Senha'];



      header('location: administrador.php');
      }
    }

  else{

  if(isset($_POST['email_login']) || isset($_POST['senha_login'])){

    $email = $conn->real_escape_string($_POST['email_login']);
    $senha = $conn->real_escape_string($_POST['senha_login']);

    $sql_code = "SELECT * FROM cadastro WHERE Email = '$email' AND Senha = '$senha' ";
    $sql_query = $conn->query($sql_code);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){

      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['id'] = $usuario['IdCadastro'];
      $_SESSION['nome'] = $usuario['Nome'];
      $_SESSION['email'] = $usuario['Email'];
      $_SESSION['telefone'] = $usuario['Telefone'];
      $_SESSION['endereco'] = $usuario['Endereco'];
      $_SESSION['cpf'] = $usuario['Cpf'];
      $_SESSION['senha'] = $usuario['Senha'];

      header('location: indexcomlogin.php'); 
    }
    else{
      $erroEMAIL[] =  "Email ou Senha incorretos!";
    }

  }
}
}

  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atrinne Moda Feminina</title> 
    <link rel="shortcut icon" href="imagenstcc/manequim">
    <link rel="stylesheet" href="css/headerpag.css">
    <link rel="stylesheet" href="css/login.css"> 
    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<body>
<header>
    <div class="container">
      <nav class="nav-bar">
          <div class="logo">
              <a href="index.php"><p>ATRINNE MODA FEMININA</p></a>
          </div>
        <div class="botoes-header">
          <a href="shop_products.php"><div class="login-button">
           <button><ion-icon name="shirt-outline"></ion-icon></button>
              <br>
              <span class="titulomenu">Produtos</span>
          </div></a>
          <div class="login-button">
            <button><a href="sobrenos.php"><ion-icon name="navigate-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Sobre nós</span>
          </div>

          <div class="login-button">
              <button><a href="cart.php"><ion-icon name="cart-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Carrinho</span>
          </div>

          <div class="login-button">
              <button><a href="login.php"><ion-icon name="person-outline"></ion-icon></a></button><br>
               <span class="titulomenu">Perfil</span>
          </div>
      </div>

          <div class="mobile-menu-icon">
              <button onclick="menuShow()"><ion-icon class="icon" name="menu-outline"></ion-icon></button>
          </div>
      </nav>
      <div class="mobile-menu">
          <div class="login-button-mobile">
              <center><a href="GALERIA.html"><H3>PRODUTOS</H3></a></center>
          </div>
          <div class="login-button-mobile">
              <center><a href="sobrenos.php"><H3>Sobre nós</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="login.php"><H3>CARRINHO</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="login.php"><H3>PERFIL</H3></a></center>
          </div>
      </div>
    </div>
  </header>

  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
                                <!-- formulário login -->
          <form  autocomplete="off" class="sign-in-form" method="post">
          

            <div class="heading-login">
              <h2>Bem vindo(a)</h2>
              <h6>Não é cadastrado?</h6>
              <a href="#" class="toggle">Faça já</a>
            </div>

            <div class="actual-form">
              <!-- input -->
              <div class="input-wrap">
                <input
                  type="text"
                  minlength="4"
                  class="input-field"
                  name="email_login"
                  autocomplete="off"
                  required
                />
                <label>Email:</label>
              </div>

            <!-- input -->
              <div class="input-wrap">
                <input
                  type="password"
                  class="input-field"
                  name="senha_login"
                  autocomplete="off"
                  required
                />
                <label>Senha:</label>
              </div>

              <input type="submit" name="submitLOGIN" value="Login" class="sign-btn" />


              <!-- Código para um erro aparecer somente se ele acontecer -->
              <?php    
              if(isset($erroEMAIL)){
                foreach($erroEMAIL as $erroEMAIL){
                  echo $erroEMAIL;
                }
              }
              ?>
 
            </div>
          </form>

          <form method="post"  autocomplete="off" class="sign-up-form">



                            <!-- CADASTRO -->
            <div class="heading">
              <h2>Faça seu cadastro</h2>
              <!-- <h6>Pronto</h6> -->
              <a href="#" class="toggle">Faça seu login</a>
<br>
            </div>

            <div class="actual-form">
              <!-- input -->
              <div class="input-wrap">
                <input
                  type="text"
                  class="input-field"
                  name="nome_cadastro"
                  autocomplete="off"
                  required
                />
                <label>Nome:</label>
              </div>
            <!-- input -->
              <div class="input-wrap">
                <input
                  type="email"
                  class="input-field"
                  name="email_cadastro"
                  autocomplete="off"
                  required
                />
                <label>Email</label>
              </div>

              <div class="input-wrap">
                <input
                  type="number"
                  class="input-field"
                  name="telefone_cadastro"
                  autocomplete="off"
                  required
                />
                <label>Telefone:</label>
              </div>

              <div class="input-wrap">
                <input
                  type="number"
                  class="input-field"
                  name="cpf_cadastro"
                  autocomplete="off"
                  required
                />
                <label>Cpf:</label>
              </div>
              <div class="input-wrap">
                <input
                  type="password"
                  class="input-field"
                  name="senha_cadastro"
                  autocomplete="off"
                  required
                />
                <label>Senha</label>
              </div>
              <div class="input-wrap">
                <input
                  type="password"
                  class="input-field"
                  name="confirmarsenha_cadastro"
                  autocomplete="off"
                  required
                />
                <label>Confirmar senha</label>
              </div>

              <input type="submit" name="submitCADASTRO" value="Cadastro" class="sign-btn" />

              <?php 
              //  Código para um erro aparecer somente se ele acontecer 
              if(isset($error)){
                foreach($error as $error){
                  echo $error;
                }
              }
              
              ?>
            </div>
          </form>
        </div>

        <div class="carousel">
          <div class="images-wrapper">
            <img src="imagenstcc/bannerlogin.png" class="image img-1 show" alt="" />
            <img src="imagenstcc/bannerlogin2.png" class="image img-2" alt="" />
         
          </div>

          <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>Receba ofertas exclusivas</h2>
                <h2>Praticidade e agilidade em compras futuras</h2>
              </div>
            </div>

            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/login.js"></script>
  <script src="js/header.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ionicon -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>