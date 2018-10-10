<?php
    // On déclare $a dans l'espace global
    $a = 10;
    // On tente d'utiliser $a dans une fonction (espace local)
    function test()
    {
        echo "J'ai utilisé GLOBALS ça me donne la valeur de a : ".$GLOBALS["a"];
    }
    test();
?>