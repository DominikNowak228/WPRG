<html>
    <head>
        <title>Wszystkie samochody</title>
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

        <?php
            require_once "database.php";
            $carsQuery = $db->query("SELECT * FROM samochody ORDER BY rok ASC");
            $cars = $carsQuery->fetchAll();
        ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Cena</th>
                    <th>Rok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($cars as $car){
                        echo '<form action="details.php" method="GET">';
                        echo '<tr><td>'.$car['id'].'</td><td>'.$car['marka'].'</td><td>'.$car['model'].'</td><td>'.$car['cena'].'</td><td>'.$car['rok'].'</td>';
                        echo '<td><button value="'.$car['id'].'"name="id" type="submit">szczegóły</button></td></tr>';
                        echo '</form>';
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>