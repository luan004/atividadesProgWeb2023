<!DOCTYPE html>
<html lang="en">
<head>
    <title>Usando Arrays em PHP</title>
</head>
<body>
    <h1>Alunos do curso Técnico em Informática</h1>

    <?php
        $nomes = ['Bruno', 'José', 'João', 'Márcia', 'Mônica'];

        function exibirDados($nomes) {
            $c = 0;
            while ($c < count($nomes)) {
                echo "<p>$nomes[$c]</p>";
                $c++;
            }
        }
        exibirDados($nomes);
    ?>
    
</body>
</html>