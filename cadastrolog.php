<?php
    include("login.php");
    require_once("class/database.class.php");

    $con = new Database();
    $link = $con->getConexao();

    if(isset($_GET) ) {
    
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $telefone = $_GET['telefone'];
    $cpf = $_GET['cpf'];
    $endereço = $_GET['endereço'];
    $cep = $_GET['cep'];
    $dtnasc = $_GET['dtnasc'];
    
    $smtm = $link->prepare("INSERT INTO cad_pessoas (nome, email, senha, telefone, cpf, endereco, cep, dtnasc)
    VALUES ('$nome', '$email', '$senha', '$telefone', '$cpf', '$endereço', '$cep', '$dtnasc')");

    $smtm->execute();
    header("Location: indexlog.php");
    }
?>