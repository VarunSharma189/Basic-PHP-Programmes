WAP to find HCF of two numbers
<?php
// Function to calculate the HCF of two numbers
function findHCF($num1, $num2) {
    while ($num2 != 0) {
        $remainder = $num1 % $num2;
        $num1 = $num2;
        $num2 = $remainder;
    }
    return $num1;
}

// Input numbers
$num1 = 56;
$num2 = 98;

// Calculate and print the HCF
echo "The HCF of $num1 and $num2 is: " . findHCF($num1, $num2);
echo "This Program is written by Aaryan Khurana 0231BCA187"
?>
