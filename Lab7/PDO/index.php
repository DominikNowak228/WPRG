<html>
    <head>
        <title>Strona główna</title>
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
            $carsQuery = $db->query("SELECT * FROM samochody ORDER BY cena ASC LIMIT 5");
            $cars = $carsQuery->fetchAll();
        ?>

        <table>
            <thead>
                <tr>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Cena</th>
                    <th>Rok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($cars as $car)
                        echo '<tr><td>'.$car['marka'].'</td><td>'.$car['model'].'</td><td>'.$car['cena'].'</td><td>'.$car['rok'].'</td></tr>';
                ?>
            </tbody>
        </table>

    </body>
</html>