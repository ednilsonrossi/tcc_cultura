<?php
require("sistema_bd.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$data = $_POST["data"];
$senha = $_POST["senha"];
$perfil = $_POST["id_tipo"];

inserirUsuario($nome, $email, $telefone, $data, $senha, $perfil);

$confirmar = $_POST["confirmar"];

header("Location: login.php");

?>