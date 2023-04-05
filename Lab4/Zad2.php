<!DOCTYPE html>
<html>
<head>
	<title>Zad 2</title>
</head>
<body>
	<form method="POST" action="Zad2.php">
		<table>
			<tr>
				<td>Podaj liczbe:</td>
				<td>
					<input type="number" name="nr">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit">
				</td>
			</tr>
		</table>
	</form>
	<?php

	function klasyk($nr)
	{
		$temp = 1;
		for($i=1;$i<=$nr;$i++)
		{
			$temp*=$i;
		}
		return $temp;
	}

	function rekurencja($nr)
	{
		if($nr==0) return 1;
		return $nr*rekurencja($nr-1);
	}

	if(!empty($_POST['nr']))
	{
		$temp = $_POST['nr'];

		$time1=microtime(true);
		
		echo $temp."! = ".klasyk($temp)."<br>";
		for($i=0;$i<100;$i++)
		{
			klasyk($temp);
		}

		$time2=microtime(true);
		$result1=round($time2-$time1,5);
		echo "Czas = ".$result1."<br>";
		
		$time1=microtime(true);

		echo $temp."! = ".rekurencja($temp)."<br>";
		for($i=0;$i<100;$i++)
		{
			rekurencja($temp);
		}

		$time2=microtime(true);
		$result2=round($time2-$time1,5);
		echo "Czas = ".$result2."<br>";

		if($result2>$result1)
		{
			echo "funkcja kożystajaca z rekurencja nie była szybsza";
		}
		else
			echo "funkcja kożystajaca z rekurencja była szybsza";
	}

	?>
</body>
</html>