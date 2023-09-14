<?php

    $hostname = "localhost";
    $bancodedados = "form";
    $usuario = "root";
    $senha = "";
    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if($mysqli -> connect_errno){
        echo "Falha ao conectar: (" .$mysqli -> connect_errno .") ".$mysqli->conect_error;
    }else{
        echo "Mensagem foi enviada com sucesso!";
    }
    
    ?>