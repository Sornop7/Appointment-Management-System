<?php

    $database= new mysqli("localhost","root","","appoint");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>