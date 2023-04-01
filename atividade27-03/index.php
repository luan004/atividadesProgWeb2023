<!DOCTYPE html>
<html>
	<head><title>Exercícios</title></head>
	<body>
	<h1>Dados do array:</h1>
	<?php

		$var = array("Joaquim", "Amélia", "Caio", "Cristina", "Zélia");

		echo "<p>";

		for ($cont = 0; $cont < count($var); $cont++){

			echo $var[$cont] . "<br/>";

		}

		echo "</p>";

	?>
	</body>
</html>