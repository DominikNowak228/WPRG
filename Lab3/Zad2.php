<!DOCTYPE html>
<html>
<head>
	<title>Zad 2</title>
</head>
<body>
<h1>Kalkulator</h1>
<hr>
<h2>Prosty</h2>
<form method="POST" action="Zad2.php">
	<input type="number" name="A" value="0">
	<select name="simple">
		<option value="Add">Dodawanie</option>
		<option value="Subtract">Odejmowanie</option>
		<option value="Multiply">Mnożenie</option>
		<option value="Divide">Dzielenie</option>
	</select>
	<input type="number" name="B" value="0">
	<p>
		<input type="submit" value="Oblicz">
	</p>
	<?php
	$A=$_POST['A'];
	$B=$_POST['B'];
	if(!($A==0&&$B==0))
	switch ($_POST["simple"]) {
		case 'Add':
			echo $A."+".$B."=".($A+$B);
			break;
		case 'Subtract':
			echo $A."-".$B."=".($A-$B);
			break;
		case 'Multiply':
			echo $A."*".$B."=".($A*$B);
			break;
		case 'Divide':
		if($_POST['B']==0)
			echo "Nie można dzielić przez 0";
		else
			echo $A."/".$B."=".($A/$B);
			break;
	}
	?>
	<hr>
	<h2>Zaawansowany</h2>
	<input type="text" name="C">
	<select name="Advanced">
		<option value="cos">Cosinus</option>
		<option value="sin">Sinus</option>
		<option value="tg">Tangens</option>
		<option value="binToDec">Binarne na dziesiętne</option>
		<option value="decToBin">Dziesiętne na binarne</option>
		<option value="decToHex">Dziesiętne na szesnastkowe</option>
		<option value="hexToDec">Szesnastkowe na dziesięnte</option>
		<option value="degToRad">Stopnie na radiany</option>
		<option value="radToDeg">Radiany na stopnie</option>
	</select>
	<p>
		<input type="submit" value="Oblicz">
	</p>
	<?php
		$C=$_POST['C'];

		switch ($_POST["Advanced"]) {
			case 'cos':
				echo "cos ".$C."=".COS($C);
				break;
			case 'sin':
				echo "sin ".$C."=".SIN($C);
				break;
			case 'tg':
				echo "tg ".$C."=".TAN($C);
				break;
			case 'binToDec':
				echo $C."<sub>2</sub>=".bindec($C)."<sub>10</sub>";
				break;
			case 'decToBin':
				echo $C."<sub>10</sub>=".decbin($C)."<sub>2</sub>";
				break;
			case 'decToHex':
				echo $C."<sub>10</sub>=".dechex($C)."<sub>16</sub>";
				break;
			case 'hexToDec':
				echo $C."<sub>16</sub>=".hexdec($C)."<sub>10</sub>";
				break;
			case 'degToRad':
				$stopnie=$C;
				$radiany=deg2rad($stopnie);
				echo $stopnie."<sup>o</sup>=".$radiany;
				break;
			case 'radToDeg':
				$radiany=$C;
				$stopnie=rad2deg($C);
				echo $radiany."=".$stopnie."<sup>o</sup>";
				break;
		}
	?>
</form>

</body>
</html>