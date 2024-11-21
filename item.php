<?php
session_start();
include "conexao.php";

// Recebe o ID do produto via GET
$id_produto = isset($_GET['id']) ? (int)$_GET['id'] : null;

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

// Adicionar o produto ao carrinho
if (isset($_POST['adicionar'])) {
    $quantidade = isset($_POST['quantidade']) ? (int)$_POST['quantidade'] : 1;

    // Verifica se o produto já está no carrinho
    if (isset($_SESSION['carrinho'][$id_produto])) {
        $_SESSION['carrinho'][$id_produto] += $quantidade;
    } else {
        $_SESSION['carrinho'][$id_produto] = $quantidade;
    }

    // Redireciona para o carrinho
    header("Location: carrinho.php");
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
      <a href="index.html"><img src="logo.png" alt="JJ'S" id="imglogo"></a>
    </div>
    <div class="login">
      <?php
        if (isset($_SESSION['usuario_id'])) {
            echo "<a href='perfil.php'>" . $_SESSION['usuario_nome'] . "</a>";
        } else {
            echo "<a href='login.php'>Login</a>";
        }
      ?>
      <a href="carrinho.php" id="cart">
        <img src="carrinho-icon.png" alt="Carrinho">
        <span id="cart-count">
          <?php echo isset($_SESSION['carrinho']) ? array_sum($_SESSION['carrinho']) : 0; ?>
        </span>
      </a>
    </div>
  </header>

  <main class="product-container">
    <div class="product-image">
      <img src="imagens/<?php echo $produto['imagem']; ?>" alt="Imagem do Produto">
    </div>
    <div class="product-details">
      <h2><?php echo $produto['nome']; ?></h2>
      <p><?php echo $produto['quantidade']; ?></p>
      <p class="price">R$<?php echo number_format($produto['valor'], 2, ',', '.'); ?></p>
      
      <!-- Formulário para adicionar ao carrinho -->
      <a href="carrinho.php?acao=add&id=<?php echo $produto['id']; ?>">
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" value="1" min="1">
        <button type="submit" name="adicionar" class="button">Adicionar ao Carrinho</button>
      </a>
    </div>
  </main>

  <div class="product-full-description">
    <h2>Descrição Completa do Produto</h2>
    <p><?php echo $produto['descricao']; ?></p>
  </div>

  <footer class="main-footer">
    <a href="index.html"><img src="logo.png" alt="JJ'S" class="img-footer"></a>
    <h1>JJ'S</h1>
    <h3>O DE HOJE TÁ PAGO</h3>
  </footer>
</body>
</html>