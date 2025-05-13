<?php
// Simula uma verificação de login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if (isset($_POST["email"]) && isset($_POST["senha"])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        // Aqui é onde você consultaria o banco de dados
        if ($email === "admin@exemplo.com" && $senha === "123456") {
            echo "Login realizado com sucesso!";
        } else {
            echo "Email ou senha incorretos.";
        }

    } else {
        echo "Por favor, preencha todos os campos.";
    }

} else {
    echo "Acesso inválido.";
}
?>
