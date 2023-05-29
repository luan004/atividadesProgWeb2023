
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Ayslan</title>
</head>
<body>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        $cookie = $_COOKIE["ultimoacesso"];
        
        $ano = date("Y", $cookie);
        $mes = date("m", $cookie);
        $dia = date("d", $cookie);
        $hora = date("H", $cookie);
        $minuto = date("i", $cookie);

        $mes_str = "";
        switch ($mes) {
            case 1:
                $mes_str = "Janeiro";
                break;
            case 2:
                $mes_str = "Fevereiro";
                break;
            case 3:
                $mes_str = "Março";
                break;
            case 4:
                $mes_str = "Abril";
                break;
            case 5:
                $mes_str = "Maio";
                break;
            case 6:
                $mes_str = "Junho";
                break;
            case 7:
                $mes_str = "Julho";
                break;
            case 8:
                $mes_str = "Agosto";
                break;
            case 9:
                $mes_str = "Setembro";
                break;
            case 10:
                $mes_str = "Outubro";
                break;
            case 11:
                $mes_str = "Novembro";
                break;
            case 12:
                $mes_str = "Dezembro";
                break;
        }
        echo "<p>A data atual do sistema é: ".$dia." de ".$mes_str  ." de ".$ano." | ".$hora.":".$minuto."</p>"
    ?>
</body>
</html>