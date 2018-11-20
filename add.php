<!Doctype html>
<html>
	<head>
		<title>My Web Page</title>
	</head>
	<body>
		<form action="/phrases/index.php" method="GET">
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname"><br>
    Greeting:<br>
 <select name="Greeting">
  <option value="Guten Morgen">Guten Morgen</option>
  <option value="Mahlzeit">Mahlzeit</option>
  <option value="Guten Abend">Guten Abend</option>
  <option value="Gute Nacht">Gute Nacht</option>
</select> <br><br>
 <input type="submit" name="submit" value="Submit" />
</form>
	</body>
</html>