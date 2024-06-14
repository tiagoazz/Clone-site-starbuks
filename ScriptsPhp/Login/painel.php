<?php
    //Verifica Se a sessão existe
    //Inicia sessão
    session_start();
    if(!isset($_SESSION["usuario_logado"]) && $_SESSION["usuario_logado"] != true)
    {
        header("Location: index.html");
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
    <p>Olá <strong><?php echo $_SESSION['usuario_email']; ?></strong></p>
    <p>Seja bem vindo seu lindo !</p>
    <p>Vamos fazer Logout ? <a href="logout.php">SAIR !!</a></p>
</body>
</html>