<?php
//création du tableau
$number = range(0, 100);
//array_map: on applique la méthode à tous les élements du tableau
$result= array_map('divisible', $number);
var_dump($result);


function divisible($var)
{
//    renvoi 1 si le chiffre est divible par 5
    $dec5 = 1-ceil($var/5 - floor($var/5));
//    renvoi 1 si le chiffre est divisible par  3
    $dec3 = 1-ceil($var/3 - floor($var/3));
//    renvoi vrai Et vrai c'est 1  si aucun des 2 au dessus est ok
    $noDec = ceil($var/5 - floor($var/5)) && ceil($var/3 - floor($var/3));

//    str_repeat repete la chaine en 1er arguement si 2 eme arg = 0 on revoi rien
        $test = str_repeat('Fizz', $dec3)
            . str_repeat( 'Buzz' , $dec5)
            . str_repeat( $var, $noDec) ;

    return $test ;
}

