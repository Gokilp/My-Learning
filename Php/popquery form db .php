<?php
include("database.php");  // below direct the page 

/*
$sql = "SELECT * FROM users where user='Gokilp'";
$result = mysqli_query($conn, $sql);
 Retrive a Single information from the user
if (mysqli_num_rows($result) > 0) {


    $row = mysqli_fetch_assoc($result);
    echo $row['id '];
    echo $row['user'];
    echo $row['reg_date'];
}
else{
    echo "no user found";
}

*/
// retervie all the information the table

/*
$sql = "SELECT * FROM users ";
$result = mysqli_query($conn, $sql);
// $sql = "SELECT * FROM users where user='Gokilp'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'];
        echo $row['user'];
        echo $row['reg_date'];
    }
}
else{
    echo "no user found";
}

*/
mysqli_close($conn);

// database.php file 

<?php
  $db_server = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "bussinessdatabase";
  $conn =" ";

try {
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
} catch (mysqli_sql_exception ) {
    echo "Connection failed: ";
}


?>

