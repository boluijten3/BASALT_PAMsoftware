<!DOCTYPE html>
<body>
  <div class="topbar">
  <font size="10"><b>Filmfan</b></font>
  </div>
<div class="vertical-menu">
  <a href="..\pages\userinterface.php" class="active">Terug</a>
  <a href="..\pages\regisseurs_aanmaken.php">Regisseurs Aanmaken</a>
  <a href="..\pages\regisseurs_verwijderen.php">Regisseurs Verwijderen</a>
  <a href="..\pages\regisseurs_bekijken.php">Regisseurs Bekijken</a>
  <a href="..\phplogin\index.html"><br>Log in</a>
  <a href="..\aanmelden\aanmelden.php"><br>Aanmelden</a>
</div>
</body>

 <form method="POST" action='process_regisseurs.php'>
ID (*): <input type="text"  name="id"> <br/>
First name (*) : <input type="text" name="vnaam"> <br/>
Last name (*): <input type="text" name="anaam"> <br/>


<input type="submit" name="button1" value="Aanmaken">

</form>

 <table border="1px solid">
 <tr> <th> ID </th>  <th> Voornaam </th> <th> Achternaam </th> </tr>
 <?php
 //require "database.php";
require ('..\script\Database.php')  ;

 $db_conn = getDb();
 $query = "SELECT * FROM regisseur ";
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
<title> Regisseur Aanmaken </title>
</head>
