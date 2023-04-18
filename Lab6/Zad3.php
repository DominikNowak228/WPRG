<?php
$cookieName = "licznik";
$cookieExpiryTime = time() + (5); // 5s

if(!isset($_COOKIE[$cookieName])) {
    $count = 1;
    setcookie($cookieName, $_SERVER['REMOTE_ADDR'], $cookieExpiryTime);
} else {
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $previousIPs = explode(",", $_COOKIE[$cookieName]);
    if (!in_array($ipAddress, $previousIPs)) {
        array_push($previousIPs, $ipAddress);
    }
    $count = count($previousIPs);
    setcookie($cookieName, implode(",", $previousIPs), $cookieExpiryTime);
}

echo "Liczba odwiedzin: ".$count;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Zad 2</title>
</head>
<body>
</body>
</html>