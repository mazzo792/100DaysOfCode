<?php
  include 'Includes/header.inc.php';
?>
  <div class="container">
      <form class="login-form" action="Includes/profile-update.inc.php" method="POST">
        <lable class="username-lbl">First Name</lable><br>
        <input  type="text" name="fname" placeholder="Enter Your First Name"/><br><br>
        <lable class="password-lbl">Last Name</lable><br>
        <input  type="text" name="lname" placeholder="Enter Your Last Name"/><br><br>
        <lable class="password-lbl">Email</lable><br>
        <input type="email" name="email" placeholder="Enter Your Email"/><br><br>

        <lable class="username-lbl">Position</lable><br>
        <input  type="text" name="pos" placeholder="Enter Your Position"/><br><br>
        <lable class="password-lbl">Phone Number</lable><br>
        <input  type="text" name="num" placeholder="Enter Your Phone Number"/><br><br>
        <lable class="password-lbl">Profession</lable><br>
        <input type="text" name="profession" placeholder="Enter Your Profession"/><br><br>
        <lable class="password-lbl">Username</lable><br>
        <input  type="text" name="username" placeholder="Enter Your Username"/><br><br>
        <lable class="password-lbl">Password</lable><br>
        <input type="text" name="password" placeholder="Enter Your Password" /><br><br>

        <button class="login-btn" name="edit">Confirm Edit</button>
      </form>
  </div>


  </body>
<html>
