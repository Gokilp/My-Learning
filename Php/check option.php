// Create a Radio using php application 
// Radio button means selecting an option 
// Radio 
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
      <input type="checkbox" name="pizza" value="Pizza" >Pizza <br>
      <input type="checkbox" name="orange" value="Oranage" >Oranage <br>
      <input type="checkbox" name="apple" value="Apple">Apple <br>
      <input type="checkbox" name=" lemon" value=" Lemon">Lemon <br>
      <input type="submit" name="sumbit">
  </form>


</body>
</html>
<?php
    if(isset ($_POST["sumbit"])){

        if(isset($_POST["pizza"])){
            echo "You selected Pizza";
        }
        if($_POST["orange"]){
            echo "You selected Orange";
        }
        if(isset($_POST["apple"])){
            echo "You selected Apple";
        }
        if(isset($_POST["lemon"]) ){
            echo "You selected lemon";
        }


        if(empty($_POST["pizza"])){
            echo "You selected not Pizza";
        }
        if(empty($_POST["orange"])){
            echo "You selected not Orange";
        }
        if(empty($_POST["apple"])){
            echo "You selected not Apple";
        }
        if(empty($_POST["lemon"])){
            echo "You selected not lemon";
        }


    }

?>
