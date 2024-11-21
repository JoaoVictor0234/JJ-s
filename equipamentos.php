<?php
include "conexao.php";
session_start();
$sql = "SELECT * FROM produtos WHERE categoria = 'equipamentos'";
$result  = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
    <title>JayJay'S</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
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
      <div class="search">
        <input type="text" placeholder="O que você está procurando?" />
        <span class="material-symbols-outlined">search</span>
      </div>
      <div class="login">
        <div class="login-container">
          <span class="material-symbols-outlined person-icon">person</span>
          <a href="login.php">
            <h3>CADASTRO</h3>
          </a>
          <span>|</span>
          <a href="login.php">
            <h3>LOGIN</h3>
          </a>
          <div class="cart-container">
            <span class="material-symbols-outlined cart-icon" id="cart"
              >shopping_cart</span
            >
            <span class="message-count" id="cart-count"><a href="#">0</a></span>
            <a href="#" class="cart-link">
              <h3>CARRINHO</h3>
            </a>
          </div>
        </div>
      </div>
    </header>
    <div class="nav-list">
      <nav>
        <ul>
          <li><a href="inicio.php">INÍCIO</a></li>
          <li><a href="suplementos.php">SUPLEMENTOS</a></li>
          <li><a href="vitaminas.php">VITAMINAS</a></li>
          <li><a href="roupas.php">ROUPAS</a></li>
        </ul>
      </nav>
    </div>

    <main>
  <div class="container">
    <?php 
      $count = 0; // Para controlar quantos produtos são exibidos por linha
      while($produto = $result->fetch_assoc()): 
        if ($count % 3 == 0 && $count > 0) {
          echo '</div><div class="container">'; // Fechar a linha anterior e abrir uma nova
        }
    ?>
      <div class="card">
      <a href="item.php?acao=add&id=<?php echo $produto['id']; ?>">
        <img src="imagens/<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>" />
        <h4 class="nome"><?php echo $produto['nome']; ?></h4>
        <p><?php echo $produto['quantidade']; ?></p>
        <p class="valor">R$<?php echo $produto['valor']; ?></p>
        <button class="button">COMPRAR</button>
      </a>
      </div>
    <?php 
        $count++; // Incrementa a contagem de produtos
      endwhile;
    ?>
  </div>
</main>
    <footer class="main-footer">
      <a href="index.html"
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
