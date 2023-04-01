<?php
    function gerarNumeros() {
        $nums = array();
        for ($i = 0; $i < 10; $i++) {
          $nums[] = rand(0, 100);
        }
        return $nums;
    }
      
    $nums = gerarNumeros();
    $c = 0;

    while ($c < count($nums)) {
        echo "<p>$nums[$c]</p>";
        $c++;
    }
?>