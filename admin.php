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
          $query = "SELECT * FROM tasks WHERE user_id = '$id'" ;
          $result = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_array($result)) :
        ?>
 
          <li>
            <?php echo $row['title']; ?>
            <a href="edit.php?taskID=<?php echo $row['id']; ?>&taskName=<?php echo $row['title']; ?>">Edit</a>
            <a href="delete.php?taskID=<?php echo $row['id']; ?>">X</a>
          </li>

      <?php endwhile; ?>
      </ul>
      <form action="index.php" method="post">
        <input type="text" name="taskName">
        <input type="submit" name="addTask" value="Lägg till">
      </form>
    </section>
<?php else : ?>

    <h1>Du måste <a href="login.php">logga in</a></h1>

<?php endif; ?>

  </body>

</html>