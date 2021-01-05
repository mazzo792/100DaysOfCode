<?php
  include 'dbh.inc.php';
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users";
  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_array($result)) {
    if($row['username'] == $username && $row['password'] == $password) {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();
      $_SESSION['username'] = $username;
      header("Location:../home.php?SuccessfullyLogedIn");
    } else {
      echo "<center>Uncorrect Username or Password!</center>";
    }
  }
