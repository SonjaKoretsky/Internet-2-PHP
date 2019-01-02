<!Doctype html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form  action="#"method="GET">E-Mail:<br>
  <input type="text" name="E-Mail"> <br> 
  <input type="submit" name="submit" value="Submit">

  </form>
</body>

  <?php
include('config.php');
?>

<?php

    


$conn = new mysqli ("localhost", "root", "", "PhraseGenerator");
$sql = "INSERT INTO `phrases` (`id`, `phrase`, `recipient`) VALUES (NULL, '', '') ";
if ($conn->query($sql)) {
	echo "New record created successfully";
}
else {
	echo "Error" . $sgl . $conn->error;
}

if ($mailfun == true){
      // email related stuff...
     
     if (isset($_GET['E-Mail'])){
      $to      = urldecode($_GET['E-Mail']);
      $subject = 'I say YES! to...';
      $message = $text;
      $headers = 'From: internet2@hdmy.de' . "\r\n" .
          'Reply-To: internet2@hdmy.de' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();

      $mailSuccess = mail($to, $subject, $message, $headers);      

      
      // if you want to do some rudimentary error handling...   
      if (!$mailSuccess){
        echo "mail not sent";
      }
      else {
        echo "mail sent to: " . $to;
      }
      
    }


    }
    


   ?>