<?php
session_start();
include('config.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="p-3 mb-2 bg-info-subtle text-info-emphasis">

    <div class="container mt-5 bg-info-subtle text-info-emphasis">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Seu email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="senha" type="password" class="form-control" id="password" placeholder="Sua senha">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Entrar</button>
                            <p>Não tema uma conta? <a href="cadastrar.php">Cadastre-se</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php



if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM tabela_usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) == 1) {
        $usuario = mysqli_fetch_assoc($result);
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        $_SESSION['niveis_acesso'] = $usuario['niveis_acesso'];

        // Redireciona com base no ID do usuário
        if ($usuario['niveis_acesso'] == 1) {
            header('Location: dash-adm.php');
        } else{
            header('Location: dash.php');
        }
        exit();
    } else {
        echo "Email ou senha inválidos.";
    }
}

?>


    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>