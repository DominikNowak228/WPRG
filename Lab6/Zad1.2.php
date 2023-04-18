<?php
session_start();

$imie_arr = $_POST["name"];
$nazwisko_arr = $_POST["surname"];
$email_arr = $_POST["email"];

for($i=1;$i<$_SESSION['other'];$i++)
{
	$_SESSION["imie"][$i-1]=$imie_arr[($i-1)];
	$_SESSION["nazwisko"][$i-1]=$nazwisko_arr[($i-1)];
	$_SESSION["poczta"][$i-1]=$email_arr[($i-1)];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zad 1</title>
</head>
<body>
	<h1>Podsumowanie</h1>
	<?php
	echo "<table>";
	echo "<tr>";
	echo "<th colspan=\"2\">Włąściciel biletu</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Imie:</td>";
	echo "<td>".$_SESSION["name"]."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Nazwisko:</td>";
	echo "<td>".$_SESSION["surname"]."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Dane karty:</td>";
	echo "<td>".$_SESSION["nrCard"]."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>E-mail:</td>";
	echo "<td>".$_SESSION["email"]."</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Nr.tel:</td>";
	echo "<td>".$_SESSION["phone"]."</td>";
	echo "</tr>";

	if($_SESSION["other"]!=1)
	{
		for($i=1;$i<$_SESSION["other"];$i++)
		{
		echo "<tr>";
		echo "<th colspan=\"2\">Osoba nr.$i</th>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Imie:</td>";
		echo "<td>".$_SESSION["imie"][($i-1)]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Nazwisko:</td>";
		echo "<td>".$_SESSION["nazwisko"][$i-1]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>E-mail</td>";
		echo "<td>".$_SESSION["poczta"][$i-1]."</td>";
		echo "</tr>";
		}
	}
	echo "</table>";
	?>

	<a href="Zad1.3.php">Zmów nowe bilety</a>

</body>
</html>