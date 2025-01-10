WAP to demonstrate object types in php
<br>
<?php

    // Class definition
    class greeting
    {
        // properties
        public $str = "Hello World!";
        
        // methods
        function show_greeting()
        {
            return $this->str;
        }
    }
     
    // Create object from class
    $message = new greeting;
    var_dump($message);  
    echo "<br>";
    echo "This Program is written by Varun Sharma 0221BCA136"

?>
