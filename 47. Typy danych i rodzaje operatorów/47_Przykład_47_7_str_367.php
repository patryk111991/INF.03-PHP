<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Przykład 47.7 - Typy zmiennych i rodzaje operatorów</title>
	</head>

	<body>
		<?php
			$liczba=5*5-16/8;
			$komunikat = <<<EOD
			Wartość zmiennej liczba wynosi $liczba
			EOD;
			echo $komunikat;
			$nowy = <<<'EOD'
			<br>Wartość zmiennej liczba wynosi $liczba
			EOD;
			echo $nowy;
		?>
		
	</body>

</html>