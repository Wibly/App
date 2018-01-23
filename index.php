<?php
  $title = "Välkommen";
  include "includes/header.php";
  session_start();

  if (isset($_POST['addTask'])) {
    addTask();
  }
 ?>

 <?php if (isset($_SESSION['username'])) : ?>
   <nav>
     <a href="logout.php">Logga ut <?php echo $_SESSION['username']; ?></a>
     <h1>App</h1>
   </nav>

    <section>
      <h2>Att göra:</h2>
      <ul>
        <?php
          $id = $_SESSION['id'];
          $query = "SELECT title  FROM tasks WHERE user_id = '$id'" ;
          $result = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_array($result)) {
            echo "<li>" . $row['title'] . "</li>";
          }
        ?>
      </ul>
      <form action="index.php" method="post">
        <input type="text" name="taskName">
        <input type="submit" name="addTask" value="Lägg till">
      </form>
    </section>
<?php else : ?>

    <h1>Ingen Tillgång!</h1>

<?php endif; ?>

  </body>

</html>