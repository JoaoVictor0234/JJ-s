<?php
session_start();
include('conexao.php');
$sql = "SELECT * FROM produtos";
$result  = $mysqli->query($sql);

// Recebe o ID do produto via GET
$id_produto = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$nome_cliente = $_SESSION['nome'];

// Verifica se o ID do produto foi fornecido
if (!$id_produto) {
  echo "Produto inválido.";
  exit();
}

// Consulta o banco para buscar as informações do produto
$sql = "SELECT * FROM produtos WHERE id = $id_produto";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  $produto = $result->fetch_assoc();
} else {
  echo "Produto não encontrado.";
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="item.css" />
  <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
  <title>JayJay'S</title>
</head>
<body>
  <header class="head">
    <div class="logo">
      <a href="inicio.php"><img src="logo.png" alt="JJ'S" id="imglogo"></a>
    </div>
    <div class="login">
      <?php
      if (isset($_SESSION['id'])) {
        echo "<a href='login.php'>" . $_SESSION['nome'] . "</a>";
      } else {
        echo "<a href='login.php'>Login</a>";
      }
      ?>
    </div>
  </header>

  <main class="product-container">
    <form action="final.php" method="GET">
      <div class="product-image">
        <img src="imagens/<?php echo $produto['imagem']; ?>" alt="Imagem do Produto">
      </div>
      <div class="product-details">
        <h2><?php echo $produto['nome']; ?></h2>
        <p><?php echo $produto['quantidade']; ?> em estoque</p>
        <p class="price">R$<?php echo number_format($produto['valor'], 2, ',', '.'); ?></p>
        <input type="number" name="quantidadeCompra" id="quantidadeCompra" style="background-color: black; color: white; padding: 12px; border: 0.2rem solid #f29c38; border-radius: 50px;" placeholder="Quantidade" min="1">
        <input type="hidden" name="id_produto" value="<?php echo $produto['id']; ?>">
        <button type="submit" name="adicionar" class="button">COMPRAR</button>
    </form>
  </main>

  <div class="product-full-description">
    <h2>Descrição Completa do Produto</h2>
    <p><?php echo $produto['descricao']; ?></p>
  </div>

  <footer class="main-footer">
    <a href="inicio.php"><img src="logo.png" alt="JJ'S" class="img-footer"></a>
    <h1>JJ'S</h1>
    <h3>O DE HOJE TÁ PAGO</h3>
  </footer>
</body>
</html>
