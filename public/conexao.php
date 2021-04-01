<?php
    $servidor = "sql104.epizy.com";
    $usuario = "epiz_23957911";
    $senha = "aX9wcm3kNVITOWs";
    $banco = "epiz_23957911_cad";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conexao){
        print ("Falha ao conectar com o banco de dados");
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Conectado com sucesso";
?>