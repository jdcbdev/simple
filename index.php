<html>
<head>
  <title>PHP version</title>
</head>
<body>
<h1>DB test</h1>

<?php
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

</body>
</html>