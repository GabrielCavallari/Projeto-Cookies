<?php
    if(isset($_COOKIE["idiomaEscolhido"]))  {
        if($_COOKIE["idiomaEscolhido"] == "ReinoUnido") {
            $texto ="<h1>OUR PLANT</h1>
                    <p>The XXX INDÚSTRIA DE MÁQUINAS LTDA, was founded on 1970, and became
                    the most important and traditional supplyer of BAGGING MACHINES in Brazil. </p>";
            
            $arquivo = fopen("versao.txt", "w");

            fwrite($arquivo, $texto);

            fclose($arquivo);
        }

        elseif($_COOKIE["idiomaEscolhido"] == "Brasil") {
            $texto ="<h1>EMPRESA</h1>
                    <p>A XXX INDÚSTRIA DE MÁQUINAS LTDA, foi fundada em 1970, e tornou-se o
                    mais importante e tradicional fabricante de máquinas ensacadeiras no Brasil. </p>";
            
            $arquivo = fopen("versao.txt", "w");

            fwrite($arquivo, $texto);
            
            fclose($arquivo);
        }
        
        elseif($_COOKIE["idiomaEscolhido"] == "Espanha") {
            $texto ="<h1>EMPRESA</h1>
                    <p>La XXX INDÚSTRIA DE MÁQUINAS LTDA, fue fundada en 1970, y sé a convertido
                    en la más importante y tradicional fabrica de MÁQUINAS ENSACADORAS em Brasil </p>";

            $arquivo = fopen("versao.txt", "w");

            fwrite($arquivo, $texto);
            
            fclose($arquivo);
        }
        else {
            echo "O cookie não existe. ";
        }
    }
?>