<!DOCTYPE html>
<html>
<head>
	<title>Zad 1 Dodaj samochód</title>
</head>
<body>
	<table>
		<tr>
			<th><a href="zad1.1.php">Strona główna</a></th>
			<th><a href="zad1.2.php">Wszystkie samochody</a></th>
			<th><a href="zad1.3.php">Dodaj samochód</a></th>
		</tr>
	</table>
	<form action="zad1.5.php" method="post">
		<table>
			<tr>
				<th>Marka:</th>
				<td><input type="text" name="marka" required></td>
			</tr>
			<tr>
				<th>Model:</th>
				<td><input type="text" name="model"required></td>
			</tr>
			<tr>
				<th>Cena:</th>
				<td><input type="number" name="cena"required></td>
			</tr>
			<tr>
				<th>Rok:</th>
				<td><input type="number" name="rok"required></td>
			</tr>
			<tr>
				<th>Opis:</th>
				<td><textarea name="opis"required></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name=""></td>
			</tr>
		</table>
	</form>
</body>
</html>