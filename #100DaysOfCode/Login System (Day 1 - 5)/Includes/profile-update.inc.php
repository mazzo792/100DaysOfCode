<?php
session_start();
include "dbh.inc.php";

if(isset($_POST['edit']))
{
   $name=$_SESSION['username'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $pos=$_POST['pos'];
   $num=$_POST['num'];
   $profession=$_POST['profession'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $select= "SELECT * FROM users WHERE username='$name'";
   $sql = mysqli_query($conn,$select);
   $row = mysqli_fetch_assoc($sql);
   $res= $row['username'];
   if($res === $name){
      $update = "UPDATE users SET num='$num', position='$pos', profession='$profession', username='$username', password='$password', fname='$fname',lname='$lname',email='$email' WHERE username='$name'";
      $sql2= mysqli_query($conn,$update);

      if($sql2){
          /*Successful*/
          header('location:../home.php?Success');
        } else {
          /*sorry your profile is not update*/
          header('location:../profile.php?notupdated');
        }
      } else {
       /*sorry your id is not match*/
       header('location:../profile.php?idisnotmatch');
   }
}
