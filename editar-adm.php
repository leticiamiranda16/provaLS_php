<?php
session_start();
include('config.php');
// include('../controllers/excluir_usuario.php');
?>


<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>
    <link rel="shortcut icon" href="./assets/afs-logo-aside.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body bg-body-tertiary>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Minha Loja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <a class="nav-link" href="cadastrar-adm.php">Novo Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listar-adm.php">Listar Pessoas</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>


    <input type="hidden" name="id" value="<? $_GET['id'] ?>">
    <?php

    include("editar-usuario-adm.php");
    $id = $_GET['id'];
    $sql = $conexao->query("SELECT * FROM tabela_usuarios WHERE id = $id");


    while ($dados = $sql->fetch_object()) { ?>
        <div class="container mt-5">
            <div class="row aling-items-center">
                <div class="col-md-10 mx-auto col-lg-5 ">
                    <p class="h2">Editar Usuario</p>
                    <form action="" method="POST">
                        <input type="hidden" name="acao" value="cadastrar">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control" value="<?= $dados->nome ?>">
                        </div>
                        <div class="mb-3">
                            <label>E-mail</label>
                            <input type="email" name="email" class="form-control" value="<?= $dados->email ?>">
                        </div>
                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="text" name="senha" class="form-control" value="<?= $dados->senha ?>">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary" name="editar" value="Alterar dados">

                        </div>

                    </form>

                </div>
            </div>
        </div>



</body>


<?php }

?>