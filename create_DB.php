<?php
include('test.php');

//create database
    $sql = "CREATE DATABASE FedEx_DB";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();

?>