<?php

    @ session_start();

        $host="localhost";
        $UserName="root";
        $PassWord="";
        $dbName="techworld";
    

               $con=mysqli_connect($host,$UserName,$PassWord,$dbName) or die(mysqli_error());

?>