<?php
require ('..\script\Database.php'); //de database script

$redirectlocation = "rollen_verwijderen.php" ;


$link = getDb(); //connectue maken met database
$an= $_GET['id'] ;
$sql = "DELETE FROM rol WHERE id='$an' "; // de queryyyyy

$records= mysqli_query($link,$sql); // query uitvoeren

function immediate_redirect_to($redirectlocation){
    header("location: {$redirectlocation}");
    exit;
}

immediate_redirect_to($redirectlocation);

?>
