<?php
	require_once('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) & !empty($_POST)){
      $Username = $_POST['username'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM `login` WHERE username='$Username' AND password='$password'";
      $result = mysqli_query($connection, $sql);
      $count = mysqli_num_rows($result);

      if ($count == 1) {
        echo "Login Successful";
      }else {
        echo "invalid Username or Password";
      }
    }
    ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form.: Websitekali.co.ke</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container">
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
</div>

  </body>
</html>
