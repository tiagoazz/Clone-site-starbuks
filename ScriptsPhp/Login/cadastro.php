<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="motor.php" method="post">
        <input type="email" name="email"><br>
        <input type="password" name="senha"><br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
        // Capturar a URL e o Código
        if(isset($_GET['cod']))
        {
            $codigo = filter_var($_GET['cod'], FILTER_SANITIZE_NUMBER_INT);
            if($codigo == 1)
            {
                echo "Cadastrado com Sucesso !!";
            }else{
                echo $codigo;
            }
        }
       
    ?>
</body>
</html>