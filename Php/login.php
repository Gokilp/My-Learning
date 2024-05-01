// Login file using isset and empty function 
// using post method collect php 
// check given input empty or Having a value or not

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Country</h1>
  <form action="hello.php" method="post">
     <label>User Name</label> <br>
      <input type="text"  name="Username"> <br>
      <label>password</label> <br>
      <input type="password" name="password"> <br>
      <input type="submit" value="Login" name="Login">

  </form>

</body>
</html>
<?php
   // isset() = Return TRUE if a Variable is declared   and not NUll
  //  empty() = Return TRUE if a Variable is not Declared , False, NUll,"empty String Value"

    if(isset($_POST["Login"])){

        $UserName = $_POST["Username"];
        $Password = $_POST["password"];
        if(empty($UserName) || empty($Password)){
            echo "Invalid Information";
            echo " Try Again";
        }
        else{
            echo "UserName: ".$UserName."<br>";
echo "Password: ".$Password."<br>";
}


}

?>
