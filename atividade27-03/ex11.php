<?php 

date_default_timezone_set('America/Sao_Paulo');

?>

<!DOCTYPE html>

<html>

	<head><title>Data atual</title></head>

	<body>

		<?php

		echo "<p><b>Data atual:</b></p>";

		

		function obterData(){

			$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

			$m = date("n");

			

			$semana = array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");

			$s = date("w");

			

			$mensagem = "Hoje é " . $semana[$s];

			$mensagem = $mensagem . ", " . date("d") . " de ";

			$mensagem = $mensagem . $meses[$m - 1] . " de " . date("Y") . ". ";

			

			switch($m){

				case 12:

				case 1:

				case 2:

					$mensagem = $mensagem . " É verão!";

					break;

				case 3:

				case 4:

				case 5:

					$mensagem = $mensagem . " É Outono!";

					break;

				case 6:

				case 7:

				case 8:

					$mensagem = $mensagem . " É Inverno!";

					break;

				case 9: 

				case 10:

				case 11:

					$mensagem = $mensagem . " É Primavera!";

					break;

			}

			

			return $mensagem;

		}

		

		$frase = obterData();

		echo "<p>$frase</p>";

		?>

	</body>

</html>