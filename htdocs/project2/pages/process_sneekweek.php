<?php

  require ('..\script\Database.php');

	function immediate_redirect_to($redirectlocation){
  		header("location: {$redirectlocation}");
  		exit;
	}

	function insert_citaat($Citaat){

		$resultMessage = null;

    $link = getDb();



    $Citaat=$_POST['citaat'];





if (strlen($Citaat) >  200) {
    $resultMessage .= "Citaat is te lang ";
}



    if ($resultMessage == null) {

    $sql = "INSERT INTO citaat (idfilm, citaat) VALUES ('1','$Citaat')  " ;
      if(mysqli_query($link, $sql)){
      echo "Records inserted successfully.";
      } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
}

		$resultMessage .= "Succes!";

		return $resultMessage;
	}

$resultMessage = insert_citaat($_POST['citaat']);

$redirectlocation = "sneekweek.php". "?resultMessage=" .urlencode($resultMessage);

immediate_redirect_to($redirectlocation);

?>
