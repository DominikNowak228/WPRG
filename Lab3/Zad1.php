<!DOCTYPE html>
<html>
<head>
	<title>Zad 1</title>
</head>
<body>
	<form method="POST" action="Zad1.1.php">
		<fieldset>
			<legend>Formularz konteaktowy</legend>
			<ul>
				<li>
					Imię i nazwisko*
					<input type="text" name="name" required placeholder="Twoje imię i nazwisko">
				</li>
				<li>
					Adres e-mail*
					<input type="email" name="email" required placeholder="Twój adres e-mail np. jkowalski@wp.pl">
				</li>
				<li>
					Telefon kontaktowy
					<input type="tel" name="phonenr" placeholder="Dozwolone znaki: cyfry. sper">
				</li>
				<li>
					Wybierz temat*
					<select name="topic" required>
						<option value="0">Wkonanie strony internetowej</option>
						<option value="1">option 2</option>
						<option value="2">option 3</option>
					</select>
				</li>
				<li>
					Treść wiadomości*
					<textarea name="message" required placeholder="Wpisz tutaj treść swojej widomości..."></textarea>
				</li>
				<li>
					Prefoerowana forma kontaktu
					<ul>
						<li>
							<label>
								<input type="checkbox" name="preferEmail">E-mail
							</label>
						</li>
						<li>
							<label>
								<input type="checkbox" name="preferPhone">
								Telefon
							</label>
						</li>
					</ul>
				</li>
				<li>
					Posiadasz już stronę www?
					<ul>
						<li>
							<label>
								<input type="radio" name="havingWebsite" value="Tak">
								Tak
							</label>
						</li>
						<li>
							<label>
								<input type="radio" name="havingWebsite" checked value="Nie">
								Nie
							</label>
						</li>
					</ul>
				</li>
				<li>
					Załączniki<br>
					<input type="file" name="files">
				</li>

			</ul>
    	</fieldset>
    	<input type="submit" value="Wyślij formularz">
   	</form>
</body>
</html>