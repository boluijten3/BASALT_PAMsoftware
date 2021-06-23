
<?php
require ('..\script\Database.php'); //de database script

$redirectlocation = "griezelbus.php" ;
$link = getDb(); //connectue maken met database

if(isset($_POST['newjaar']) ) {
$newjaar = $_POST['newjaar'];
$id= $_GET['id'] ;
$sql = "UPDATE film SET jaar='$newjaar' WHERE id='$id' "; // de queryyyyy
$res= mysqli_query($link, $sql);

function immediate_redirect_to($redirectlocation){
  header("location: {$redirectlocation}");
  exit;
}

immediate_redirect_to($redirectlocation);
}

?>

<form  method="POST">
  Correcte jaar: <input type="text"  name="newjaar" value="  "> <br />
  <input type = "hidden" name="id" value=" ">
  <input type="submit" value="Update">
</form>



