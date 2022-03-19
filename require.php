<?php
// include "2second.php";//include is allow if wrong file directory 
// echo "Hello I aminclude";
// require "3third.php";//require not allow if wrong file directory
// echo "Hello I am Third";

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <?php
     $name = "Kaung Myat Thu";
     if ($name=="Kaung Myat Thu") {
         ?>
        <h1>User name is <?php echo $name?></h1>
        <?php
     }else {
         echo "user name not correct";
     }
     ?>
     
 </body>
 </html>