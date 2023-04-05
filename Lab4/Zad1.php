<!DOCTYPE html>
<html>
<head>
	<title>Zad 1</title>
</head>
<body>
	<form method="GET" action="Zad1.php">
		<table>
			<tr>
				<td>Data urodzin</td>
				<td>
					<input type="date" name="dateOfBirth">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" >
				</td>
			</tr>
		</table>
	</form>
	<?php
	function dayOfWeek($date)
	{
		echo "Urodziłeś się ". date("D",strtotime($date))."<br>";
	}
	function howOld($date)
	{
		$dateNow = strtotime("now");
		$dateTime=strtotime($date);
		$old=date("Y",$dateNow)-date("Y",$dateTime)-1;

		if(date("m",$dateTime)<date("m",$dateNow))
		{
			$old++;
		}
		else if(date("m",$dateTime)==date("m",$dateNow)){
			if(date("d",$dateTime)<=date("d",$dateNow))
				$old++;
		}


		echo "Masz ".$old." lat<br>";		
	}
	function nextBerthday($date)
	{
		$nowTime = strtotime("Now");
		$userTime=strtotime($date);
		if(date("md",$userTime)>=date("md",$nowTime))
		{
			$nowDay = date("d",$nowTime);
			$nowMonth =date("m",$nowTime);

			$userDay=date("d",$userTime);
			$userMonth=date("m",$userTime);

			$time1 = mktime(0,0,0,$userMonth,$userDay,0);
			$time2 = mktime(0,0,0,$nowMonth,$nowDay,0);

			echo "Następne urodziny za ".abs(ceil($time2-$time1)/86400)." dni";
		}
		else
		{
			$nowDay = date("d",$nowTime);
			$nowMonth =date("m",$nowTime);

			$userDay=date("d",$userTime);
			$userMonth=date("m",$userTime);

			$time1 = mktime(0,0,0,$userMonth,$userDay,0);
			$time2 = mktime(0,0,0,$nowMonth,$nowDay,1);

			echo "Następne urodziny za ".abs(ceil($time2-$time1)/86400)." dni";
			
		}
	}	

	if(!empty($_GET["dateOfBirth"]))
	{
		dayOfWeek($_GET["dateOfBirth"]);
		howOld($_GET["dateOfBirth"]);
		nextBerthday($_GET["dateOfBirth"]);
	}
	?>
</body>
</html>