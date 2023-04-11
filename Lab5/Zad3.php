<!DOCTYPE html>
<html>
<head>
    <title>Zad 3</title>
</head>
<body>
    <?php
        function listAddresses()
        {
            if(!file_exists("./fileWithAddresses.txt")) return;
            if(!$file=fopen("./fileWithAddresses.txt","r"))
            {
                echo "Nie można otworzyć pliku";
                return;
            }
            echo "<ul>";
            while (!feof($file)) {
                $str=fgets($file);
                $str=nl2br($str);
                $arr = explode(';', $str);
                $link=$arr[0];
                $des=$arr[1];
                echo "<li><a href=\"$link\">$des</a></li>";
            }
            echo "</ul>";
        }
        listAddresses();
    ?>
    <a href=""></a>
</body>
</html>