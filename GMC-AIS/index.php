<?php 
    require('header.php');
    include 'includes/connection.php'; // Include your database connection file
    
    function login($Student_ID) {
        global $conn; // Assume $conn is your database connection
    
        // Sanitize input to prevent SQL injection
        $Student_ID = mysqli_real_escape_string($conn, $Student_ID);
    
        // Query to retrieve user information based on email
        $query = "SELECT * FROM student_account WHERE Student_ID = '$Student_ID'";
        $result = mysqli_query($conn, $query);
    
        if ($result && mysqli_num_rows($result) > 0) {
            // User found, verify the password
            $user = mysqli_fetch_assoc($result);
            if (password_verify($user['Student_ID'])) {
                // Password is correct, user is authenticated
                return $user;
            } else {
                // Password is incorrect
                return false;
            }
        } else {
            // User not found
            return false;
        }
    }
    ?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Golden Minds College</title>
    </head>
    <body>
        <div class="parallax">
            <div class="container-fluid">
                <div class="row" id="intro-container">
                    <div class="col-sm-6">
                        <div style="display: flex;">
                            <img src="src/img/gmc-logo.png" alt="Golden Minds College Logo" id="logo">
                            <div class="col-sm-7">
                                <h1 id="title">Golden Minds College</h1>
                                <p id="intro-text">A private school that offers free education, produce graduates that are competitive in the current global trends.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require('appt-modal.php')
        ?>
        <?php
            require('history.php')
        ?>
        <?php
            require('mnv.php')
        ?>
        <?php
            require('cvalues.php')
        ?>
        <?php
            require('footer.php')
        ?>
    </body>
</html>