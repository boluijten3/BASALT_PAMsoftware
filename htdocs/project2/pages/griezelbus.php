<!DOCTYPE html>
<table border="1px solid">
 <tr> <th> ID </th>  <th> ID van Regisseur </th> <th> Jaar </th> <th> Titel </th></tr>
<?php
 //require "database.php";
require ('..\script\Database.php')  ;

 $db_conn = getDb();
 $query = "SELECT * FROM `film` WHERE id=2  ";
 $result_set = mysqli_query($db_conn, $query);
 while($record = mysqli_fetch_assoc($result_set)){
	 echo "<tr> <td> {$record['id']} </td>
                  <td> {$record['idr']}</td>
                  <td> {$record['jaar']} </td>
                  <td> {$record['titel']} </td>
                  <td> <a href=edit_griezelbus.php?id=".$record['id']."> Edit Jaar </a> </td>
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
  <a href="..\script\logout.php"><br>Log out</a>
</div>
<center>
<img src="/project/afbeeldingen/griezelbus.png" width="300" height="500" title="Griezelbus cover" alt="Griezelbus" />
</center> 
<br/>
<h2>
Mooie citaten: 
</h2>
<?php
$db_conn = getDb();
 $query1 = "SELECT * FROM `citaat` WHERE idfilm=2  ";
 $result_set = mysqli_query($db_conn, $query1);
 while($record = mysqli_fetch_assoc($result_set)){
	 echo "<br> {$record['citaat']} <br>
    <a href=delete_g.php?id=".$record['id']."> Delete </a> <br> <tr>" ;
 }
?>

<form method="POST" action='process_griezelbus.php'> <br>
Het nieuwe citaat (*): <input type="text"  name="citaat"> <br/>

<input type="submit" name="button1" value="Toevoegen"> 

</form> <br> 
<html>
<body>
De regisseur is: <?php
$db_conn = getDb();
 $query2 = "SELECT * FROM `regisseur` WHERE id=2  ";
 $result_set = mysqli_query($db_conn, $query2);
 while($record = mysqli_fetch_assoc($result_set)){
	 echo "{$record['vnaam']}  {$record['anaam']} <br>";
 }
?>

<h3>
<a href="https://www.youtube.com/watch?v=xbg_tvDFO-s">  Kijk hier de trailer!</a>
</h3>
</body>
 
</html>
