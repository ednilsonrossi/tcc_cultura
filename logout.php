<?php
session_start();

unset($_SESSION["usuario_logado"]);
//session_destroy();
header("Location: login.php");

die();
?>