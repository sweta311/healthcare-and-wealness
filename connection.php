<?php

    $database= new mysqli("localhost","root","","edocc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>