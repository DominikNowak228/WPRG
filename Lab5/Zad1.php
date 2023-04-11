<!DOCTYPE html>
<html>
<head>
	<title>Zad1</title>
</head>
<body>

	<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
    <input type="file" name="plik">
    <input type="submit" name="zatwierdz" value="Wyślij plik">
</form>
<?php
if(isset($_POST["zatwierdz"]))
{
    if(isset($_FILES["plik"]))
    {
        
    	if(!$fileDescriptor = fopen($_FILES["plik"]["tmp_name"], "r"))
    	{
    		echo "Nie mogę otworzyć pliku";
    	}
    	else
    	{    			
    		$i=0;
    		while(!feof($fileDescriptor))
    		{
    			$str = fgets($fileDescriptor);
    			$temp[$i++] = nl2br($str);
    		}
    		for($i=count($temp)-1;$i>=0;$i--)
    		{
    			echo $temp[$i];
    			if($i==count($temp)-1)
    				echo "<br>";
    		}
    		fclose($fileDescriptor);
    	}

    }
}
?>

</body>
</html>

