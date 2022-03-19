<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// // Variable Scope ==> globle variable and local varuable
$name="Kaung Myat Thu";
$age =21;
echo $name;
function age(){
    global $age , $name;
     echo "You age is $age"."$name";
}
age();
?>