<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("conexao.php");

// Verifica se o formulário foi enviado usando o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Prepara a query SQL para inserir os dados na tabela 'alunos'
    $sql = "INSERT INTO alunos (nome, email) VALUES (?, ?)";

    // Cria uma declaração preparada para evitar SQL injection
    $stmt = $conn->prepare($sql);

    // Vincula os parâmetros com os valores
    $stmt->bind_param("ss", $nome, $email); // "ss" indica que ambos os parâmetros são strings

    // Executa a query
    if ($stmt->execute()) {
        echo "<p>Aluno cadastrado com sucesso!</p>";
        echo '<p><a href="index.php">Voltar ao Cadastro</a></p>';
        echo '<p><a href="listar.php">Listar Alunos</a></p>';
    } else {
        echo "Erro ao cadastrar o aluno: " . $stmt->error;
        echo '<p><a href="index.php">Voltar ao Cadastro</a></p>';
    }

    // Fecha a declaração
    $stmt->close();
}

// Fecha a conexão com o banco de dados
$conn->close();
?>