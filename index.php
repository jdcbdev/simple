<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php

error_reporting(-1);
ini_set('display_errors', 'On');

 $host = 'localhost';
 $user = 'sample';
 $password = 'sample';
 $database = 'test';
 $mysqli = new MySQLi($host, $user, $password, $database);

 if($mysqli->connect_error) {
  echo 'Connection Failed!
  Error #' . $mysqli->connect_errno
  . ': ' . $mysqli->connect_error;
  exit(0);
 }

?>