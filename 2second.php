<?php
// operator + ,-,*,/,%
// $firstname ="Kaung Myat";
// $seconname ="Thu";
// echo $firstname." ".$seconname;
// <,>,<=,>=,==,=,===(will be return ture or false)
// echo 3>=4;
// $x = 24;   (if x is greater than y will return 1 /equal 0/less than -1)
// $y =19;
// echo $x<=>$y;
$name = "Kaung MyatThu";
if($name =="Kaung Myat Thu"){
    echo "You are Kaung Myat Thu";
}else{
    echo "You are Not Kaung Myat Thu";
};
$personName = "Mg Mg";
$personAge = 21;
if ($personName=="Mg Mg" && $personAge ==21) {
    echo "He is Mg Mg";
} else {
    echo "He is Not Mg Mg";
}
if ($personName=="Mg Mg" && $personAge==20) {
    echo "He is Mg Mg";
}elseif($personName=="Kyaw Kyaw" || $personAge == 21){
echo "He is Kyaw Kyaw";
}
 else {
   echo "He is not Kyaw Kyaw not also Mg Mg";
}


?>