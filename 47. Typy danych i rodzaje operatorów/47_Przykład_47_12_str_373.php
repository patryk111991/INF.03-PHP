<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Przykład 47.12 - Typy zmiennych i rodzaje operatorów</title>
	</head>

	<body>
		<?php
			$x=125;
			$y=41;
			$iloczyn_bitowy=$x & $y;
			$suma_bitowa=$x | $y;
			$roznica_sym=$x^$y;
			$negacja=~$x;
			echo "Iloczyn bitowy $x i $y wynosi $iloczyn_bitowy<br>";
			echo "Suma bitowa $x i $y wynosi $suma_bitowa<br>";
			echo "Różnica bitowa $x i $y wynosi $roznica_sym<br>";
			echo "Negacja $x wynosi $negacja<br>";
		?>
		
	</body>

</html>