
// create a simple application in php 
// using a Radio button 
// check button click the user and print the screen in Value 

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
      <input type="radio" name="Creditcard" value="Visa"> Visa<br>
      <input type="radio" name="CreditCard" value="Rupee"> Rupee<br>
      <input type="radio" name="CreditCard" value="Master"> Master<br>
      <input type="radio" name="CreditCard" value="cash"> Cash<br>
      <input type="radio" name="CreditCard" value="AmercianExpress">AmercianExpress <br>
      <input type="submit" name="CreditCard" value="Confirm">
  </form>


</body>
</html>

<?php
if(isset($_POST["CreditCard"])){
    $credit_Card = $_POST["CreditCard"];
    if($credit_Card == "cash")
    {
        echo "You select cash";
    }
    else{
         switch($credit_Card){
             case "visa":
                 echo "You select visa";
                 break;
             case "Rupee":
                 echo "You select Rupee";
                 break;
             case "Master":
                 echo "You select Master";
                 break;
             case "AmercianExpress":
                 echo "You select AmercianExpress";
                 break;
             default:
                 echo "You selected Invalid";
                 break;
         }
    }
}

?>

