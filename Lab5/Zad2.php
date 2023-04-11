<!DOCTYPE html>
<html>
<head>
    <title>Zad 2</title>
</head>
<body>
    <?php
    function counter()
    {

        if(file_exists("./licznik.txt"))
        {
            if($file=fopen("./licznik.txt","r+"))
            {
                $str = fgets($file);
                $var=intval(substr($str,17))+1;

                echo "Liczba odwiedzin: $var";
                fseek($file, 0);
                fwrite($file, "Liczba odwiedzin: $var");
                fclose($file);  
            }
            else
            {
                echo "Nie otworzono";
            }
        }
        else
        {
            $file=fopen("./licznik.txt", "w");
            echo "Liczba odwiedzin:  1";
            fwrite($file, "Liczba odwiedzin: 1");
            fclose($file);
        }

        
    }
    counter();

    ?>
</body>
</html>