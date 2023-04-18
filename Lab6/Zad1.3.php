<?php
	session_start();
	
	for($i=1;$i<$_SESSION['other'];$i++)
	{
		unset($_SESSION["imie"][$i-1]);
		unset($_SESSION["nazwisko"][$i-1]);
		unset($_SESSION["poczta"][$i-1]);
	}

	unset($_SESSION['name']);
	unset($_SESSION['surname']);
	unset($_SESSION['nrCard']);
	unset($_SESSION['email']);
	unset($_SESSION['phone']);
	unset($_SESSION['other']);

	if(!isset($_COOKIE[session_name()])){
		setcookie(session_name(),'',time()-360);
	}

	session_destroy();

	header("Location: ./Zad1.php");
	exit();
?>