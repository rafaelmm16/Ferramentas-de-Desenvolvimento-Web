<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o nome completo e o ano de nascimento do formulário
    $nomeCompleto = $_POST["nome"];
    $anoNascimento = $_POST["ano_nascimento"];
    
    // Calcula a idade
    $idade = date("Y") - $anoNascimento;
    
    // Mostra o nome completo
    echo "Nome completo: " . $nomeCompleto . "<br>";
    
    // Verifica se a pessoa é maior ou menor de idade
    if ($idade >= 18) {
        echo "Maior de idade";
    } else {
        echo "Menor de idade";
    }
}
?>