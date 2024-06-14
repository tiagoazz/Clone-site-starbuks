<?php
    if(isset($_COOKIE['altitude']))
    {
        echo "A altitude é de ".$_COOKIE['altitude'];
    }
    else
    {
        echo "Cookie não encontrado !";
    }
?>