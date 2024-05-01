<?php


 // cookie = Informartion about the user stored in user's Web broweser
// Targeted Advertisment, Browsing perferencing other non-senstive data

//setcookie("fav_food", "pizza", time() -0 ));  // Cookie will deleted and ma
setcookie("fav_food", "pizza", time() + (86400 * 2)); // variable, value , timing
setcookie("fav_drink", "Coffee", time() + (86400 * 1));
setcookie("fav_dessert", "ice Cream", time() + (86400 * 3));

if (isset($_COOKIE["fav_food"])) {
    echo "Buy Some {$_COOKIE["fav_food"]}";
} else {
    echo "I did Not Like pizza";
}

echo "<br>";

if (isset($_COOKIE["fav_drink"])) {
    echo "Buy Some {$_COOKIE["fav_drink"]}";
} else {
    echo "I did Not Like Coffee";
}

echo "<br>";

if (isset($_COOKIE["fav_dessert"])) {
    echo "Buy Some {$_COOKIE["fav_dessert"]}";
} else {
    echo "I did Not Like ice Cream";
}











?>
