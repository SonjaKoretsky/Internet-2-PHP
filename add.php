


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
E-Mail:<br>
  <input type="text" name="email"><br>

    Greeting:<br>
 <select name="Greeting">
  <option value="Guten Morgen">Guten Morgen</option>
  <option value="Mahlzeit">Mahlzeit</option>
  <option value="Guten Abend">Guten Abend</option>
  <option value="Gute Nacht">Gute Nacht</option>
</select> <br><br>
<h1> Say YES to ... </h1>

  <select name="phrase1"> 
    <option value="Ich">Ich</option>
<option value="Du">Du</option>

  </select>
  
  <select name=phrase2>
    <option value="mag">mag</option>
    <option value="magst">magst</option>
  </select>

<select name="phrase3">
  <option value="codieren">codieren</option>
  <option value="codieren">codieren</option>
</select> <br><br>
<input type="submit" name="submit" value="Say YES!">

 
</form>





	</body>
</html>