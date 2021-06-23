<!DOCTYPE html>
<table border="1px solid">
 <tr> <th> ID </th>  <th> ID van Regisseur </th> <th> Jaar </th> <th> Titel </th></tr>
<?php
 //require "database.php";
require ('..\script\Database.php')  ;

 $db_conn = getDb();
 $query = "SELECT * FROM `film` WHERE id=1  ";
 $result_set = mysqli_query($db_conn, $query);
 while($record = mysqli_fetch_assoc($result_set)){
	 echo "<tr> <td> {$record['id']} </td>
                  <td> {$record['idr']}</td>
                  <td> {$record['jaar']} </td>
                  <td> {$record['titel']} </td>
                  <td> <a href=edit.php?id=".$record['jaar']."> Edit Jaar </a> </td>
				  </tr>";

 }
 ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="..\css\style.css">
<title> Films </title>
<div class="topbar">
<font size="10"><b>Filmfan</b></font>
</div>
</head>
<body>

<div class="vertical-menu">
  <a href="..\pages\userinterface.php" class="active">Terug</a>
  <a href="..\pages\sneekweek.php">Sneekweek</a>
  <a href="..\pages\griezelbus.php">Griezelbus</a>
  <a href="..\pages\prooi.php">Prooi</a>
  <a href="..\phplogin\index.html"><br>Log in</a>
  <a href="..\aanmelden\aanmelden.php"><br>Aanmelden</a>
</div>
<center>
<img src="/project/afbeeldingen/sneekweek.png" width="500" height="200" title="Sneekweek cover" alt="Sneekweekie" />
</center>
<br/>
<h2>
Mooie citaten:
</h2>
<?php
$message = "";
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $input = $_POST['inputText']; //get input text
  $message = $input;
}
?>

<html>
<body>
<form action="" method="post">
<?php echo $message; ?>
<br/>
  <input type="text" name="inputText"/>

  <input value="Citaat toevoegen" type="submit" name="SubmitButton"/>
</form>

<h3>
<a href="https://www.youtube.com/watch?v=9hhdeAya2Uw">  Kijk hier de trailer!</a>
</h3>
</body>

</html>
