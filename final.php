<?php
session_start();
include('conexao.php');
date_default_timezone_set('America/Sao_Paulo');

// Recebe o ID do produto via GET
$id_produto = $_GET['id_produto'];  // Agora estamos pegando o valor real do id
$nome_cliente = $_SESSION['nome'];
$data_compra = date('Y-m-d H:i:s');
$quantidadeCompra = $_GET['quantidadeCompra'];  // Pega a quantidade comprada

// Consulta o banco para buscar as informações do produto
$sql = "SELECT * FROM produtos WHERE id = $id_produto";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Pega o primeiro produto retornado
    $produto = $result->fetch_assoc();
    $valorproduto = $produto['valor'];  // Supondo que o campo 'valor' armazene o preço do produto
} else {
    echo "Produto não encontrado.";
}

// Calcula o valor total da compra
$valor_total = $valorproduto * $quantidadeCompra;

// Insere a compra no banco de dados
$sql = "INSERT INTO compras (nome_cliente, valor_total, data_compra) VALUES('$nome_cliente', '$valor_total', '$data_compra')";
$sql_query = $mysqli->query($sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="final.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <title>Login | Cadastro JJ'S</title>
</head>

<body>
    <header class="head">
            <div class="logo">
                <a href="index.html"><img src="logo.png" alt="JJ'S" id="imglogo"></a>
                <div id="hlogo">
                    <div class="title-container">
                        <h1>JJ'S</h1>
                        <h6>O DE HOJE TÁ PAGO</h6>
                    </div>
            </div>
        </div>
    </header>
    <main>
        <center>
    <div class="card">
          <h2>SUA COMPRA FOI FINALIZADA COM SUCESSO!</h2>
          <h4>SEU PEDIDO ESTÁ A CAMINHO</h4>
          <p>CLIQUE EM "VOLTAR" PARA CONTINUAR A NAVEGAR NO SITE</p>
          <a href="inicio.php"><button class="button">VOLTAR</button></a>
        </div>

    </main>
    </center>
    <footer class="main-footer">
      <a href="inicio.php"
        ><img src="logo.png" alt="JJ'S" class="img-footer"
      /></a>
      <h1>JJ'S</h1>
      <h3>O DE HOJE TÁ PAGO</h3>
      <div class="social-icons">
        <a href="#"><img src="whatsapp.png" alt="Whatsapp" /></a>
        <a href="#"><img src="tik-tok.png" alt="Tiktok" /></a>
        <a href="#"><img src="instagram.png" alt="Instagram" /></a>
        <a href="#"><img src="mail.png" alt="Email" /></a>
      </div>
    </footer>
    <div class="copy-footer">
      <h3>&copy; JJ'S JayJay'S</h3>
    </div>
  </body>
</html>
