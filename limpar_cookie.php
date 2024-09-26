<?php
    // Remove o cookie idiomaEscolhido, configurando seu tempo de expiração no passado
    setcookie("idiomaEscolhido", "", time() - 3600);

    header("Location: index.php");
    exit();
?>
