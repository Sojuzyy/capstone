<?php

    $localhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'gmc-ais';

    $conn = new mysqli($localhost, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    #table for guest appt
    $sql = 'CREATE TABLE GuestAppt (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, date_created DATE, lname VARCHAR(25), fname VARCHAR(25), mi VARCHAR(5), email VARCHAR(255), cnumber INT(11), seflie LONGBLOB, validid LONGBLOB, apptdate DATE, appttime TIME, purpose VARCHAR(25), apptperson VARCHAR(25), remarks VARCHAR(25))';

    if ($conn->query($sql) === TRUE) {
        echo 'Table GuestAppt created successfully';
    } else {
        echo 'Error creating table: ' . $conn->connect_error;
    }

    #table for account user appt
    $sql = 'CREATE TABLE UserAccountAppt (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, date_created DATE, lname VARCHAR(25), fname VARCHAR(25), mi VARCHAR(25), idnumber INT, purpose VARCHAR(25), apptperson VARCHAR(25), apptdate DATE, appttime TIME, remarks VARCHAR(25))';

    if ($conn->query($sql) === TRUE) {
        echo 'Table UserAccountAppt created successfully';
    } else {
        echo 'Error creating table: ' . $conn->connect_error;
    }

    #table for login
    $sql = 'CREATE TABLE UserAccount (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, lname VARCHAR(25), fname VARCHAR(25), mi VARCHAR(5), email VARCHAR(255), pword VARCHAR(255), cnumber INT(11), idnumber INT, position VARCHAR(25), course VARCHAR(25), grdlvl INT)';
    
    if ($conn->query($sql) === TRUE) {
        echo 'Table UserAccount created successfully';
    } else {
        echo 'Error creating table: ' . $conn->connect_error;
    }

    $conn->close();
?>