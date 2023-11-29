<?php

    $localhost = 'localhost'; #localhost
    $dbusername = 'root'; #phpmyadmin username
    $dbpassword = ''; #phpmyadmin password


    #connection string
    $conn = mysqli_connect($localhost, $dbusername, $dbpassword);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    echo 'Connected successfully';
?>