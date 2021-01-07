<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $db = 'todo';

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Error connecting to the database");
