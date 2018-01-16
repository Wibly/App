<?php

  $connection = mysqli_connect('localhost', 'root', 'root', 'appdb');

  if (!$connection) {
    die('Connection Failed!' . mysqli_error($connection));
  }

?>