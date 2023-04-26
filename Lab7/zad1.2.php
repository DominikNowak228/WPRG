<!DOCTYPE html>
<html>
<head>
	<title>Zad 1 Wszystkie samochody</title>
</head>
<body>
	<table>
		<tr>
			<th><a href="zad1.1.php">Strona główna</a></th>
			<th><a href="zad1.2.php">Wszystkie samochody</a></th>
			<th><a href="zad1.3.php">Dodaj samochód</a></th>
		</tr>
	</table>

	<?php
		if(!$db_lnk = mysqli_connect("127.0.0.1","root","","mojaBaza"))
			exit("Wystąpił błąd podczas próby połączenia z serwerem <br>");

		$query = "SELECT * from samochody order by rok";

		if(!$result = mysqli_query($db_lnk,$query))
		{
			mysqli_close($db_lnk);
			echo "Błąd w zapytaniu<br>";
			exit();
		}
		echo "<table>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Marka</th>";
		echo "<th>Model</th>";
		echo "<th>Cena</th>";
		echo "<th>Rok</th>";
		echo "</tr>";
		
		echo "<form method=\"GET\" action=\"zad1.4.php\">";
		$i=1;
		while ($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>$row[0]</td>";$i++;
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
		
			echo "<td><button type=\"submit\" name=\"id_request\" value=\"$row[0]\">Szczegóły</button></td>";
			echo "</tr>";
		}
		echo "</form>";
		echo "</table>";

	?>
	
</body>
</html>