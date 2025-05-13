<?php
$servername = "localhost"; // Geralmente é localhost
$username = "root";     // Usuário padrão do MySQL no Laragon
$password = "";         // Senha padrão do MySQL no Laragon (geralmente vazia)
$database = "escola";   // O nome do banco de dados que criamos

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
// Se a conexão for bem-sucedida, você pode adicionar uma mensagem para teste (opcional)
// echo "Conexão com o banco de dados realizada com sucesso!";
?>