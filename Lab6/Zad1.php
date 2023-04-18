<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zad 1</title>
</head>
<body>
	<form method="POST" action="Zad1.1.php">
		<table>
		<tr>
			<td>Imie:</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td>Nazwisko:</td>
			<td><input type="text" name="surname" required></td>
		</tr>
		<tr>
			<td>Dane Karty:</td>
			<td><input type="text" name="nrCard" required></td>
		</tr>
		<tr>
			<td>E-email</td>
			<td><input type="email" name="email" required></td>
		</tr>
		<tr>
			<td>Nr.Tel</td>
			<td><input type="tel" name="phone" required></td>
		</tr>
		<tr>
			<td>Ile biletów</td>
			<td>
				<select name="other">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td><td><input type="submit" name=""></td>
		</tr>
	</table>	
	</form>
</body>
</html>