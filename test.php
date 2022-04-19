<?php
//server connection codeblock
    $servername = "localhost";
    $username = "pamela";
    $password = "Macmela@2";
    $dbname = "FedEx_DB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfully";

 ?>