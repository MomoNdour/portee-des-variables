<?php
    // On déclare $a dans l'espace global
    $a = 10;

    // Utilisation d'une variable static :)
    function test()
    {
        static $a = 10;
        echo  $a;
    }
    // La variable static se souviens de la valeur de a 
    echo "La variable static se souviens vraiment de la valeur de a :".$a;
?>