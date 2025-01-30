WAP in php to print Fibonacci series
<?php
function printFibonacci($terms) {
    $num1 = 0;
    $num2 = 1;

    echo "Fibonacci Series: $num1, $num2";
    for ($i = 3; $i <= $terms; $i++) {
        $next = $num1 + $num2;
        echo ", $next";
        $num1 = $num2;
        $num2 = $next;
    }
}

$terms = 10;

printFibonacci($terms);
echo "This Program is written by Aaryan Khurana 0231BCA187"
?>
