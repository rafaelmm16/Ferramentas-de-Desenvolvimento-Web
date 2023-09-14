<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o nome e o e-mail do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    
    // Armazena os dados na sessão
    $_SESSION["nome"] = $nome;
    $_SESSION["email"] = $email;
}

// Verifica se os dados estão presentes na sessão
if (isset($_SESSION["nome"]) && isset($_SESSION["email"])) {
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
    
    // Mostra a mensagem de boas-vindas personalizada
    echo "Olá, " . $nome . "! Seja bem-vindo(a)!";
    echo "<br>";
    echo "Seu e-mail cadastrado é: " . $email;
    
    // Botão para realizar a saída da sessão
    echo "<br>";
    echo "<a href='logout.php'>Sair</a>";
} else {
    // Caso os dados não estejam na sessão, exibe uma mensagem de erro
    echo "Dados não encontrados!";
}
?>
