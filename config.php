<!Doctype html>
<html>
<head></head>
<body>
<?php
  // name of the file that we store data to
  // we want to use this information in different files 
  $filename = "file.txt";

  // DB configuration
  $db_host = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "PhraseGenerator";
  $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);  
  // switch that to true if you want to do the mailing stuff...
$mailfun = true;



?>
</body>

