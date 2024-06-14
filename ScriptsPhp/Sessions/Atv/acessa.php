<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Você está no ".$_SESSION['pais'];
        ?>
    </body>
</html>