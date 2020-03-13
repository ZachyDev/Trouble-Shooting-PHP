<?php
    // types of errors in php
        // 1.Notices - e.g accessing undefined variable
        // 2.Warnings e.g including a file that does not exist
        // 3.Fatal-causes termination
        // turn off the errors using error_reporting
        error_reporting(0); 
        echo $a;//Notice
        echo "hello";//the code will still execute despite of this error
        include('test.php');
        echo "The statement after warning error excuting...";
        require('test.php');//this will cause a fatal error
?>