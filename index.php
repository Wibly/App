<?php
  session_start();
  $title = "Välkommen";
  include "includes/header.php";
 ?>

  <body>
    <h1>Välkommen, <?php echo $_SESSION['username']; ?>!</h1>
  </body>
</html>