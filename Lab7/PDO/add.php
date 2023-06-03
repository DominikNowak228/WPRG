<?php
if(isset($_POST['marka'])){
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];
    require_once 'database.php';

    $query = $db->prepare('INSERT INTO samochody VALUES (NULL,:marka,:model,:cena,:rok,:opis)');
    $query-> bindValue(':marka',$marka,PDO::PARAM_STR);
    $query-> bindValue(':model',$model,PDO::PARAM_STR);
    $query-> bindValue(':cena',$cena,PDO::PARAM_STR);
    $query-> bindValue(':rok',$rok,PDO::PARAM_INT);
    $query-> bindValue(':opis',$opis,PDO::PARAM_STR);
    $query->execute();
}
?>
<html>
    <head>
        <title>Dodaj samochód</title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <a href="index.php">Strona główna</a>
                </td>
                <td>
                    <a href="list.php">Wszystkie samochody</a>
                </td>
                <td>
                    <a href="add.php">Dodaj samochód</a>
                </td>
            </tr>
        </table>


        <form method="post">
            <table>
                <tr>
                    <th>Marka:</th>
                    <td><input type="text" name="marka" required></td>
                </tr>
                <tr>
                    <th>Model:</th>
                    <td><input type="text" name="model"required></td>
                </tr>
                <tr>
                    <th>Cena:</th>
                    <td><input type="text" name="cena"required></td>
                </tr>
                <tr>
                    <th>Rok:</th>
                    <td><input type="number" name="rok"required></td>
                </tr>
                <tr>
                    <th>Opis:</th>
                    <td><textarea name="opis"required></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name=""></td>
                </tr>
            </table>
        </form>
    </body>
</html>