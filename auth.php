<?php
session_start();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$emailCorreto = 'admin@blog.com';
$senhaCorreta = '123456';

if ($email === $emailCorreto && $senha === $senhaCorreta) {
    $_SESSION['usuario'] = 'Guilherme Gato';
    $_SESSION['ra'] = '101118';
    $_SESSION['email'] = $email;

    header("Location: index.php");
    exit;
} else {
    header("Location: login.php?erro=1");
    exit;
}