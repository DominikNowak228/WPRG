<!DOCTYPE html>
<html>
<head>
	<title>Zad 5</title>
</head>
<body>
	<form method="POST" action="Zad5.php">
		<fieldset>
			<legend>Zaloguj się</legend>
			<table>
				<tr>
					<td>Login:</td>
					<td><input type="text" name="login"></td>
				</tr>
				<tr>
					<td>Hasło:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" ></td>
				</tr>
				<tr>
					<td colspan="2">
						<?php
							function verification($password,$login)
							{
								$secretPassword="admin";
								$userLogin="admin";

								if($password==$secretPassword&&$login==$userLogin)
								{
									header("Location: Zad5.1.php");
									exit();
								}
								else
								{
									echo "Błedne hasło lub login";
									return;
								}
							}

							if(!(empty($_POST['login'])&&empty($_POST['pass'])))
							{
								verification($_POST['login'],$_POST['pass']);
							}
						?>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>