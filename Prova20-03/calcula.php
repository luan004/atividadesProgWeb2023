<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Calcula</title>
</head>

<body>
    <?php
    $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    $v3 = $_GET["v3"];

    $soma = $v1 + $v2 + $v3;

    echo '<p>A soma obtida foi de: ' . $soma . '</p>'
    ?>
</body>

</html>