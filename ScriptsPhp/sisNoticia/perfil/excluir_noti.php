<?php
require_once("../config/database.php"); // Inclui a configuração do banco de dados

$noticia_id = $_GET['id']; // Obtém o ID da notícia a ser excluída da URL

try {
    // Prepara a consulta SQL para excluir a notícia com o ID especificado
    $sql = "DELETE FROM noticia WHERE id = :noticia_id";
    $stmt = $conn->prepare($sql); // Corrige a falta do cifrão ($) antes de 'sql'
    $stmt->bindParam(":noticia_id", $noticia_id, PDO::PARAM_INT); // Corrige 'bindparam' para 'bindParam' e adiciona o tipo de parâmetro como inteiro
    $stmt->execute(); // Executa a consulta preparada

    header("Location: painel.php"); // Redireciona para a página do painel após a exclusão
    exit(); // Encerra o script
} catch (PDOException $e) {
    // Em caso de erro, exibe uma mensagem
    echo "Erro no banco de dados: " . $e->getMessage();
}
?>
