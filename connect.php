<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "om";
    // create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    // check
    if($conn -> connect_error){
        die("Connection failed" . $conn -> connect_error);
    }
?>