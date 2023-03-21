<?php
session_start();

$lembrar = $_POST["lembrar"];

    if ($lembrar == 1) {
        setcookie('username', $email, time() + 60 * 60 * 24, "/");
    }
?>