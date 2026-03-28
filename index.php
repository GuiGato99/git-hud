<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="dash.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <nav class="menu-lateral">
        <h2>Dashboard</h2>

        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i> Início</a></li>
            <li><a href="usuarios.php"><i class="fa-solid fa-users"></i> Usuários</a></li>
            <li><a href="cadastro.php"><i class="fa-solid fa-user-plus"></i> Cadastro</a></li>
            <li><a href="posts.php"><i class="fa-solid fa-newspaper"></i> Posts</a></li>
            <li><a href="novo-post.php"><i class="fa-solid fa-pen-to-square"></i> Novo Post</a></li>
            <li><a href="#"><i class="fa-solid fa-file-lines"></i> Relatórios</a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> Configurações</a></li>
        </ul>

        <div class="perfil">
            <p>Logado como:</p>
            <strong><i class="fa-solid fa-user"></i> <?php echo $_SESSION['usuario']; ?></strong>
            <br>
            <strong><i class="fa-solid fa-lock"></i> RA: <?php echo $_SESSION['ra']; ?></strong>
            <br>
            <a href="logout.php" class="btn-sair"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>
        </div>
    </nav>

    <div class="conteudo">
        <main>
            <h1>Painel Principal</h1>

            <section class="container-cards">
                <article>
                    <h2><i class="fa-solid fa-users"></i> Usuários</h2>
                    <p>Gerenciar usuários cadastrados no sistema.</p>
                    <a href="usuarios.php" class="btn">Acessar</a>
                </article>

                <article>
                    <h2><i class="fa-solid fa-newspaper"></i> Posts</h2>
                    <p>Visualizar e gerenciar os posts do blog.</p>
                    <a href="posts.php" class="btn">Acessar</a>
                </article>

                <article>
                    <h2><i class="fa-solid fa-pen-to-square"></i> Novo Post</h2>
                    <p>Criar um novo conteúdo para o CMS do blog.</p>
                    <a href="novo-post.php" class="btn">Acessar</a>
                </article>

                <article>
                    <h2><i class="fa-solid fa-gear"></i> Configurações</h2>
                    <p>Alterar preferências e opções do sistema.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
            </section>
        </main>

        <footer>
            <p>Trabalho Erick</p>
            <p>Sexta-feira 06/03/2026</p>
        </footer>
    </div>

</body>
</html>