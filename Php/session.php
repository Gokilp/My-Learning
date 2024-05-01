<!---->
<!---->
<!-- // session => SGB used to store information-->
<!--//             to be Store across Multiple pages.-->
<!--//             A user is assignment a session -id-->
<!--//                Eg:Login creditals-->
<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <form actiom="hello.php" method = "post">
           Username <br>
           <input type="text" name="Username"> <br>
             Password <br>
           <input type="password" name="password"> <br>
           <input type="submit" name="login" value="login">

       </form>
</body>
</html>
<?php

if (isset($_POST["login"])) {
    if (!empty($_POST["Username"]) && !empty($_POST["password"])) {
        $_SESSION["Username"] = $_POST["Username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location:home.php");
    } else {
        echo "Invalid Username or Password";
    }
}
?>

// hello php code 

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p> This is Loin  Page</p> <br>
<a href="hello.php"> This is login page</a>
</body>
</html>
<?php
echo $_SESSION["Username"] ;
echo $_SESSION["password"];
?>

