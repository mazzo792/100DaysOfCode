<?php
include 'dbh.inc.php';
 if(isset($_POST["image"]))
 {

      $tname = "profile";
      $tdescribtion = "Profile Pic";
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $query = "INSERT INTO info(tname, description, iname) VALUES ('$tname', '$tdescribtion', '$file')";
      if(mysqli_query($conn, $query))
      {
           echo '<script>alert("Image and info Inserted into Database")</script>';
           header("Location: ../home.php");
      }
 }
