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
    <title>Posts</title>

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
            <h1>Gerenciamento de Posts</h1>

            <section class="tabela-usuarios">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Autor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Primeiro Post do Blog</td>
                            <td>Tecnologia</td>
                            <td><span class="status ativo">Publicado</span></td>
                            <td>Guilherme Gato</td>
                            <td class="acoes">
                                <a href="#"><i class="fa-solid fa-eye"></i></a>
                                <a href="#"><i class="fa-solid fa-pen"></i></a>
                                <a href="#"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Como organizar um CMS</td>
                            <td>Programação</td>
                            <td><span class="status inativo">Rascunho</span></td>
                            <td>Guilherme Gato</td>
                            <td class="acoes">
                                <a href="#"><i class="fa-solid fa-eye"></i></a>
                                <a href="#"><i class="fa-solid fa-pen"></i></a>
                                <a href="#"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>

        <footer>
            <p>Trabalho Erick</p>
            <p>Sexta-feira 06/03/2026</p>
        </footer>
    </div>

</body>
</html>