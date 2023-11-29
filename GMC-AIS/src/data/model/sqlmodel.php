<?php

    $localhost = 'localhost'; #localhost
    $dbusername = 'root'; #phpmyadmin username
    $dbpassword = ''; #phpmyadmin password


    #connection string
    $conn = mysqli_connect($localhost, $dbusername, $dbpassword);

    #check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    #create database
    $sql = 'CREATE DATABASE gmc-ais';
    if ($conn->query($sql) === TRUE) {
        echo 'Database created successfully';
    } else {
        echo 'Error creating database' . $conn->error;
    }

    #create table
    require('sqlmodel-tables.php');

    $conn->close();
?>