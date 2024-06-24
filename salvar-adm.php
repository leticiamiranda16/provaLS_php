<?php
 require_once ("config.php");

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email =mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$niveis_acesso = 2; 


$sql = "INSERT INTO tabela_usuarios (nome, email, senha, niveis_acesso)
VALUES ('$nome', '$email', '$senha', '$niveis_acesso')";

if ($conexao->query($sql) === TRUE) {

    echo "usuario cadastrado";
    header("location:dash-adm.php");
} else {

    echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conn->close();