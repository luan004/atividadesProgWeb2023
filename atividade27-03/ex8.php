<?php
    function validarDados($v1, $v2, $v3) {
        if ($v1 < $v2 && $v2 <= $v3) {
            return true;
        } else {
            return false;
        }
    }
    echo '<p>'.validarDados(1,2,3).'</p>'
?>