// database.php file

<?php
  $db_server = "localhost";      // connected to db 
  $db_username = "root";
  $db_password = "";
  $db_name = "bussinessdatabase";
  $conn =" ";

try {
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);  // passing parameter to the db
} catch (mysqli_sql_exception ) {
    echo "Connection failed: ";
}


?>


// index.php

<?php
     include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
      <p>hello ! Welcome to the World</p>
<body>

</body>

</html>
