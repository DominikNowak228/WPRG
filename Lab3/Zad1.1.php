<!DOCTYPE html>
<html>
<head>
	<title>Zad 1.1</title>
</head>
<body>
	<?php
		echo "<ul>";

		echo "<li>";
		echo "Imię i nazwisko: ".$_POST['name'];
		echo "</li>";

		echo "<li>";
		echo "Adres e-mail: ".$_POST['email'];
		echo "</li>";


		if(!empty($_POST['phonenr']))
		{
		echo "<li>";
		echo "Teloefon kontaktoowy: ".$_POST['phonenr'];
		echo "</li>";
		}

		echo "<li>";
		echo "Wyiberz temat: ".$_POST['topic'];//zrobić lepiej
		echo "</li>";

		echo "<li>";
		echo "Treść wiadomośći".$_POST['message'];
		echo "</li>";

		echo "<li>";
		
		$forma="";
		if(!empty($_POST['preferEmail'])&&!empty($_POST['preferPhone'])) 
		{
			$forma="E-mail i Teloefon";
		}
		else if (!empty($_POST['preferEmail'])) 
		{
			$forma = "email";
		}
		else if (!empty($_POST['preferPhone']))
		{
			$forma = "Telefon";
		}
		echo "Preferowana forma kontaktu: ".$forma;

		echo "</li>";

		echo "<li>";
		echo "Posiadasz jużstronę www: ".$_POST['havingWebsite'];//zrobić lepiej
		echo "</li>";

		echo "<li>";
		echo "Załączniki: ".$_POST['files'];//zrobić lepiej
		echo "</li>";

		echo "</ul>";
	?>
</body>
</html>