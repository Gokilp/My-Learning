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
       <form action="hello.php" method = "post">
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

        header("Location:home.php"); // Redirection to  home.php page
    } else {
        echo "Invalid Username or Password";
    }
}
?>

// home page.php file
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
    <p> This is Home  Page</p> <br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
    </body>
    </html>
    <?php
    echo $_SESSION["Username"] ;  // contain the session section Value
    echo $_SESSION["password"];  // contain the session section Value

      if(isset($_POST["logout"])){
          session_destroy();   // destoryed Session value
          header("location:hello.php");
      }
    ?>





