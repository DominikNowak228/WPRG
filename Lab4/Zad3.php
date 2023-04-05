<!DOCTYPE html>
<html>
<head>
	<title>Zad 3</title>
</head>
<body>
	<form method="POST" action="Zad3.php">
		<table>
			<tr>
				<td>
					Ścieżka:
				</td>
				<td>
					<input type="text" name="path" required>
				</td>
			</tr>
			<tr>
				<td>
					Katalog:
				</td>
				<td>
					<input type="text" name="directory" required>
				</td>
			</tr>
			<tr>
				<td>
					Operacja:
				</td>
				<td>
					<select name="option">
						<option value="read">read</option>
						<option value="delete">delete</option>
						<option value="create">create</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>
	<?php

function OperacjeNaKatalogach($path, $dir, $option)
{
    if (preg_match('/\\\\$/', $path)) {
        $temp = $path . $dir;
    } else {
        $temp = "$path\\$dir";
    }
    switch ($option) {
        case 'read':
            if (!is_dir($temp)) {
                echo "Nie mogę otworzyć katalogu $dir!";
                return;
            }
            echo "<br>Zawartość katalogu<br>";
            $arr = scandir($temp);
            foreach ($arr as $file) {
                if ($file != "." && $file != "..") {
                    echo "$file <br>\n";
                }
            }
            break;
        case 'delete':
            if (is_dir($temp)) {
                $count = 0;
                $arr = scandir($temp);
                foreach ($arr as $file) {
                    if ($file != "." && $file != "..") {
                        $count++;
                    }
                }
                if ($count == 0) {
                    echo "Katalog został usunięty";
                    rmdir($temp);
                } else {
                    echo "Katalog nie jest pusty";
                }
            } else {
                echo "Nie ma takiego katalogu";
            }
            break;
        case 'create':
            if (is_dir($temp)) {
                echo "Katalog już istnieje";
            } else {
                if (mkdir($temp, 0777, true)) {
                    echo "Katalog został utworzony";
                } else {
                    echo "Błąd podczas tworzenia katalogu";
                }
            }
            break;
    }
}


	OperacjeNaKatalogach($_POST["path"],$_POST["directory"],$_POST["option"]);

	?>

</body>
</html>