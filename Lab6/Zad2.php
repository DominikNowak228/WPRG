<?php
$cookieName = "licznik";
$cookieExpiryTime =time()+(5); //5s

if(!isset($_COOKIE["$cookieName"]))
{
	$conut = 1;
	setcookie($cookieName,$conut,$cookieExpiryTime);
}else
{
	$_COOKIE[$cookieName]++;
	$conut= $_COOKIE[$cookieName];
	setcookie($cookieName,$conut,$cookieExpiryTime);
	if($_COOKIE[$cookieName]>=5)
	{
		echo "komunikat dla wytrwałych"."<br>";
	}	
}
echo "Liczba odwiedzin: ".$conut."<br>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Zad 2</title>
</head>
<body>
</body>
</html>