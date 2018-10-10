<?php
    // On déclare $a dans l'espace global
    $a = 10;

    // On utilise $a dans l'espace global
    echo '$a contient :' .$a. '<br>';

    // On tente d'utiliser $a dans une fonction (espace local)
    function test()
    {
        echo 'La valeur de $a est : ' .$a;
    }
    test();
?>
