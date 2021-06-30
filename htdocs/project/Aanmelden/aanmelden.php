<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="..\css\style.css">
    <title> Aanmelden</title>
    <div class="topbar">
      <font size="10"><b>Filmfan</b></font>
    </div>
  </head>
  <body>
    <div class="vertical-menu">
      <a href="..\pages\acteurs.php">Acteurs</a>
      <a href="..\pages\regisseurs.php">Regisseurs</a>
      <a href="..\pages\films.php">Films</a>
      <a href="..\phplogin\index.html"><br>Log in</a>
      <a href="..\phplogin\aanmelden.php"><br>Aanmelden</a>
    </div>

    <?php include('database.php') ?>


      <div class="header">
      	<h2>Aanmelden</h2>
      </div>

      <form method="post" action="aanmelden.php">
      	<?php include('errors.php'); ?>
      	<div class="input-group">
      	  <label>Username</label>
      	  <input type="text" name="username" value="<?php echo $username; ?>">
      	</div>
      	<div class="input-group">
      	  <label>Email</label>
      	  <input type="email" name="email" value="<?php echo $email; ?>">
      	</div>
      	<div class="input-group">
      	  <label>Password</label>
      	  <input type="password" name="password_1">
      	</div>
      	<div class="input-group">
      	  <label>Confirm password</label>
      	  <input type="password" name="password_2">
      	</div>
      	<div class="input-group">
      	  <button type="submit" class="btn" name="reg_user">Register</button>
      	</div>
      	<p>
      		Already a member? <a href="..\phplogin\index.html">Sign in</a>
      	</p>
      </form>

  </body>
</html>
