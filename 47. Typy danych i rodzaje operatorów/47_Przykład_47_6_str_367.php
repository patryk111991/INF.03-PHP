<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Przykład 47.6 - Typy zmiennych i rodzaje operatorów</title>
	</head>

	<body>
		<?php
			$pytanie="<br>Czy znasz odpowiedź?";
			$zagadka= <<<EOD;
			Co stanie się połowę większe, gdy postawimy to do góry nogami? $pytanie;
			EOD;
			echo $zagadka;
		?>
		
	</body>

</html>