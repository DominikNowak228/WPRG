<!DOCTYPE html>
<html>
<head>
	<title>Zad 4</title>
</head>
<body>
	<fieldset>
		<legend>Podaj Pesel</legend>
		<form method="POST" action="Zad4.php">
			<table>
				<tr>
					<td>Pesel:</td>
					<td><input type="text" name="pesel"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Prześlij"></td>
				</tr>
			</table>
		</form>
	</fieldset>
	<?php
	function pesel($pesel)
	{
		$month= substr($pesel, 2,2);

		switch (substr($month,0,1)) {
			case 8:
			case 9:
				$year="18";
				break;
			case 0:
			case 1:
				$year="19";
				break;
			case 2:
			case 3:
				$year="20";
				break;
			case 4:
			case 5:
				$year="21";
				break;
			case 6:
			case 7:
				$year="22";
				break;
		}

		if(substr($month, 0,1)%2==0)
		{
			$month="0".substr($month, 1,1);
		}else
		{
			$month="1".substr($month, 1,1);
		}

		$day = substr($pesel, 4,2);
		$year.=substr($pesel,0,2);


		if(substr($pesel,9,1)%2==1)
		{
			echo "Urodziłeś się ".$day.".".$month.".".$year."r.<br>";
			echo "jesteś mężczyzną";
		}
		else
		{
			echo "Urodziłaś się ".$day.".".$month.".".$year."r.<br>";
			echo "jesteś kobietą";
		}

	}
	$pattern = '/^\d{11}$/';

	if(!empty($_POST['pesel'])&&preg_match($pattern,$_POST['pesel']))
	{
		pesel($_POST['pesel']);
	}
	?>
</body>
</html>