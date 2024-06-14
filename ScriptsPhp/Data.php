<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data com PHP</title>
</head>

<body>
    <?php
        $dataDeHoje = date('d/m/Y');
    ?>
    <p align="center">Hoje é dia : <?php echo $dataDeHoje ?></p>
</body>

</html>