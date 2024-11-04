<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
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
    <div class="container">
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Seja Bem-Vindo</h1>
                    <p>Insira seus dados pessoais para usar todos os recursos do site</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, Amigo!</h1>
                    <p>Cadastre-se com seus dados pessoais para usar todos os recursos do site</p>
                    <button class="hidden" id="register">Cadastrar-se</button>
                </div>
            </div>
        </div>
        <div class="form-container sign-up">
            <form action="cadastrolog.php" method="get">
                <h1>Criar Conta</h1>
                <div class="social-icons">
                </div>
                <span>Use seus dados para criar a conta</span>
                <input type="text" name="nome" placeholder="Nome completo" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <input type="text" name="telefone" placeholder="Telefone" required>
                <input type="number" name="cpf" placeholder="CPF" required>
                <input type="text" name="endereço" placeholder="Endereço" required>
                <input type="text" name="cep" placeholder="CEP" required>
                <input type="date" name="dtnasc" placeholder="Data de nascimento" required>
                <button type="submit">Cadastrar-se</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="loginlog.php" method="get">
                <h1>Fazer Login</h1>
                <div class="social-icons">
                </div>
                <span>Use seu email e senha para fazer login</span>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <a href="#">Esqueceu sua senha?</a>
                <button type="submit">Logar</button>



            </form>
        </div>
    </div>
    <footer class="main-footer">
        <a href="index.html"><img src="logo.png" alt="JJ'S" class="img-footer"></a>
        <h1>JJ'S</h1>
        <h3>O DE HOJE TÁ PAGO</h3>
        <div class="social-icons">
            <a href="#"><img src="whatsapp.png" alt="Whatsapp"></a>
            <a href="#"><img src="tik-tok.png" alt="Tiktok"></a>
            <a href="#"><img src="instagram.png" alt="Instagram"></a>
            <a href="#"><img src="mail.png" alt="Email"></a>
        </div>


    </footer>
    <div class="copy-footer">
        <h3>&copy; JJ'S JayJay'S</h3>
    </div>
    </body>
<script src="login.js"></script>
<script src= "script.js"></script>

</html>
