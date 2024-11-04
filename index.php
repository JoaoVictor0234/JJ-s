<?php
require_once("class/database.class.php");

try {
    // Cria uma instância da classe Database e obtém a conexão
    $con = new Database();
    $link = $con->getConexao();

    if ($link) {
        // Prepara e executa a consulta
        $smtm = $link->prepare("SELECT * FROM cad_pessoas");
        $smtm->execute();

        // Obtém todos os resultados
        $data = $smtm->fetchAll(PDO::FETCH_ASSOC);

        // Exibe uma mensagem de sucesso
        echo "Bom dia! Dados recuperados:<br>";

        // Exibe os dados
        foreach ($data as $row) {
            echo htmlspecialchars(implode(", ", $row)) . "<br>";
        }

        // Fecha a conexão (opcional, geralmente gerenciado automaticamente)
        $link = null;

    } else {
        echo "Não foi possível conectar ao banco de dados.";
    }
} catch (PDOException $e) {
    // Captura exceções relacionadas ao PDO
    echo "Erro na consulta: " . htmlspecialchars($e->getMessage());
} catch (Exception $e) {
    // Captura outras exceções
    echo "Erro inesperado: " . htmlspecialchars($e->getMessage());
}
?>