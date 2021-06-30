
<?php
require ('..\script\Database.php'); //de database script

$redirectlocation = "sneekweek.php" ;
//$link = getDb(); //connectue maken met database

if(isset($_POST['newjaar']) ) {
$newjaar = $_POST['newjaar'];
$idr= $_GET['idr'] ;
$sql = "UPDATE film SET jaar='$newjaar' WHERE idr='$idr' "; // de queryyyyy
$res= mysqli_query($link, $sql);

function immediate_redirect_to($redirectlocation){
  header("location: {$redirectlocation}");
  exit;
}

immediate_redirect_to($redirectlocation);
}
//echo $idr;
?>

<form  method="POST">
  Correcte jaar: <input type="text"  name="newjaar" value="  "> <br />
  <input type = "hidden" name="idr" value=" ">
  <input type="submit" value="Update">
</form>



