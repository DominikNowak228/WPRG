<!DOCTYPE html>
<html>
<head>
	<title>Zad 1</title>
</head>
<body>
	<?php

		if(!$db_lnk = mysqli_connect("127.0.0.1","root","","mojaBaza"))
			exit("Wystąpił błąd podczas próby połączenia z serwerem <br>");

		$query = "SELECT * from samochody WHERE id = $_GET[id_request]";

		if(!$result = mysqli_query($db_lnk,$query))
		{
			mysqli_close($db_lnk);
			echo "Błąd w zapytaniu<br>";
			exit();
		}

		$row = mysqli_fetch_row($result);
		echo "<table>";
		echo "<tr>";
		echo "<th>ID: </th>";
		echo "<td>$row[0]<td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Marka: </th>";
		echo "<td>$row[1]<td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Model: </th>";
		echo "<td>$row[2]<td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Cena: </th>";
		echo "<td>$row[3]<td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Rok: </th>";
		echo "<td>$row[4]<td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Opis: </th>";
		echo "<td>$row[5]<td>";
		echo "<tr>";
		echo "</table>";
	


	echo "<p>";
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_____<br>";
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp//&nbsp&nbsp&nbsp  ||&nbsp\ \<br>";
	echo "&nbsp&nbsp&nbsp&nbsp_____//___||_\ \___<br>";
	echo "&nbsp&nbsp&nbsp)&nbsp&nbsp&nbsp_&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\<br>";
	echo "&nbsp&nbsp&nbsp&nbsp|_/ \________/ \___|<br>";
	echo "___\_/________\_/______<br></p>";
//		   _______
//	      //  ||\ \
//	_____//___||_\ \___
//	)  _          _    \
//	|_/ \________/ \___|
//	___\_/________\_/______
	?>
	<form action="zad1.1.php" method="get">
  		<button type="submit">Przejdź do głównej strony</button>
	</form>
</body>
</html>