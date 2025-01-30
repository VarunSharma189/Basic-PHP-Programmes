WAP for finding the biggest number in an array without using any array functions
<?php

$array = [1,4,6,8,18];
$num = 0;
for($i = 0; $i<=4; $i++){
if ($num > $array[$i]){
$num = $num;
} 
else {
    $num - $array[$i];
}
}
echo $num;
echo "This Program is written by Aaryan Khurana 0231BCA187"
?>