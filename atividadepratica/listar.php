<?php
include("conexao.php");

$sql = "SELECT * FROM usuarios"; // substitua "usuarios" pelo nome correto da sua tabela
$resultado = mysqli_query($conn, $sql);

echo "<h2>Lista de Cadastrados</h2>";

while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "Nome: " . $linha['nome'] . "<br>";
    echo "Email: " . $linha['email'] . "<br><hr>";
}
?>
