<?php
session_start();
require("sistema_bd.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$dados_consulta = buscarUsuario($email, $senha);
$usuario = $dados_consulta[0];

if ($usuario == null) {
  $saida = ["autenticado" => false, "msg" => $dados_consulta[1]];
} else {
  $saida = ["autenticado" => true, "perfil" => $usuario["id_tipo"]];
  //$_SESSION["usuario_logado"] = $usuario["email"];
  $_SESSION["usuario_logado"] = $usuario["email"];
  $_SESSION["verificacao"] = $usuario["id_tipo"];
}
$json = json_encode($saida);
echo $json;
?>