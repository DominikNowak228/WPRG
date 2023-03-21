<!DOCTYPE html>
<html>
<head>
	<title>Lab 1-2</title>
</head>
<body>

	<form method="post" action="Tablice.php">

		<h2>Zadanie 2.1</h2>
		<hr>
		<p>
		Napisz funkcję, która zawiera w sobie tablicę losowych liczb. Funkcja powinna zwracaćwartość elementu tablicy o indeksie podanym jako argument
		</p>
		<hr>

		<table>
			<tr>
				<td>
					Podaj element (1-19): 
				</td>
				<td>
					<input type="number" name="nr">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<input type="submit" name="">
				</td>
			</tr>
		</table>

		<?php
		function randomArray($a)
		{
			for($i=0;$i<20;$i++)
				$arr[]=rand(1,100);
			return $arr[$a];
		}

		if(!empty($_POST['nr']))
			if($_POST['nr']>=0&&$_POST['nr']<=19)
				echo randomArray($_POST['nr']);
		echo "<br>// Nie wiem jak obsłużyć 0 z jednej strony funkcja empty traktuje jak by było pusty, a z drugiej pusty jest traktowany jako 0"
		?>
		
		<h2>Zadanie 2.2</h2>
		<hr>
		<p>
			Napisz program “jakiej jestem narodowości” z użyciem tablic asocjacyjnych. Programpowinien przyjmować nazwę kraju, a następnie w zawartej w nim tablicy sprawdzić, jaknazywa się odpowiednia narodowość - i tę narodowość zwrócić.
		</p>
		<hr>
		<table>
			<tr>
				<td>
					Jakiej jesteś narodowości
				</td>
				<td>
					<select name="narodowosc">
						<option value="Polakiem">Polakiem</option>
						<option value="Amerykaninem">Amerykaninem</option>
						<option value="Niemcem">Niemcem</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="Submit" name="">
				</td>
			</tr>
		</table>
		<?php 
		$arrayName = array('Polakiem' => "Polska",'Amerykaninem'=>"USA",'Niemcem'=>'Niemcy' );

		echo "Kraj twojego pochodzenia to: ".$arrayName[$_POST['narodowosc']];
		?>
	</form>
</body>
</html>