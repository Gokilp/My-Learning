<?php
   // isset() = Return TRUE if a Variable is declared   and not NUll
  //  empty() = Return TRUE if a Variable is not Declared , False, NUll,"empty String Value"

     $userName  =" Gokilp ";
  if(isset($userName)){
   echo "This variable is have a Value";
}else{
     echo "This variable is not have a Value";
}

if(empty($userName)){
    echo "This variable is have a Value";
}else{
    echo "This variable is not have a Value";
}

?>

