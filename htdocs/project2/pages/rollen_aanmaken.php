<!DOCTYPE html>
<body>
  <div class="topbar">
  <font size="10"><b>Filmfan</b></font>
  </div>
<div class="vertical-menu">
  <a href="..\pages\userinterface.php" class="active">Terug</a>
  <a href="..\pages\rollen_aanmaken.php">Rollen Aanmaken</a>
  <a href="..\pages\rollen_verwijderen.php">Rollen Verwijderen</a>
  <a href="..\pages\rollen_bekijken.php">Rollen Bekijken</a>
  <a href="..\script\logout.php"><br>Log out</a>
</div>
</body>

 <form method="POST" action='process_rol.php'>
ID (*): <input type="text"  name="id"> <br/>
ID van acteur (*) : <input type="text" name="idact"> <br/>
ID van film (*): <input type="text" name="idfilm"> <br/>
Naam van personage (*): <input type="text" name="naam"> <br/>

<input type="submit" name="button1" value="Aanmaken">

</form>

 <table border="1px solid">
 <tr> <th> ID </th>  <th> ID acteur </th> <th> ID van film </th> <th> Naam </th> </tr>
 <?php
 //require "database.php";
require ('..\script\Database.php')  ;

 $db_conn = getDb();
 $query = "SELECT * FROM rol ";
 $result_set = mysqli_query($db_conn, $query);
 while($record = mysqli_fetch_assoc($result_set)){
	 echo "<tr> <td> {$record['id']} </td>
                  <td> {$record['idact']}</td>
                  <td> {$record['idfilm']} </td>
                  <td> {$record['naam']} </td>
				  </tr>";

 }
 ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="..\css\style.css">
<title> Rollen Aanmaken </title>
</head>
