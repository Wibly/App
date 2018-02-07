<?php
$title = "Välkommen";
$bodyClass = "d-flex justify-content-center align-items-center";
include 'includes/header.php';



$query = "SELECT id FROM users";
$result = mysqli_query($connection, $query);
$numberOfUsers = mysqli_num_rows($result);

?>

      <!-- Background video -->
      <video autoplay loop muted>
        <source src="vid/ebin.mp4" type="video/mp4">
          Your browser doesn not support the video tag
      </video>
      <!-- Background video END -->

      <!-- Main content -->
      <main class="col-12 col-sm8 col-lg-4 animated jackInTheBox text-center">
        <img src="img/apperino.svg" class="img-fluid" alt="Apperino">
        <a href="login.php" class="btn btn-primary">Logga In</a>
        <a href="register.php" class="btn btn-primary">Registrera</a>
        <p>Med <span><?php echo $numberOfUsers; ?></span> registrerade användare!</p>
      </main>
      <!-- Main content END -->

<?php include 'includes/footer.php'; ?>
