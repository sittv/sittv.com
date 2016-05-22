<?php
  session_start();
  if ($_SESSION['auth']) {
    echo "<p>You are authenticated.</p>";
  } else { ?>
    <form action="auth_helper.php" method="POST">
      <label for="user">Username:</label><input type="text" name="user"><br />
      <label for="password">Password:</label><input type="password" name="password"><br />
      <input type="Submit" />
    </form>
<?php
  }
?>
