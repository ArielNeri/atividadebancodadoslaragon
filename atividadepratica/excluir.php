<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("conexao.php");

// Verifica se o ID foi passado pela URL usando o método GET
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    // Recupera o ID do aluno a ser excluído
    $id = $_GET["id"];

    // Prepara a query SQL para excluir o aluno com o ID especificado
    $sql = "DELETE FROM alunos WHERE id = ?";

    // Cria uma declaração preparada para evitar SQL injection
    $stmt = $conn->prepare($sql);

    // Vincula o parâmetro com o valor
    $stmt->bind_param("i", $id); // "i" indica que o parâmetro é um inteiro

    // Executa a query
    if ($stmt->execute()) {
        echo "<p>Aluno excluído com sucesso!</p>";
    } else {
        echo "Erro ao excluir o aluno: " . $stmt->error;
    }

    // Fecha a declaração
    $stmt->close();
} else {
    echo "<p>ID do aluno não especificado.</p>";
}

// Fecha a conexão com o banco de dados
$conn->close();

echo '<p><a href="listar.php">Voltar à Lista de Alunos</a></p>';
echo '<p><a href="index.php">Voltar ao Cadastro</a></p>';
?>