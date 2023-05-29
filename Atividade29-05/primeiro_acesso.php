<?php
    date_default_timezone_set("America/Sao_Paulo");
    setcookie("ultimoacesso", time());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Cookie Salvo</p>
    <a href="segundo_acesso.php">Segunda página</a>
</body>
</html>