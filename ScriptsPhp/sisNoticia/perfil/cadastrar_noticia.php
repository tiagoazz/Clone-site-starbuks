<?php
session_start();
// Verifica se o usuário está logado
if(!isset($_SESSION["usuario_id"])){
    // Se Sessão com Login não existir
    header("Location: ../index.php");// Redireciona para index
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h2>Cadastrar Notícia</h2>
<form action="../config/processar_cad_noticia.php" method="post" enctype="multipart/form-data">
   <p><input type="text" name="titulo" placeholder="Digite o Título da Noticia" required></p>
   <p><textarea name="noticia" rows="5" required placeholder="Digite a Noticia"></textarea></p>
   <p><input type="file" name="imagem" accept="image/*" required></p>
   <p><button type="submit">Cadastrar Noticia</button></p>
</form>
</body>
</html>