<?php
function numerosImpares($t) {
    $num = 1;
    $cont = 0;
    echo "Os primeiros números ímpares são:";
    while ($cont < $t) {
        if ($num % 2 != 0) {
            echo "$num ";
            $cont++;
        }
        $num++;
    }
}
?>
