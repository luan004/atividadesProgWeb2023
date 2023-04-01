<?php
    $a = 8;
    $b = 10;

    echo "<p>O valor de A é " . $a . "</p>";
    echo "<p>O valor de B é " . $b . "</p>";
    trocarValores();
    echo "<p>O novo valor de A é " . $a . "</p>";
    echo "<p>O novo valor de B é " . $b . "</p>";

    function trocarValores() {
        global $a, $b;
        $c = $a;

        $a = $b;
        $b = $c;
    }
?>