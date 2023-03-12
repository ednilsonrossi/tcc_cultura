<?php 
session_start();
require("../sistema_bd.php");
protectAdm();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <section class="container">
</br></br>
    <?php if (isset($_SESSION["usuario_logado"])) { ?>
      <p class="text-success">Seja Bem-Vindo ADM <?= $_SESSION["usuario_logado"]?>!</p>
    <?php } else {
      header("Location: ../public/erro.php");
    } ?>

    <a href="../logout.php">Sair</a>   
  </section>  
</body>
</html>
