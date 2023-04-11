<!DOCTYPE html>
<html>
<head>
	<title>Zad 4</title>
</head>
<body>
	<?php
		function czyNaLiscie()
		{
			$clientAddress =$_SERVER['REMOTE_ADDR'];

			if(!file_exists("blacklist.txt"))
			{
				header("Location: ./Zad4.2.php");
				exit();
			}
			if(!$file=fopen("./blacklist.txt","r"))
			{
				header("Location: ./Zad4.2.php");
				exit();
			}

			$i=0;
			while(!feof($file))
			{
				$arr[$i]=fgets($file);
				$arr[$i]=nl2br($arr[$i]);
				$i++;
			}

			for($i=0;$i<count($arr);$i++)
			{
				if($arr[$i]==$clientAddress)
				{
					header("Location: ./Zad4.1.php");
					exit();
				}
			}
			header("Location: ./Zad4.2.php");
			exit();
		}

		czyNaLiscie();
	?>
</body>
</html>