<?php

  require ('..\script\Database.php');

	function immediate_redirect_to($redirectlocation){
  		header("location: {$redirectlocation}");
  		exit;
	}

	function insert_gebruiker($UserID, $Firstname, $Lastname){

		$resultMessage = null;

    $link = getDb();



    $UserID=$_POST['id'];
    $Firstname=$_POST['vnaam'];
    $Lastname=$_POST['anaam'];




if (strlen($UserID) >  4) {
    $resultMessage .= "ID is te lang ";
}

if (strlen($Firstname) > 10) {
		$resultMessage .= "Voornaam is te lang ";
}
if (strlen($Lastname) > 10) {
		$resultMessage .= "Achternaam is te lang ";
}


    if ($resultMessage == null) {

    $sql = "INSERT INTO regisseur (id, vnaam, anaam) VALUES ('$UserID', '$Firstname', '$Lastname')";
      if(mysqli_query($link, $sql)){
      echo "Records inserted successfully.";
      } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}

		$resultMessage .= "Succes!";

		return $resultMessage;
	}

$resultMessage = insert_gebruiker($_POST['id'], $_POST['vnaam'], $_POST['anaam']);

$redirectlocation = "regisseurs_aanmaken.php". "?resultMessage=" .urlencode($resultMessage);

immediate_redirect_to($redirectlocation);

?>
