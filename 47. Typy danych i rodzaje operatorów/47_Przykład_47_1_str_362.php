<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Przykład 47.1 - Typy zmiennych i rodzaje operatorów</title>
	</head>

	<body>
		<?php
			$x=18;						//x jest zmienną numeryczną
			$tekst="Anna Kowalska";		//tekst jest łańcuchem znaków, czyli tekstem
			$y=$x-5;					//zmiennej y jest przypisana wartość zmiennej x pomniejszoną o 5
			echo "Witamy na stronie użytkownika:<b> $tekst </b>";
			echo "<br>Wykonujemy dodawanie liczb x oraz y: <br>";
			echo "$x + $y = ";
			echo $x + $y;
			echo "<br>Za pomocą jednej ilustracji echo możemy otrzymać to samo:<br>";
			echo "$x + $y = ".($x + $y);
		?>
	</body>

</html>