<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo"Test";


$value=key($_GET['cookiesConfirm']);

print_r($value);


if($value == true){
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}



?>