<!DOCTYPE html>
<html>
<head>
<title>Filmfan registratie</title>
<link rel="stylesheet" href="..\Project\css\style.css" />
</head>
<body>
<?php
 require('..\Project\script\Database.php');

 $connection = GetDb();
// If form submitted, insert values into the database.
if (isset($_REQUEST['gnaam'])){


 $username = stripslashes($_REQUEST['gnaam']);
 $username = mysqli_real_escape_string($connection,$username);

 $wachtwoord = stripslashes($_REQUEST['wachtwoord']);
 $wachtwoord = mysqli_real_escape_string($connection,$wachtwoord);

 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($connection,$email);


        $query = "INSERT into gebruiker (gnaam, wachtwoord, email)
VALUES ('$username', '$wachtwoord', '$email')";
          $result = mysqli_query($connection,$query);
          if($result){
            echo "<div class='form'>
<h3>U heeft succesvol geregistreert.</h3>
<br/>Klik hier om in te loggen :  <a href='login.php'>Login</a></div>";
  }
    }else{
?>
<div class="form">
<h1>Registratie Filmfan website :</h1>
<p>Vul hieronder uw gegevens in alstublieft.</p>
<form name="registration" action="register.php" method="post">
<input type="username" name="Username" placeholder="username" required /><br>
<input type="password" name="Wachtwoord" placeholder="Wachtwoord" required /><br>
<input type="email" name="Email" placeholder="E-mail" required /></br>
<br>
<input type="submit" name="submit" value="Registreren" />
</form>
</div>
<?php } ?>
</body>
</html>
