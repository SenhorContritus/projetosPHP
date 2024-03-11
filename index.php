<?php
    #exercicio 1 
    echo "Exercicio 1: <br>";

    $php1 = "1";
    $php1 += 3;
    $php1 /= 3;
    $php2 = (int)$php1;#transforma $php2 em int

    echo $php2;

    #exercicio 2

    echo "<br> Exercicio 2: <br>";

    $str1 = "Jefferson";
    $srt2 = "Caminhoes";
    $str3 = $str1.$srt2;#concatena as strings

    echo $str3;

    #exercicio 3

    echo "<br> Exercicio 3: <br>";

    $php3 = 4;
    $php4 = ($php2 <= $php3? "Menor ingual": "Maior");

    echo $php4;


?>