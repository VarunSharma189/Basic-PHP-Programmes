<?php

    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    
    $clength = count($cars);
    for($x = 0; $x < $clength; $x++)
    {
        echo $cars[$x] . "<br>";
    }
    echo "This Program is Written by Varun Sharma 0221BCA136";
?>
