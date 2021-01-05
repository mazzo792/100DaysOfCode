<?php
  include 'dbh.inc.php';

  if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(email, username, password) VALUES('$email', '$username', '$password')";

    if(mysqli_query($conn, $query)) {
         echo '<script>alert("You Have Successfully Registerd")</script>';
         header("Location: ../index.php?SuccessfullySignedUp");
    } else {
      echo "Error connecting to the database";
    }
  }
