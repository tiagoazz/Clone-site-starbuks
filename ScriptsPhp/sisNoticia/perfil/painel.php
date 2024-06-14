<?php
session_start();
// Verifica se o usuário está logado
if(!isset($_SESSION["usuario_id"])){
    // Se Sessão com Login não existir
    header("Location: ../index.php");// Redireciona para index
    exit();
}

// Busca no banco de dados as notícias
try{
    require_once('../config/database.php');
    $sql = "SELECT * FROM noticia";
    $resul = $conn->query($sql);
}catch(PDOException $e){
    echo "Erro no banco de dados: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Painel do Usuário</h2>
        <p>
            Bem-vindo, <?php echo htmlspecialchars($_SESSION["usuario_nome"]); ?>
        </p>
        <p>
            <a href="../config/logout.php" class="btn btn-danger">Sair</a>
            <a href="cadastrar_noticia.php" class="btn btn-primary">Cadastrar Notícia</a>
        </p>
        <hr>
        <h3>Notícias:</h3>
        <ul class="list-group">
            <?php
            // Exibe as notícias
            while($row = $resul->fetch(PDO::FETCH_ASSOC)) {
                echo '<li class="list-group-item">';
                echo '<strong>Título:</strong> ' . htmlspecialchars($row['titulo']) . '<br>';
                echo '<strong>Notícia:</strong> ' . htmlspecialchars($row['noticia']) . '<br>';
                if ($row['imagem']) {
                    echo '<img src="img/' . htmlspecialchars($row['imagem']) . '" class="img-fluid" style="max-width:200px; max-height:200px;"><br>';
                }
                echo '<a href="editar_noti.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm mt-2">Editar</a> ';
                echo '<a href="excluir_noti.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm mt-2">Excluir</a>';
                echo '</li>';
            }
            ?>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
