<!Doctype html>
<html>
<head></head>
<body>



<?php 

if (isset($_GET['Greeting']))
{
$selected_val = $_GET['Greeting'];  // Storing Selected Value In Variable
echo $selected_val; // Displaying Selected Value
}
?>

 <?php 
 if (isset($_GET['firstname']))
{
	echo $_GET["firstname"]; 
}?>
 <?php 
 if (isset($_GET['lastname']))
{
	echo $_GET["lastname"]; 
}
?><br>

 <?php if (isset($_GET['phrase1']))
{
	echo $_GET["phrase1"]; $selected_val = $_GET['phrase1'];  // Storing Selected Value In Variable
echo $selected_val; // Displaying Selected Value
}

?>

 <?php if (isset($_GET['phrase2']))
{
	echo $_GET["phrase2"]; $selected_val = $_GET['phrase2'];  // Storing Selected Value In Variable
echo $selected_val; // Displaying Selected Value
}


?>
<table class="table-striped table">
        <th>ID</th>
        <th>Phrase</th>
<?php include("config.php"); ?>
 <?php if (isset($_GET['phrase3']))
{
	echo $_GET["phrase3"]; 

 $selected_val = $_GET['phrase3'];  // Storing Selected Value In Variable
echo $selected_val; // Displaying Selected Value

}
$db_query = "SELECT * FROM `phrases` ";
  $result = $link->query($db_query); 
  $row = mysqli_fetch_row($result); 


while ($row = mysqli_fetch_row($result)){
  echo "<tr>\n";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "<td><a href='?delete-id=" . $row[0] . "'>delete</a></td>";
  echo "</tr>\n";
}
  // connect to database
  $link = mysqli_connect("localhost", "root", "", "PhraseGenerator");

  if (isset($_GET['delete-id'])){
    $db_query = "DELETE FROM `phrases` WHERE `ID` = " . $_GET['delete-id'] ;
    $delete_result = $link->query($db_query);     
    // The following line shows how many rows were delted... 
    // Can be used for error handling... 
    // echo $link->affected_rows; 
  } 

  // query database
  $result = $link->query('SELECT * FROM phrases');

?>

</table>








</body>
</html>