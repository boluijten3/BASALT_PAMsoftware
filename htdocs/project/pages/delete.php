<?php
require ('..\script\Database.php'); //de database script

$redirectlocation = "acteurs_verwijderen.php" ;


$link = getDb(); //connectue maken met database
$id= $_GET['id'] ;
$sql = "DELETE FROM acteur WHERE id='$id' "; // de queryyyyy

$records= mysqli_query($link,$sql); // query uitvoeren

function immediate_redirect_to($redirectlocation){
    header("location: {$redirectlocation}");
    exit;
}

immediate_redirect_to($redirectlocation);

?>
