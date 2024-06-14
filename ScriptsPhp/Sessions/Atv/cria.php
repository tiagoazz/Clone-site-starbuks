<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["pais"] = "França";
            echo "<script>alert('Pais Adicionado')</script>";
        ?>
    </body>
</html>