<?php
include "conexao.php";
session_start();
$sql = "SELECT * FROM produtos WHERE categoria = 'roupas'";
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
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="head">
      <div class="logo">
        <a href="index.html"><img src="logo.png" alt="JJ'S" id="imglogo" /></a>
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
          <h8>|</h8>
          <a href="login.php">
            <h3>LOGIN</h3>
          </a>
          <div class="cart-container">
            <span class="material-symbols-outlined cart-icon"
              >shopping_cart</span
            >
            <span class="message-count"><a href="#">0</a></span>
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
          <li><a href="equipamentos.php">EQUIPAMENTOS</a></li>
          <li><a href="vitaminas.php">VITAMINAS</a></li>
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
    <!--
    <main>
      <span class="material-symbols-outlined" id="filter"> filter_alt </span>
      <div class="container">
        <div class="card">
          <img src="imagensroupas/Shorts de Compressão Berserk Beclot.png" alt="Shorts de Compressão Berserk Beclot" />
          <h4>Shorts de Compressão Beclot</h4>
          <p>1 Unidade</p>
          <p>R$109,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Shorts Preto Ad Growth.png" alt="Shorts Preto Ad Growth" />
          <h4>Shorts Preto Ad Growth</h4>
          <p>1 Unidade</p>
          <p>R$119,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Shorts Tactel Mith.png" alt="Shorts Tactel Mith" />
          <h4>Shorts Tactel Mith</h4>
          <p>1 Unidade</p>
          <p>R$209,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Oversized Growth.png" alt="Oversized Growth" />
          <h4>Oversized Growth</h4>
          <p>1 Unidade</p>
          <p>R$139,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Regata de Trilha Feminina Under Armour.png" alt="Regata de Trilha Feminina Under Armour" />
          <h4>Regata Feminina Under Armour</h4>
          <p>1 Unidade</p>
          <p>R$289,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Top Growth.png" alt="Top Growth" />
          <h4>Top Growth Beaut Soul</h4>
          <p>1 Unidade</p>
          <p>R$129,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Camiseta Performance Growth.png" alt="Camiseta Performance Growth" />
          <h4>Camiseta Performance Growth</h4>
          <p>1 Unidade</p>
          <p>R$139,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Camiseta Dry Fit 2.0 Dark Lab.png" alt="Camiseta Dry Fit 2.0 Dark Lab" />
          <h4>Camiseta Dry Fit 2.0 Dark Lab</h4>
          <p>1 Unidade</p>
          <p>R$59,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Top Puma Nadador Feminino.png" alt="Top Puma Nadador Feminino" />
          <h4>Top Puma Nadador Feminino</h4>
          <p>1 Unidade</p>
          <p>R$69,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Regata Comam Frutas.png" alt="Regata Comam Frutas" />
          <h4>Regata Comam Frutas</h4>
          <p>1 Unidade</p>
          <p>R$129,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Regata Cut Off Mith Nation.png" alt="Regata Cut Off Mith Nation" />
          <h4>Regata Cut Off Mith Nation</h4>
          <p>1 Unidade</p>
          <p>R$109,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
        <div class="card">
          <img src="imagensroupas/Cropped Feminino Mith Nation.png" alt="Cropped Feminino Mith Nation" />
          <h4>Cropped Feminino Mith Nation</h4>
          <p>1 Unidade</p>
          <p>R$189,90</p>
          <button class="button">COMPRAR</button>
          <div class="like">
            <i class="ri-heart-3-fill"></i>
          </div>
        </div>
      </div>
    </main>
-->
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
  <script src="script.js"></script>
</html>
