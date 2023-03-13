<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php
        $i = $_GET["idade"];

        if($i > 17) {
            echo "<p>Você é <b>maior</b> de idade!</p>";
        }
        else {
            echo "<p>Você é <b>menor</b> de idade...</p>";
        }
    ?>

    <p>Idade informado: <?=$i?></p>
</body>
</html>