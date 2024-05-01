// Fliter using  FILTER_SANITIZE flitering name,age,email

//  FILTER_SANITIZE mostly used in project Avoid uncessary Value form age and  thier value 
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
      <input type="text" name="userName" > <br>
       <label>age</label> <br>
      <input type="text" name="age" >
      <label> Mail</label>
      <input type="email" name="email">

      <br>
     <input type="submit" name="Login" value="login"> <br>
  </form>


</body>
</html>
<?php
if(isset($_POST["Login"])){
    $username = filter_input(INPUT_POST, "userName", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $mail = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
}
   if(empty(Susername)){
       echo:"Invalid ";
   }else{
       echo "your Name is $username";
   }
if(empty($age)){
    echo:"Invalid ";
   }else{
    echo "your Age is $age";
   }
if(empty($mail)){
    echo "Invalid ";
   }else{
    echo "your Name is $mail";
   }
   
   
?>

