<!DOCTYPE html>
<html>
<head>
	<title>Lab 1</title>
</head>
<body>

<!--Zadanie-->

	<h2>Zadanie 1.1</h2>
	<p>Napisz funkcję zwracającą wynik - symulację rzutu kostką.</p>
	<?php 
		function throwDice()
		{
			return rand(1,6);
		}

		echo throwDice();
	?>

<!--Zadanie-->

	<h2>Zadanie 1.2</h2>
	<p>
	Napisz funkcję liczącą średnicę koła (w parametrze podajemy promień).
	</p>
	<form method="post" action="Funkcje.php">
		Promień: <input type="number" name="radius">
		<input type="submit" value="Oblicz"><br>
	
	<?php 
		function diameter($r)
		{
			return $r*2;
		}

		if($_POST['radius']!=0)
			echo "Średnica: ".diameter($_POST['radius']);

	?>

<!--Zadanie-->

	<h2>Zadanie 1.3</h2>
	<p>
		Program do cenzurowania.<br>
		Napisz funkcję, która zastąpi wszystkie niepożądane słowa gwiazdkami (*).<br>
		Funkcja ma zawierać w sobie tablicę niepożądanych słów. Zdanie do ocenzurowaniapowinna otrzymać w parametrze.
	</p>
	
		<table>
			<tr>
				<td>Tekst:</td>
				<td><input type="text" name="str"></td>
			</tr>
			<tr>
				<td>Słowa cenzury: </td>
				<td><input type="text" name="cstr"></td>
			</tr>
		</table>

		<input type="submit" value="Cenzuruj">
	
	<?php
		function censor($str,$cstr)
		{
			$array = explode(' ', $str);
			$cstr = explode(' ', $cstr);

			for($i=0;$i<count($array);$i++)
			{
				for($j=0;$j<count($cstr);$j++)
				{
					if($array[$i]==$cstr[$j])
					{
						$temp="";
						for($k=0;$k<strlen($array[$i]);$k++)
							$temp.="*";
						$array[$i]=$temp;
					}
				}
			}
			$str=implode(" ", $array);
			return $str;
		}
		if(!(($_POST['str']=='')||($_POST['cstr']=='')))
			echo censor($_POST['str'],$_POST['cstr']);
	?>

<!--Zadanie-->

	<h2>Zadanie 1.4</h2>
	<p>
		Napisz funkcję, która z podanego numeru PESEL odczyta datę urodzenia i zwróci ją wformacie dd-mm-rr
	</p>

	<input type="text" name="nr_pesel">
	<input type="submit" value="Oblicz"><br>
	<?php
		function pesel($pesel)
		{
			$result =$pesel[4].$pesel[5]."-";
			$temp = $pesel[2].$pesel[3];

			
			if($pesel[2]%2==0)
				$result.='0'.$pesel[3]."-";
			else
				$result.='1'.$pesel[3]."-";
			
			$result.=$pesel[0].$pesel[1];

			return $result;
		}
		
		if($_POST['nr_pesel']!='')
			echo "dd-mm-rr: ".pesel($_POST['nr_pesel']);
	
	?>

<!--Zadanie-->

	<h2>Zadanie 1.5</h2>
	<p>
		Kalkulator pól powierzchni (używając switch).
		<ul>
			<li>program zapytuje, jaką figurę chcemy obliczyć (trójkąt, prostokąt, trapez)</li>
			<li>w zależności od wybranej figury program uruchamia odpowiednią funkcję</li>
			<li>każda figura ma mieć swoją osobną funkcję, która zapyta o wymiary i policzy pole</li>
		</ul>
	</p>

	<table>
		<tr>
			<td>
				<label>
					<input type="radio" checked name="type" value="1">Trójkąt
				</label>
			</td>
			<td>
				<label>
					<input type="radio" name="type" value="2">Prostokąt
				</label>
			</td>
			<td>
				<label>
					<input type="radio" name="type" value="3">Trapez
				</label>
				
			</td>
		</tr>
		<tr>
			<td>A:</td>
			<td colspan="2"><input type="text" name="a" value="1"></td>
		</tr>
		<tr>
			<td>B:</td>
			<td colspan="2"><input type="text" name="b" value="1"></td>
		</tr>
		<tr>
			<td>H:</td>
			<td colspan="2"><input type="text" name="h" value="1"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="oblicz">
			</td>
		</tr>
	</table>


	<?php
		function triangleArea($a,$h){
			return $a*$h/2;
		}
		function rectangleArea($a,$b){
			return $a*$b;
		}
		function trapezoidalArea($a,$b,$h){
			return ($a+$b)*$h/2;
		}

		switch ($_POST['type']) {
			case 1:
				 echo triangleArea($_POST['a'],$_POST['b']);
				break;
			case 2:
				echo rectangleArea($_POST['a'],$_POST['b']);
			break;
			case 3:
				echo trapezoidalArea($_POST['a'],$_POST['b'],$_POST['h']);
			break;
			
		}

	?>

	</form>
</body>
</html>