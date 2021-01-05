<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $db = 'login_system';

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Error connecting to the database");
