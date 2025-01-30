WAP to demonstare switch statement 
<?php

    /* example 1 */
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++)
    {
        echo $i;
    	echo "\t";
    }
    
    /* example 2 */
    echo "\nAnother Way\t";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo $i;
    	echo "\t";
    }
    echo "This Program is written by Aaryan Khurana 0231BCA187"

?>