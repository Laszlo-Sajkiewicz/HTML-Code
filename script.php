<?php
function MSG() {
echo "Today is " . date("d/m/Y") . "<br>";
}
MSG(); // call the function
$cookie_name = "user";
$cookie_value = "John Smith";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
//Cookies are used to identify a user
//A cookie is created with the setcookie() function

        $mail='john.smith@linux.fr' ;
        echo "* $mail\t > Adresse ".((strlen(filter_var($mail, FILTER_VALIDATE_EMAIL))) ? "valide" : "invalide")."\n" ;
        $mail='john.smith@-linux' ;
        echo "* $mail\t > Adresse ".((strlen(filter_var($mail, FILTER_VALIDATE_EMAIL))) ? "valide" : "invalide")."\n" ;
?>

