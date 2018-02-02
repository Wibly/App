<?php
$bodyClass = "d-flex justify-content-center align-items-center";
include 'includes/header.php';

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
$num_rows = mysqli_num_rows($result);

?>

      <!-- Background video -->
      <video autoplay loop muted>
        <source src="vid/ebin.mp4" type="video/mp4">
          Your browser doesn not support the video tag
      </video>
      <!-- Background video END -->

      <!-- Main content -->
      <main>
        <img src="img/apperino.svg" class="img-fluid animated jackInTheBox" alt="Apperino">
        <a href="login.php" class="btn btn-primary">Logga In</a>
        <a href="register.php" class="btn btn-primary">Registrera</a>
        <p>Med <?php echo $num_rows; ?> användare!</p>
      </main>
      <!-- Main content END -->

<?php include 'includes/footer.php'; ?>
