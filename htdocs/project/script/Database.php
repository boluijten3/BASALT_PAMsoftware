<?php

function getDb() {
  $link = mysqli_connect("127.0.0.1", "film", "film", "filmfan");

  return $link;
}

 ?>
