<?php
    include_once("conexao.php");

    $nome = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $cep = $_POST['cep'];
    $sel = $_POST['sel'];
    $SEXO = $_POST['SEXO'];
    $email1 = $_POST['email1'];
    $login = $_POST['login'];
    $sel1 = $_POST['sel1'];
    $senha = $_POST['senha'];

    $sql = "insert into cad_user (id_user, name, phone, email1, login, senha) values ('', '$nome', '$phone', '$email1', '$login', '$sel', '$senha')";

    $exec = mysqli_query($conexao, $sql);
    
    mysqli_close($conexao);

?>