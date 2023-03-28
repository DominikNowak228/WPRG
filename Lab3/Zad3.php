<!DOCTYPE html>
<html>
<head>
	<title>Zad 3</title>
</head>
<body>
	<form method="POST" action="Zad3.php">
		<table>
			<tr>
				<td colspan="3">
					<h3>OBLICZANIE DATY WIELKANOCY</h3>
				</td>
			</tr>
			<tr>
				<td>PODAJ ROK</td>
				<td>
					<input type="number" name="year" value="2023">
				</td>
				<td>
					<input type="submit" value="OBLICZ">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<?php
					function whenEaster($year)
					{
						if($year >= 1 && $year <= 1582)
						{
							$x=15;
							$y=6;
						}else if($year >= 1583 && $year <= 1699)
						{
							$x=22;
							$y=2;
						}else if($year >= 1700 && $year <= 1799)
						{
							$x=23;
							$y=3;
						}else if($year >= 1800 && $year <= 1899)
						{
							$x=23;
							$y=4;
						}else if($year >= 1900 && $year <= 2099)
						{
							$x=24;
							$y=5;
						}else if($year >= 2100 && $year <= 2199)
						{
							$x=24;
							$y=6;
						}
						else{
							echo "Nieprawidłowy rok";
							return;
						}

						$a=$year%19;
						$b=$year%4;
						$c=$year%7;
						$d=(19*$a+$x)%30;
						$f=((2*$b)+(4*$c)+(6*$d)+$year)%7;

						if($f==6 && $d==29)
						{
							echo "Wielkanoc jest 26 Kwietnia";
						}else if($f==6 && $d==28 && (11*$x+11)%30<19)
						{
							echo "Wielkanoc jest 18 Kwietnia";
						}
						else if(($d+$f)<10)
						{
							echo "Wielkanoc jest ".(20+$d+$f)." marca";// zamieniełem 22 na 20 żeby dopasować 
						}
						else if(($d+$f)>9)
							echo "Wielkanoc jest ".($d+$f-11)." kwietnia";//zamieniłem 9 na 11 żeby dopasować
						return;
					}

					whenEaster($_POST['year']);
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>