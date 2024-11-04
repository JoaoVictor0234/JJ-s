<?php
include('conexao.php');
if (isset($_GET['email']) || isset($_GET['senha'])) {
    if (strlen($_GET['email']) == 0) {
        echo "Preencha seu email";
    } elseif (strlen($_GET['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_GET['email']);
        $senha = $mysqli->real_escape_string($_GET['senha']);

        $sql = "SELECT * FROM cad_pessoas WHERE email = '$email'
                        AND senha = '$senha'";

        $sql_query = $mysqli->query($sql) or die("Falha ao executar o código sql: " . $mysqli->error);

        $qtde = $sql_query->num_rows;
        if ($qtde == 1) {
            $email = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $email['id'];
            $_SESSION['nome'] = $email['nome'];

            header("Location: indexlog.php");
            exit();
        } else {
            echo "Falha! Email e/ou Senha incorretos.";
        }
    }
}
