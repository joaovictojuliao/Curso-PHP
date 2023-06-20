<?php 

    //constante - não pode ser alterada
    const PAIS = "Brasil";

    //variavel - pode ser alterada - sempre começam com $ 
    $nome = "Paulo";

    //string, int, double, bool
    
    $frase = "Imobiliaria Levic";
    $ano = date('Y');

    echo <<< imobiliaria
    Fala galera, lembrando que a $frase estará presente
    no evento mais espetacular de
            $ano

    Contamos com a sua presença! 
    imobiliaria;
?>