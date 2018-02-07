<?php
  session_start();
  include "includes/header.php";


    // $ran = array(1,2,3,4);
    // $randomElement = $ran[array_rand($ran)];
    // echo $randomElement;


  if (isset($_POST['addTask'])) {
    addTask();
  }
 ?>

 <?php if (isset($_SESSION['username'])) : ?>

   <?php include "includes/navigation.php"; ?>

<div class="container-fluid">
  <div class="row justify-content-center">
   <?php include "includes/tasks.php"; ?>
 </div>
 </div>

<?php else : ?>

    <h1>Du måste <a href="login.php">logga in</a></h1>

<?php endif; ?>

<?php include "includes/footer.php"; ?>