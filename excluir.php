

<?php
include("config.php");
// Verifica se o ID foi passado como parâmetro na URL
if(isset($_GET['id'])) {
   
    
    // Remove caracteres especiais e evita injeção de SQL
    $id = $conexao->real_escape_string($_GET['id']);
    
    // Query para deletar o usuário com o ID especificado
    $query = "DELETE FROM tabela_usuarios WHERE id = $id";
    
    // Executa a consulta
    if($conexao->query($query) === TRUE) {
        echo "Usuário deletado com sucesso.";
        header("Location:listar-adm.php");
    } else {
        echo "Erro ao deletar usuário: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conexao->close();
} else {
    echo "ID do usuário não fornecido.";
}
?>
