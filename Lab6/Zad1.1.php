<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['surname']=$_POST['surname'];
$_SESSION['nrCard']=$_POST['nrCard'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['other']=$_POST['other'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Zad 1.1</title>
</head>
<body>
	<?php
		if($_SESSION['other']==1)
		{
			header("Location: ./Zad1.2.php");
			exit();
		}
		echo "<form method=\"POST\" action=\"Zad1.2.php\">";
		echo "<table>";
		for($i=1;$i<$_SESSION['other'];$i++)
		{
			echo "<tr>";
			echo "<th clospam=\"2\">Osoba nr.$i</th>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Imie</td>";
			echo "<td><input type=\"text\" name=\"name[]\" required></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Nazwisko</td>";
			echo "<td><input type=\"text\" name=\"surname[]\" required></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>E-mail</td>";
			echo "<td><input type=\"email\" name=\"email[]\" required></td>";
			echo "</tr>";
		}
		echo "<tr>";
		echo "<td></td><td><input type=\"submit\"></td>";
		echo "</tr>";
		echo "</table>";
		echo "</form>";
	?>
</body>
</html>