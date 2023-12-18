<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atrinne Moda Feminina</title>
    <link rel="stylesheet" href="css/headerpag.css">
    <link rel="stylesheet" href="css/blogdaatrinne.css">
</head>
<body>
    
<?php  
include ('header.php');
?>

<div class="container-body">
    <div class="Tendencias-titulo">
       <center> <h1>Tendências 2024</h1> </center>
       
        <!-- adicionar logo da atrinne -->
    </div>

    <div class="container-tendencias">

    <div class="btn-cores">
        <img src="imagenstcc/1.png">
        <div class="txt-cores">
<P></p>
        </div>
    </div>
    <div class="btn-jeans">
    <img src="imagenstcc/2.png">

        <div class="txt-jeans">

        </div>
    </div>
    <div class="btn-verao">
    <img src="imagenstcc/3.png">

        <div class="txt-verao">

        </div>
    </div>
    <div class="btn-verao">
    <img src="imagenstcc/3.png">

        <div class="txt-verao">

        </div>
    </div>

    </div> 
</div>
<script>

document.addEventListener('DOMContentLoaded', function () {
  const btnCores = document.querySelector('.btn-cores');
  const btnJeans = document.querySelector('.btn-jeans');
  const btnVerao = document.querySelector('.btn-verao');
  const txtCores = document.querySelector('.txt-cores');
  const txtJeans = document.querySelector('.txt-jeans');
  const txtVerao = document.querySelector('.txt-verao');
  const txtContainer = document.querySelector('.txt-container');

  btnCores.addEventListener('click', function () {
    showText(txtCores);
  });

  btnJeans.addEventListener('click', function () {
    showText(txtJeans);
  });

  btnVerao.addEventListener('click', function () {
    showText(txtVerao);
  });

  function showText(txtElement) {
    // Esconde todos os elementos de texto
    txtCores.style.display = 'none';
    txtJeans.style.display = 'none';
    txtVerao.style.display = 'none';

    // Mostra o texto correspondente ao botão clicado
    txtElement.style.display = 'block';

    // Mostra o contêiner de texto
    txtContainer.style.display = 'block';
  }
});

</script>

<script src="js/header.js"></script>
    <script src="js/interacaocomamidia.js"></script>
    <script src="js/tipos-maisvendidos.js"></script>
    <script src="js/tiposderoupa.js"></script>
    <script src="js/modallogin.js"></script>
    <script src="js/maisvendidos.js"></script>
    <script src="js/clientes-instagram.js"></script>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>