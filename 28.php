WAP to print factorial of any number
<?php
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = 5;

echo "The factorial of $number is: " . factorial($number);
echo "This Program is written by Aaryan Khurana 0231BCA187"
?>
