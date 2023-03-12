<?php
if (!isset($_SESSION)) {
    session_start();
  }
require_once("database/conecta_bd.php");

function buscarUsuario($email, $senha) {
    $sql = "SELECT email FROM cadastro WHERE email = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuario = mysqli_fetch_assoc($resultado);
    if ($usuario == null) {
      $msg = "Usuário incorreto!"; 
    } else {
      $senha_md5 = md5($senha);
      $sql = "SELECT * FROM Cadastro
              WHERE email = ? AND senha = ?";  
      $stmt = $conexao->prepare($sql);
      $stmt->bind_param("ss", $email, $senha_md5);
      $stmt->execute();
      $resultado = $stmt->get_result();
      $usuario = mysqli_fetch_assoc($resultado);
      if ($usuario == null) {
        $msg = "Senha incorreta!";  
      } else {
        $msg = null;
      }
    }
    $stmt->close();
    $conexao->close();
    return [$usuario, $msg]; 
  }

function inserirUsuario($nome, $email, $telefone, $data, $senha, $perfil) {
  $sql = "SELECT email FROM Cadastro WHERE email = ?";
  $conexao = obterConexao();
  $senha_md5 = md5($senha);
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $resultado = $stmt->get_result();
  $row_cnt = mysqli_num_rows($resultado);
  if ($row_cnt == 1) {
      echo "Usuário já existente!";
  } else {
      $sql = "INSERT INTO Cadastro (nome, email, telefone, data_nasc, senha, id_tipo) VALUES (?, ?, ?, ?, ?, ?)";
      $stmt = $conexao->prepare($sql);
      $stmt->bind_param("ssssss", $nome, $email, $telefone, $data, $senha_md5, $perfil);
      $stmt->execute();
      $_SESSION["msg"] = "O usuário {$nome} foi adicionado!";
      $_SESSION["tipo_msg"] = "alert-success";
}
  $stmt->close();
  $conexao->close();
}
  
function protectAdm() {
  if(!isset($_SESSION)) {
    session_start();
  }

  if(!isset($_SESSION['usuario_logado']) || ($_SESSION['verificacao'] != 1)){
    header("Location: ../protectAdm.php");
  }
}

function protectUser() {
  if(!isset($_SESSION)) {
    session_start();
  }

  if(!isset($_SESSION['usuario_logado']) || ($_SESSION['verificacao'] != 2)){
    header("Location: ../protectUser.php");
  }
}
