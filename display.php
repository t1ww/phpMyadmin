<?php
    include 'connect.php';
    // query
    $sql = "SELECT * from customers";
    $result = $conn -> query($sql);
    $count = 1;
    // echo
    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            echo $count++ . " ) ". "customer name : " . $row["customer_first_name"] . " " . $row["customer_last_name"] . ", state : " . $row["customer_state"] . "<br>";
        }
    }else{
        echo "no result";
    }
    echo "total result = " . $result -> num_rows;

    // close
    $conn -> close();
?>