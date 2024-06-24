<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Minha Loja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <a class="nav-link" href="dash.php">home</a>
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

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            $sql = $conexao->query("SELECT * FROM tabela_usuarios");
            while ($dados = $sql->fetch_object()) { ?>
                <tr>
                    <td><?= $dados->id ?></td>
                    <td><?= $dados->nome ?></td>
                    <td><?= $dados->email ?></td>
                    <td><?= $dados->senha ?></td>
                   
                </tr>
            <?php }
            ?>
        </tbody>
    </table>




    </tbody>
    </table>


    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>