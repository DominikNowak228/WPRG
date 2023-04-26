<!DOCTYPE html>
<html>
<head>
	<title>zad 1</title>
</head>
<body>
	<?php
	$marka= $_POST['marka'];
	$model= $_POST['model'];
	$cena= $_POST['cena'];
	$rok= $_POST['rok'];
	$opis= $_POST['opis'];

	$query = "INSERT INTO samochody (marka,model,cena,rok,opis) VALUE (\"$marka\",\"$model\",$cena,$rok,\"$opis\")";
	if(!$db_lnk = mysqli_connect("127.0.0.1","root","","mojaBaza"))
		exit("Wystąpił błąd podczas próby połączenia z serwerem <br>");


	if(!$result = mysqli_query($db_lnk,$query))
		{
			mysqli_close($db_lnk);
			echo "Błąd w zapytaniu<br>";
			exit();
		}
	else
	{
		echo "Samochód dodany ";
	}
	

	?>
		<form action="zad1.1.php" method="get">
  		<button type="submit">Przejdź do głównej strony</button>
	</form>


</body>
</html>