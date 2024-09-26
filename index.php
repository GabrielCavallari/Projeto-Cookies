<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto-Cookies</title>
    <link rel="stylesheet" href="estilo.css">

    <?php
        if(isset($_COOKIE["idiomaEscolhido"]))
            include "compara.inc";
        
    ?>
</head>
<body>
    <div class="titulo">
        <h1><center>BEM VINDO AO SITE WEBDESIGN EM FOCO</center></h1>
    </div>
    <br>
        <h2><center>ESCOLHA O IDIOMA PARA ENTRAR</center></h2>

    <br><br>
    
    <div class ="container">
        <a href = "idioma.php?idioma=ReinoUnido">
            <img src="reino-unido.png" alt="Bandeira Reino Unido">
        </a>
        <a href = "idioma.php?idioma=Brasil">
            <img src="brasil.png" alt="Bandeira Brasil">
        </a>
        <a href = "idioma.php?idioma=Espanha">
            <img src="espanha.png" alt="Bandeira Espanha">
        </a>
    </div>

    <br><br>

    <?php
        if (file_exists("versao.txt")) {
            $conteudo = file_get_contents("versao.txt");
            echo "<p>$conteudo</p>";
        }
    ?>
</body>
</html>