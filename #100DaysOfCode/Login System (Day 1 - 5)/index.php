<?php
  include 'Includes/header.inc.php';
?>
    <div class="container">
      <form class="login-form" action="Includes/login-script.inc.php" method="POST">
        <lable class="username-lbl">Username</lable><br>
        <input class="username-inpt" type="text" name="username" placeholder="Enter Your Username" required/><br><br>
        <lable class="password-lbl">Password</lable><br>
        <input class="password-inpt" type="password" name="password" placeholder="Enter Your Password" required/><br><br>
        <button class="login-btn" name="login">Login</button>
      </form>
      <p class="sign-up">Don't Have An Account? <b><a href="signup.php">Sign Up</a></b></p>
    </div>
    <div class="vl"></div>
    <div class="img-holder">
      <img class="img1" src="Images/CodeExample.jpg">
      <p class="hash-one">#100DaysOfCode</p>
      <p class="hash-two">#CodeNewbie</p>
    </div>
  </body>
</html>
