<section id="tasks" class="col-12 col-sm-8 col-lg-4">
  <h2>Att göra:</h2>
  <ul class="list-unstyled">
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
  <form action="admin.php" class="form-inline my-2 my-lg-0 justify-content-center" method="post">
    <input type="text" name="taskName">
    <input type="submit" name="addTask" value="Lägg till">
  </form>
</section>