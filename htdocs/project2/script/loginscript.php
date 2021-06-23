<?php
 require('..\Script\Database.php');

$connection = GetDb();

if (isset($_POST['Username']) and isset($_POST['Wachtwoord'])){

// Assigning POST values to variables.
$username = $_POST['Username'];
$password = $_POST['Wachtwoord'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE Username='$username' and Wachtwoord='$password'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//while
//$_SESSION['logged'] = true;
//$_SESSION['UserID'] = true;
//echo "Login Credentials verified";
if ($username == 'Test1') {
header('Location: ..\pages\userinterface.php');
} if ($username == 'Test0') {
header('Location: ..\index.php');
} else {
  echo "failed";
}


}
?>
