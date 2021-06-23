<!DOCTYPE html>
  <table border="1px solid">
 <tr> <th> ID </th>  <th> Voornaam </th> <th> Achternaam </th> </tr>
 <?php
 //require "database.php";
require ('..\script\Database.php')  ;

 $db_conn = getDb();
 $query = "SELECT * FROM acteur ";
 $result_set = mysqli_query($db_conn, $query);
 while($record = mysqli_fetch_assoc($result_set)){
	 echo "<tr> <td> {$record['id']} </td>
                  <td> {$record['vnaam']}</td>
                  <td> {$record['anaam']} </td>
				  </tr>";

 }
 ?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="..\css\style.css">
<title> Acteurs bekijken </title>
<div class="topbar">
<font size="10"><b>Filmfan</b></font>
</div>
</head>
<body>
<div class="vertical-menu">
  <a href="..\pages\userinterface.php" class="active">Terug</a>
  <a href="..\pages\acteurs_aanmaken.php">Acteurs Aanmaken</a>
  <a href="..\pages\acteurs_verwijderen.php">Acteurs Verwijderen</a>
  <a href="..\pages\acteurs_bekijken.php">Acteurs Bekijken</a>
  <a href="..\script\logout.php"><br>Log out</a>
</div>



</body>
</html>
