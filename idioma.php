<?php
    $idioma = $_GET['idioma'];

    setcookie("idiomaEscolhido", $idioma, time() + (3600 * 24 * 3));

    header("Location:index.php");
?>