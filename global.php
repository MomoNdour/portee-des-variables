<?php
    // On déclare $a dans l'espace global
    $a = 10;
    // On tente d'utiliser $a dans une fonction (espace local)
    function test()
    {
        global $a;
        echo "La valeur de a est (avec global) :".$a;
    }
    test();
?>