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
    <title>Cadastro de Usuário</title>

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
            <h1>Cadastro de Usuário</h1>

            <section class="formulario-cadastro">
                <form action="#" method="post">
                    <div class="campo">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite o nome completo">
                    </div>

                    <div class="campo">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite o e-mail">
                    </div>

                    <div class="campo">
                        <label for="ra">RA</label>
                        <input type="text" id="ra" name="ra" placeholder="Digite o RA">
                    </div>

                    <div class="campo">
                        <label for="curso">Curso</label>
                        <select id="curso" name="curso">
                            <option value="">Selecione o curso</option>
                            <option value="ADS">ADS</option>
                            <option value="SI">Sistemas de Informação</option>
                            <option value="Engenharia">Engenharia</option>
                            <option value="Administração">Administração</option>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" placeholder="Digite a senha">
                    </div>

                    <div class="campo">
                        <label for="status">Status</label>
                        <select id="status" name="status">
                            <option value="">Selecione o status</option>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>

                    <div class="botoes-form">
                        <button type="submit" class="btn">Cadastrar</button>
                        <button type="reset" class="btn btn-secundario">Limpar</button>
                    </div>
                </form>
            </section>
        </main>

        <footer>
            <p>Trabalho Erick</p>
            <p>Sexta-feira 06/03/2026</p>
        </footer>
    </div>

</body>
</html>