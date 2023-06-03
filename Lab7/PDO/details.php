<?php
if(!isset($_GET['id'])){
    header("Location: list.php");
    exit();
}
require_once 'database.php';
$id = $_GET['id'];
$query = $db->query('SELECT * FROM samochody WHERE id='.$id);
$car = $query->fetch();
echo<<<END

<table>
    <tr>
        <td>ID:</td>
        <td>$car[0]</td>
    </tr>
    <tr>
        <td>Marka:</td>
        <td>$car[1]</td>
    </tr>
    <tr>
        <td>Model:</td>
        <td>$car[2]</td>
    </tr>
    <tr>
        <td>Cena:</td>
        <td>$car[3]</td>
    </tr>
    <tr>
        <td>Rok:</td>
        <td>$car[4]</td>
    </tr>
    <tr>
        <td>Opis:</td>
        <td>$car[5]</td>
    </tr>
</table>
<p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_____<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp//&nbsp&nbsp&nbsp  ||&nbsp\ \<br>
&nbsp&nbsp&nbsp&nbsp_____//___||_\ \___<br>
&nbsp&nbsp&nbsp)&nbsp&nbsp&nbsp_&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp\<br>
&nbsp&nbsp&nbsp&nbsp|_/ \________/ \___|<br>
___\_/________\_/______<br></p>
END
//		   _______
//	      //  ||\ \
//	_____//___||_\ \___
//	)  _          _    \
//	|_/ \________/ \___|
//	___\_/________\_/______
?>
<form actio="index.php">
    <input type="submit" value="Powrót do strondy głónej">
</form>
