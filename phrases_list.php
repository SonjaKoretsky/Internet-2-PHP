
<!Doctype html>
<html>
<head>
	
</head>

<body>
    <form  action="#"method="GET">E-Mail:<br>
  <input type="text" name="E-Mail"> <br> 
  <input type="submit" name="submit" value="Submit">

  </form>
  <table class="table-striped table">
        <th>ID</th>
        <th>Phrase</th>
<?php include("config.php"); ?>
<?php
    $text = "We want to explore";
	
   
        $stmt = "SELECT * FROM `phrases`";
        $result = $link->query($stmt);

        if ($result->num_rows > 0){
            while ($row = mysqli_fetch_row($result)){
            echo "<tr>\n";
            echo "<td>" . $row[0] . "</td>\n";
            echo "<td>" . $row[1] . "</td>\n";
            echo "</tr>";
            }
        }
        else {
            echo "<tr><td colspan='2'>No data found</td></tr>";
        }

        ?>
    </table>
    <?php  
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
    


</body>
