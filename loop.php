<?php
// looping
function sayMyname($initial){
    echo "$initial Kaung Myat Thu<br>";
}
for ($i=0; $i <10 ; $i++) { 
  sayMyname($i);
  
}
$array=["kaung Myat Thu",21,"Translator"];
// print_r(count($array));
for ($i=0; $i < count($array); $i++) { 
    echo $array[$i];
   
}
foreach ($array as $data ) {
    echo $data;
}
?>