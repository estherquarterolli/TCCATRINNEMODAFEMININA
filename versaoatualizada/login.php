<!-- PHP LOGIN -->
<?php
include('conexao.php');
if(isset($_POST["submit"])){
    $email = $_POST['email-login'];
    $senha = $_POST['senha-login'];
    $result = mysqli_query($conn, "SELECT * FROM dados_login WHERE email_id = '$email' OR senha = '$senha'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) >0){
        if($senha == $row["senha"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }

    }
else{
    
}
if(isset($error)){

foreach($error as $error){

    echo '<span class="mensagemErro">'.$error.'</span>';
}
}
}

?>
<!-- FIM PHP LOGIN -->


<!-- PHP CADASTRO -->

<?php
            
if (isset($_POST['submit'])){

  $nome = $_POST['nome-cadastro'];
  $email = $_POST['email-cadastro'];
  $celular = $_POST['telefone-cadastro'];
  $cpf = mysqli_real_escape_string($conn, $_POST['cpf-cadastro']);
  $senha = ( $_POST['senha-cadastro']);
  $CSenha = ( $_POST['confirmarsenha-cadastro']);

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
                <!-- FIM PHP CADASTRO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 

    <link rel="stylesheet" href="css/headerpaginas.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>
<body>
    <!-- <div class="container-fluid"> -->
  <header>
    <div class="container">
      <nav class="nav-bar">
        
          <div class="logo">
              <a href="INDEX.HTML"><p>ATRINNE MODA FEMININA</p></a>
          </div>
        <div class="botoes-header">
          <a href="GALERIA.html"><div class="login-button">
           <button><ion-icon name="shirt-outline"></ion-icon></button>
              <br>
              <span class="titulomenu">Produtos</span>
          </div></a>
          <div class="login-button">
              <button><a href="FAVORITOS.HTML"><ion-icon name="heart-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Favoritos</span>
          </div>

          <div class="login-button">
              <button><a href="CARRINHO.HTML"><ion-icon name="cart-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Carrinho</span>
          </div>

          <div class="login-button">
              <button><a href="LOGIN.HTML"><ion-icon name="person-outline"></ion-icon></a></button><br>
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
              <center><a href="FAVORITOS.HTML"><H3>FAVORITOS</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="CARRINHO.HTML"><H3>CARRINHO</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="LOGIN.HTML"><H3>PERFIL</H3></a></center>
          </div>
      </div>
    </div>
  </header>


  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
                                <!-- formulário -->
          <form action="index.html" autocomplete="off" class="sign-in-form">
          

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
                  name="email-login"
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
                  name="senha-login"
                  autocomplete="off"
                  required
                />
                <label>Senha:</label>
              </div>

              <input type="submit" value="Login" class="sign-btn" />

             
            </div>
          </form>

          <form action="login.php" autocomplete="off" class="sign-up-form">
          

            <div class="heading">
              <h2>Faça seu cadastro</h2>
              <!-- <h6>Pronto</h6> -->
              <a href="#" class="toggle">Faça seu login</a>
            </div>

            <div class="actual-form">
              <!-- input -->
              <div class="input-wrap">
                <input
                  type="text"
                  class="input-field"
                  name="nome-cadastro"
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
                  name="email-cadastro"
                  autocomplete="off"
                  required
                />
                <label>Email</label>
              </div>

              <div class="input-wrap">
                <input
                  type="text"
                  class="input-field"
                  name="telefone-cadastro"
                  autocomplete="off"
                  required
                />
                <label>Telefone:</label>
              </div>

              <div class="input-wrap">
                <input
                  type="text"
                  class="input-field"
                  name="cpf-cadastro"
                  autocomplete="off"
                  required
                />
                <label>Cpf:</label>
              </div>
              <div class="input-wrap">
                <input
                  type="password"
                  class="input-field"
                  name="senha-cadastro"
                  autocomplete="off"
                  required
                />
                <label>Senha</label>
              </div>
              <div class="input-wrap">
                <input
                  type="password"
                  class="input-field"
                  name="confirmarsenha-cadastro"
                  autocomplete="off"
                  required
                />
                <label>Confirmar senha</label>
              </div>

              <input type="submit" value="Cadastro" class="sign-btn" />

        
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