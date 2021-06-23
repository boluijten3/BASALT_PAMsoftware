<?php
require ('..\script\Database.php'); //de database script

$redirectlocation = "sneekweek.php" ;


$link = getDb(); //connectue maken met database
$an= $_GET['id'] ;
$sql = "DELETE FROM citaat WHERE id='$an' "; // de queryyyyy

$records= mysqli_query($link,$sql); // query uitvoeren

function immediate_redirect_to($redirectlocation){
    header("location: {$redirectlocation}");
    exit;
}

immediate_redirect_to($redirectlocation);

?>
