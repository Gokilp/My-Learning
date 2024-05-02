<?php
include("database.php"); // redirectio to anthoer php file

$username = "Gokilp"; // vraiable stored 
$password = "12334456"; // variable stored 

$sql = "INSERT INTO users (`user`, `password`) VALUES ('$username', '$password')";  // added sql command 

try {
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully.";
    } else {
        throw new Exception("Error inserting record: " . mysqli_error($conn));
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

mysqli_close($conn);
?>


// database.php
<?php
$db_server = "localhost";   // decalre of php file of command
$db_username = "root";
$db_password = "";
$db_name = "bussinessdatabase";  // give the db name  correctly of decalre 
$conn =" ";

try {
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);  // send  db 
} catch (mysqli_sql_exception ) {
    echo "Connection failed: ";
}


?>
