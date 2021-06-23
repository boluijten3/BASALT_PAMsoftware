<html>
<?php

require('script\Database.php');

$db_conn = getDb();
$link = getDb();
 ?>
<head>
  <link rel="stylesheet" type="text/css" href="..\project\css\style.css">
</head>
<body>

<!-- top bar -->
<div class="topbar">
<font size="10"><b>Project website naam</b></font>
</div>

<div class="vertical-menu">
  <a href="#" class="active">Home</a>
  <a href="pages\producten.php">Onze producten</a>
  <a href="pages\account.php">Account info</a>
  <a href="script\logout.php"><br>Log out</a>
</div>

</body>
</html>
