<?php

  require ('..\script\Database.php');

	function immediate_redirect_to($redirectlocation){
  		header("location: {$redirectlocation}");
  		exit;
	}

	function insert_rol($Id, $Idact, $Idfilm, $Naam){

		$resultMessage = null;

    $link = getDb();



    $Id=$_POST['id'];
    $Idact=$_POST['idact'];
    $Idfilm=$_POST['idfilm'];
    $Naam=$_POST['naam'];




if (strlen($UserID) >  4) {
    $resultMessage .= "ID is te lang ";
}

if (strlen($Idact) > 4) {
		$resultMessage .= "ID acteur is te lang ";
}
if (strlen($Idfilm) > 4) {
		$resultMessage .= "Id film is te lang ";
}
if (strlen($Naam) > 30) {
    $resultMessage .= "Naam is te lang ";
}


    if ($resultMessage == null) {

    $sql = "INSERT INTO rol (id, idact, idfilm, naam) VALUES ('$Id', '$Idact', '$Idfilm' , '$Naam')";
      if(mysqli_query($link, $sql)){
      echo "Records inserted successfully.";
      } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}

		$resultMessage .= "Succes!";

		return $resultMessage;
	}

$resultMessage = insert_rol($_POST['id'], $_POST['idact'], $_POST['idfilm'], $_POST['naam']);

$redirectlocation = "rollen_aanmaken.php". "?resultMessage=" .urlencode($resultMessage);

immediate_redirect_to($redirectlocation);

?>
