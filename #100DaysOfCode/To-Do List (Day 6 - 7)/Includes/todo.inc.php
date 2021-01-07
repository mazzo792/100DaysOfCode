<?php
include 'dbh.inc.php';
$errors = "";

// insert a quote if submit button is clicked
if (isset($_POST['submit'])) {
  if (empty($_POST['task'])) {
    $errors = "You must fill in the task";
  }else{
    $task = $_POST['task'];
    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    mysqli_query($db, $sql);
    header('../location: index.php');
  }
}
