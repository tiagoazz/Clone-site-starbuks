<?php
require_once("../config/database.php"); // Inclui a configuração do banco de dados

$noticia_id = $_GET['id']; // Obtém o ID da notícia a ser editada da URL

// Consulta SQL para selecionar a notícia com o ID especificado
$sql = "SELECT * FROM noticia WHERE id = :noticia_id";
$stmt = $conn->prepare($sql); // Prepara a consulta SQL
$stmt->bindParam(":noticia_id", $noticia_id, PDO::PARAM_INT); // Associa o valor do ID da notícia ao parâmetro :noticia_id
$stmt->execute(); // Executa a consulta
$row = $stmt->fetch(PDO::FETCH_ASSOC); // Obtém o resultado da consulta como um array associativo

// Verifica se a notícia foi encontrada
if (!$row) {
    header("Location: painel.php"); // Redireciona para o painel se a notícia não for encontrada
    exit(); // Encerra o script
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Define a visualização responsiva -->
    <title>Editar Notícia</title> <!-- Título da página -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> <!-- Inclui o CSS do Bootstrap -->
</head>
<body>
    <section class="container mt-5"> <!-- Seção principal da página com margem superior -->
        <div class="row justify-content-center"> <!-- Alinha o conteúdo ao centro -->
            <div class="col-md-6"> <!-- Define a largura da coluna -->
                <h2 class="mb-4">Editar Notícia</h2> <!-- Título da seção -->
                <?php
                if ($row) { // Se a notícia foi encontrada
                    $tituloAtual = $row['titulo']; // Obtém o título atual
                    $noticiaAtual = $row['noticia']; // Obtém o conteúdo da notícia atual
                    $imagemAtual = $row['imagem']; // Obtém o nome da imagem atual

                    // Exibe o formulário preenchido com as informações atuais
                    echo '<form action="../config/processar_editar_noticia.php" method="POST" enctype="multipart/form-data">';
                    echo '<div class="form-group">';
                    echo '<label for="titulo">Título:</label>';
                    echo '<input type="text" class="form-control" id="titulo" name="titulo" value="' . htmlspecialchars($tituloAtual) . '" required>';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label for="noticia">Notícia:</label>';
                    echo '<textarea class="form-control" id="noticia" name="noticia" rows="5" required>' . htmlspecialchars($noticiaAtual) . '</textarea>';
                    echo '</div>';
                    echo '<div class="form-group">';
                    echo '<label for="imagem">Imagem:</label>';
                    echo '<input type="file" class="form-control-file" id="imagem" name="imagem">'; // Usando form-control-file para estilizar o input de arquivo
                    echo '</div>';
                    echo '<input type="hidden" name="id" value="' . $noticia_id . '">'; // Campo oculto com o ID da notícia
                    echo '<input type="hidden" name="imagem_atual" value="' . htmlspecialchars($imagemAtual) . '">'; // Campo oculto com o nome da imagem atual
                    echo '<button type="submit" class="btn btn-primary">Salvar Alterações</button>';
                    echo '</form>';
                } else {
                    echo '<p>Notícia não encontrada.</p>'; // Mensagem se a notícia não for encontrada
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Scripts do Bootstrap e jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
