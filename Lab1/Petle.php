<!DOCTYPE html>
<html>
<head>
	<title>Pętle</title>
</head>
<body>
	<form method="POST",action="Petle.php">
		
		<h2>
			Zadanie 3.1
		</h2>
		<p>
			Napisz funkcję, zwracającą maksymalny element tablicy losowych liczb (bez używaniagotowych funkcji PHP) w 4 wersjach: for, while, do while, foreach.
		</p>
		<p>
			<?php
				function randomArray()
				{
					for($i=0;$i<10;$i++)
						$arr[$i]=rand(0,99);
					print_r($arr);		
					return $arr;
				}

				$arr = randomArray();				//1
				$max=$arr[0];						//2
				foreach($arr as $temp)				//3
					$max=($max<$temp)?$temp:$max;	//4

				echo "<br>Max = ".$max;
			?>
		</p>

		<h2>
			Zadanie 3.28
		</h2>
		<p>
			Zmodyfikuj funkcję z zadania 1.1, by przyjmowała argument - liczbę rzutów kostką. Izwracała tablicę wyników.
		</p>
		<p>
			<table>
				<tr>
					<td>Ilość rzutów </td>
					<td><input type="number" name="throw"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</p>
		<p>
			<?php
				function arrayThrow($n)
				{
					for($i=0;$i<$n;$i++)
						$arr[$i]=rand(1,6);
					print_r($arr);		
				}

				if(!empty($_POST["throw"]) && $_POST["throw"]>0)
				 	arrayThrow($_POST["throw"]);
			?>
		</p>

		<h2>
		Zadanie 3.3
		</h2>
		<p>
			Napisz funkcję, która wyświetli w konsoli tabliczkę mnożenia w formie kwadratu o bokupodanym jako parametr.
		</p>
		<p>
			<table>
				<tr>
					<td>Podaj n: </td>
					<td><input type="number" name="n"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"></td>
				</tr>
			</table>
		</p>
		<p>
			<?php
			function multiplicationTable($n)
			{
				for($i=0;$i<$n;$i++)
				{
					for($j=0;$j<$n;$j++)
						echo ($i+1)*($j+1)."  ";
					echo "<br>";
				}	
			}

			

			if(!empty($_POST["n"]) && $_POST["n"]>0)
				 	multiplicationTable($_POST["n"]);
			?>
		</p>

		<h2>Zadanie 3.4</h2>
		<P>
			Napisz funkcję, która sprawdzi, czy dana liczba jest liczbą pierwszą.W swoim programie umieść zmienną, która policzy wszystkie iteracje pętli, potrzebne dowykonania obliczeń. Spróbuj tak zmodyfikować program, by było potrzeba jak najmniejiteracji (przy zachowaniu prawidłowego działania).
		</P>
		<p>
			<table>
				<tr>
					<td>Podaj liczbe: </td>
					<td><input type="number" name="liczba"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name=""></td>
				</tr>
			</table>

			<?php
			function prime($n) 
			{
				$temp=0;
				  if ($n == 1) return false;
				  for ($i = 2; $i <= sqrt($n); $i++) {
				  	$temp++;
				    if ($n % $i == 0) return false;
				  }
				  echo "Liczba iteracji pętli: ".$temp."<br>";
				  return true;
			}

				if(!empty($_POST["liczba"]) && $_POST["liczba"]>0)
				{
				 	if(prime($_POST["liczba"]))
				 		echo "liczba ".$_POST["liczba"]." jest pierwsza";
				 	else
				 		echo "liczba ".$_POST["liczba"]." nie jest pierwsza";
				}

			?>
		</p>
	</form>

</body>
</html>