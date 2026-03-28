<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

$erro = $_GET['erro'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CMS Blog</title>
    <link rel="stylesheet" href="dash.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="pagina-login">

    <div class="login-container">
        <div class="login-box">
            <h1><i class="fa-solid fa-lock"></i> Login do CMS</h1>
            <p>Acesse o painel do blog</p>

            <?php if ($erro == '1'): ?>
                <div class="mensagem-erro">E-mail ou senha inválidos.</div>
            <?php endif; ?>

            <form action="auth.php" method="post" class="form-login">
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>

                <button type="submit" class="btn btn-login">Entrar</button>
            </form>

            <div class="login-info">
                <p><strong>Login de teste:</strong></p>
                <p>E-mail: admin@blog.com</p>
                <p>Senha: 123456</p>
            </div>
        </div>
    </div>

</body>
</html>