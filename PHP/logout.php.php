<?php
// Inicia a sessão
session_start();

// Destroi a sessão
session_unset();
session_destroy();

// Redireciona para a página inicial
header("Location: index.php");
exit;
?>
